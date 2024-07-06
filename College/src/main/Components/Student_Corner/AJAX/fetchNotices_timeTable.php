<?php
include("../../../../config/connect.php");
if (isset($_POST['year']) && isset($_POST['section'])) {
    $year = $_POST['year'];
    $section = $_POST['section'];

    $query = "SELECT n.* FROM `notices` as n INNER JOIN notices_are_for_clg_section_in_academic_year as ny on n.all_pdf_id=ny.notice_id where ny.academic_year='$year' and ny.college_sec_name='$section' AND n.all_pdf_upload_date >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH) ORDER BY all_pdf_upload_date DESC ";
    $result =  $conn->query($query);
    if ($result->num_rows < 10) {
        $query = "SELECT n.* FROM `notices` as n INNER JOIN notices_are_for_clg_section_in_academic_year as ny on n.all_pdf_id=ny.notice_id where ny.academic_year='$year' and ny.college_sec_name='$section'  ORDER BY all_pdf_upload_date DESC Limit 10";
        $result =  $conn->query($query);
    }
    
    while ($row = $result->fetch_assoc()) {
        $date = $row['all_pdf_upload_date'];
        $title = $row['all_pdf_title'];
        $link = $row['all_pdf_pdf_link'];
        echo '<a href="' . $link . '">
                    <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2 p-3 ">
                        <p class="text-base  px-2 my-5  cursor-pointer">
                            <a href="' . $link . '" target="_blank"><span class=" font-semibold  ">' . $date . ': </span>' . $title . '</a>
                        </p>
                    </div>
                </a>
                ';
    }
    
}
?>
