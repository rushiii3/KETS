const subject_combinations_buttons_div=document.getElementById("subject_combinations_buttons_div");
const all_buttons_inside_subject_combinations_buttons_div= subject_combinations_buttons_div.querySelectorAll("button");
let selected_subject_combination_button;

const fyjc_subject_combination_info_div=document.getElementById("fyjc_subject_combinations");
const syjc_subject_combination_info_div=document.getElementById("syjc_subject_combinations");


/////////EVENT LISTENERS///////////////////
all_buttons_inside_subject_combinations_buttons_div.forEach((button)=>{

    if(button.classList.contains("bg-blue-500")){
        selected_subject_combination_button=button;
    }

    button.addEventListener('click',()=>{
        if(button.classList.contains("bg-gray-50")){
            button.classList.remove("bg-gray-50","font-medium","text-gray-600","hover:bg-gray-100")
            button.classList.add("bg-blue-500","font-bold","text-blue-100","hover:bg-blue-600");
            
            
            if(button.innerText.trim().toLowerCase()=="fyjc"){
                fyjc_subject_combination_info_div.classList.replace("hidden","flex")
                syjc_subject_combination_info_div.classList.replace("flex","hidden")
            }
            else{
                syjc_subject_combination_info_div.classList.replace("hidden","flex")
                fyjc_subject_combination_info_div.classList.replace("flex","hidden")
                
            }
            
            selected_subject_combination_button.classList.remove("bg-blue-500","font-bold","text-blue-100","hover:bg-blue-600");
            selected_subject_combination_button.classList.add("bg-gray-50","font-medium","text-gray-600","hover:bg-gray-100");
            
            selected_subject_combination_button=button;
        }
        
    })
})

/////////////FUNCTIONS//////////////////////