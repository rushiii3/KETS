<?php
include("../../../../config/connect.php");
include("../../../../php/encrypt_query_params.php");


if($_SERVER["REQUEST_METHOD"]=="GET"){
    $search_query=strtolower(mysqli_real_escape_string($conn,$_GET["search"]??""));
    $sort_letter=strtolower(mysqli_real_escape_string($conn,$_GET["sort"]??""));
    $dept_filter=strtolower(mysqli_real_escape_string($conn,$_GET["dept"]??""));
    $faculty_filter=strtolower(mysqli_real_escape_string($conn,$_GET["faculty"]??""));
    $designation_filter=strtolower(mysqli_real_escape_string($conn,$_GET["designation"]??""));

    //print_r(strlen($search_query));

    assert(strlen($sort_letter)<2);

    $bind_param_type_string="s";
    $bind_param_array=[$search_query];

    $sort_part_of_query="";
    $designation_part_of_query="";
    $faculty_part_of_query="";
    $dept_part_of_query="";

    if(strlen($sort_letter)>0){
        $bind_param_type_string.="s";
        array_push($bind_param_array,$sort_letter);
        $sort_part_of_query="AND college_personnel.cp_name LIKE CONCAT(?,'%')";
    }


    if(strlen($dept_filter)>0){
        $dept_filter_array=explode(",",$dept_filter);
        $bind_param_type_string.=str_repeat("s",count($dept_filter_array));
        array_push($bind_param_array,...$dept_filter_array);

        $question_mark_array=array_fill(0,count($dept_filter_array),"?");
        $placeholders=implode(",",$question_mark_array);
        $dept_part_of_query=" AND departments.dept_name IN ($placeholders)";
    }

    if(strlen($faculty_filter)>0){
        $faculty_filter_array=explode(",",$faculty_filter);
        $bind_param_type_string.=str_repeat("s",count($faculty_filter_array));
        array_push($bind_param_array,...$faculty_filter_array);

        $question_mark_array=array_fill(0,count($faculty_filter_array),"?");
        $placeholders=implode(",",$question_mark_array);
        $faculty_part_of_query=" AND dept_belongs_to_clg_section.dept_faculty_name IN ($placeholders)";
    }
    //print_r($designation_filter);
    
    if(strlen($designation_filter)>0){
        $designation_filter_array=explode(",",$designation_filter);
        
        $bind_param_type_string.=str_repeat("s",count($designation_filter_array));
        array_push($bind_param_array,...$designation_filter_array);
        //print_r("herer");
        // $bind_param_type_string.="s";
        // array_push($bind_param_array,$designation_filter);
        
        //$question_mark_array=array(0,count($designation_filter_array),"?");
        //$placeholders=implode(",",$question_mark_array);
        $designation_part_of_query=" AND ((SELECT GROUP_CONCAT(cp_designation.cp_designation SEPARATOR ',') ) LIKE (CONCAT('%',?,'%'))";
        //print_r($designation_part_of_query);

       for($i=1;$i<count($designation_filter_array);$i++){
            $designation_part_of_query.=" OR (SELECT GROUP_CONCAT(cp_designation.cp_designation SEPARATOR ',')) LIKE (CONCAT('%',?,'%')) ";
        }
        $designation_part_of_query.=") ";

    }

    // print_r($bind_param_array);
    // print_r($bind_param_type_string);
    

    $fetch_faculty_stmt="SELECT *,GROUP_CONCAT(cp_designation.cp_designation SEPARATOR ' | ') AS cp_desig FROM college_personnel 
    JOIN dept_belongs_to_clg_section ON college_personnel.cp_department_section=dept_belongs_to_clg_section.dept_sect_id 
    JOIN departments ON departments.dept_id= dept_belongs_to_clg_section.dept_id 
    JOIN cp_designation ON cp_designation.cp_id= college_personnel.cp_id 
    WHERE LOWER(college_personnel.cp_name) LIKE CONCAT(?,'%')";

    $fetch_faculty_stmt.=$sort_part_of_query;
    $fetch_faculty_stmt.=$dept_part_of_query;
    $fetch_faculty_stmt.=$faculty_part_of_query;
    $fetch_faculty_stmt.=$designation_part_of_query;

    $fetch_faculty_stmt.=" GROUP BY college_personnel.cp_id 
    ORDER BY college_personnel.cp_name ASC";

   //print_r($fetch_faculty_stmt);
    

    $fetch_faculty_query=$conn->prepare($fetch_faculty_stmt);
    $fetch_faculty_query->bind_param($bind_param_type_string,...$bind_param_array);
    $fetch_faculty_query->execute();
    $fetch_faculty_query_result=$fetch_faculty_query->get_result();

    $faculty_array=[];

    if($fetch_faculty_query_result){
        while($row=$fetch_faculty_query_result->fetch_assoc()){
            //print_r($row);
            $row["cp_id"]=encryptId($row["cp_id"],"../../../../config/openssl_encrypt_decrypt_credentials.php");
            array_push($faculty_array,$row);

        }
        print_r(json_encode($faculty_array));
        return json_encode($faculty_array);

    }
}





?>