import { loading_animation } from "../../js/common/lottie_loading_animation.js";
import { makeAJAXRequest } from "../../js/common/make_ajax_request.js";
import { vaze_logo } from "../common/vaze_college_logo_base_64.js";

const filter_div = document.getElementById("filter_div");
const filter_toggle_btn = document.getElementById("filter_toggle_btn");
const filter_mobile_close_btn = document.getElementById(
  "filter_mobile_close_btn"
);

//Search varibles
const search_button = document.getElementById("search_button");
const search_input_field = document.getElementById("search_input_field");
const search_form = document.getElementById("search_form");

//no search results
const no_results_element = `<div class=" flex flex-col justify-center items-center w-full h-1/2 dark:text-white text-lg">
        <img src="../../../assests/svg/sad_emoji_svg.svg" class="w-[10rem] h-[10rem] dark:bg-white dark:text-white" alt="Vaze College Course Catalog"/>
          <p class="text-center ">Sorry! Couldn't find what you are looking for</p>
          </div>`;

let is_filter_visible = false;
if (window.innerWidth >= 640) {
  is_filter_visible = true;
}

//////////////////////////////////////////////////////////////////////////////////////////
let faculty_search_query_state = "";
let limit_state = 50;
let offset_state = 0;
let sort_state = "";
let department_filter_state = [];
let faculty_filter_state = [];
let designation_filter_state = [];
let faculty_loading_state = false;

//////////////////////////////////////////////////////////////////////////////////

//initial fetch from the database
//fetchFacultyFromDB();

/////////////////////////////// EVENTS //////////////////////////////////
filter_toggle_btn.addEventListener("click", (e) => {
  console.log("filter button clicked " + is_filter_visible);

  //for screen sizes with 640 px width and above
  if (is_filter_visible && window.innerWidth >= 640) {
    filter_div.classList.add("-translate-x-[100rem]");

    filter_div.classList.replace("sm:w-1/4", "sm:w-0");

    is_filter_visible = false;
    console.log(is_filter_visible);
  } else if (!is_filter_visible && window.innerWidth >= 640) {
    if (filter_div.classList.contains("-translate-x-[100rem]")) {
      filter_div.classList.remove("-translate-x-[100rem]");
    } else {
      filter_div.classList.add("translate-x-[100rem]");
    }

    filter_div.classList.replace("sm:w-0", "sm:w-1/4");

    is_filter_visible = true;
    console.log(is_filter_visible);
  }

  //for mobile

  dismissFilterWindowWhenInMobileMode();
});

//when the close icon in filter is clicked
filter_mobile_close_btn.addEventListener("click", (e) => {
  dismissFilterWindowWhenInMobileMode();
});

//this is for testing purposes
window.addEventListener("resize", () => {
  //console.log("window resized");
  resetFilterDivCSS();

  if (window.innerWidth >= 640) {
    document.body.style.overflow = "auto";

    is_filter_visible = true;
  } else {
    is_filter_visible = false;
  }
});

search_form.addEventListener("submit", (e) => {
  e.preventDefault();
  search_button.click();
});

$("#search_button").click(function () {
  if (search_input_field.value != "") {
    faculty_search_query_state = search_input_field.value.toLowerCase();
    fetchFacultyFromDB();
  }
});

$("#btn_clear_search").click(function () {
  search_input_field.value = "";
  faculty_search_query_state = "";

  fetchFacultyFromDB();
});

$("#apply_filter_button").click(function () {
  // console.log("apply button clicked")
  let checkedDepartments = [];
  let checkedFaculty = [];
  let checkedDesignation = [];
  $("input[name='department']:checked").each(function () {
    checkedDepartments.push($(this).val());
  });
  department_filter_state = checkedDepartments;

  $("input[name='faculty']:checked").each(function () {
    checkedFaculty.push($(this).val());
  });
  faculty_filter_state = checkedFaculty;

  $("input[name='designation']:checked").each(function () {
    checkedDesignation.push($(this).val());
  });
  designation_filter_state = checkedDesignation;

  fetchFacultyFromDB();

  dismissFilterWindowWhenInMobileMode();
});

$("#filter_clear_button").click(function () {
  console.log("clear button clicked");
  fetchFacultyFromDB();
});

///////////////////////////////////////////////////////////////// FUNCTIONS ////////////////////////////////////

function resetFilterDivCSS() {
  filter_div.classList.forEach((css_class) => {
    filter_div.classList.remove(css_class);
  });

  filter_div.classList.add(
    "-bottom-[100rem]",
    "sm:top-0",
    "z-10",
    "fixed",
    "sm:flex",
    "sm:relative",
    "sm:w-1/4",
    "transition-transform",
    "transition-width",
    "duration-[750ms]",
    "ease-in-out"
  );
}

function dismissFilterWindowWhenInMobileMode() {
  if (!is_filter_visible && window.innerWidth < 640) {
    filter_div.classList.add("w-full");

    if (filter_div.classList.contains("translate-y-[100rem]")) {
      filter_div.classList.remove("translate-y-[100rem]"); //,"translate-x-[100rem]"
      //console.log("here")
    }

    filter_div.classList.add("-translate-y-[100rem]");

    document.body.style.overflow = "hidden";
    is_filter_visible = true;

    //is_filter_visible=false;
    //console.log(is_filter_visible)
  } else if (is_filter_visible && window.innerWidth < 640) {
    if (filter_div.classList.contains("-translate-y-[100rem]")) {
      filter_div.classList.remove("-translate-y-[100rem]"); //,"translate-x-[100rem]"
      //console.log("here")
    } else {
      filter_div.classList.add("translate-y-[100rem]");
    }
    is_filter_visible = false;
    console.log(is_filter_visible);

    document.body.style.overflow = "auto";
  }
}

function fetchFacultyFromDB() {
  let query_params = "?";
  if (faculty_search_query_state != "") {
    query_params += `search=${faculty_search_query_state}`;
  }

  if (sort_state.length > 0 && sort_state.length < 2) {
    if (query_params.includes("search")) {
      query_params += `&sort=${sort_state.toLowerCase()}`;
    } else {
      query_params += `sort=${sort_state.toLowerCase()}`;
    }
  }
  if (department_filter_state.length > 0) {
    let dept_state = department_filter_state.map((dept) => dept.toLowerCase());
    if (query_params.includes("search") || query_params.includes("sort")) {
      query_params += `&dept=${dept_state.join(",")}`;
    } else {
      query_params += `dept=${dept_state.join(",")}`;
    }
  }
  if (faculty_filter_state.length > 0) {
    let faculty_state = faculty_filter_state.map((faculty) =>
      faculty.toLowerCase()
    );
    if (
      query_params.includes("search") ||
      query_params.includes("sort") ||
      query_params.includes("dept")
    ) {
      query_params += `&faculty=${faculty_state.join(",")}`;
    } else {
      query_params += `faculty=${faculty_state.join(",")}`;
    }
  }
  if (designation_filter_state.length > 0) {
    let desig_state = designation_filter_state.map((desig) =>
      desig.toLowerCase()
    );
    if (
      query_params.includes("search") ||
      query_params.includes("sort") ||
      query_params.includes("dept") ||
      query_params.includes("faculty")
    ) {
      query_params += `&designation=${desig_state.join(",")}`;
    } else {
      query_params += `designation=${desig_state.join(",")}`;
    }
  }

  let ajax_url = `./AJAX/fetch_faculty.php${query_params}`;
  //console.log(`ajax url is  ${ajax_url}`);

  faculty_loading_state = true;
  if (faculty_loading_state) {
    $("#loading_animation_div").removeClass("hidden");
    $("#loading_animation_div").html(loading_animation);
  }

  //setTimeout(()=>{
  makeAJAXRequest(
    ajax_url,
    "GET",
    "json",
    null,
    function (success_json_response) {
      $("#loading_animation_div").html("");
      //console.log(success_json_response);

      $("#faculty_cards_grid_div").html("");

      if (success_json_response.length > 0) {
        $("#loading_animation_div").addClass("hidden");
        success_json_response.forEach((response) => {
          $("#faculty_cards_grid_div").append(
            constructFacultyCard(
              response.cp_image_path,
              response.cp_personal_website_link,
              `${response.cp_honourific}${response.cp_name}`,
              response.cp_desig,
              response.dept_name
            )
          );
        });
      } else {
        $("#loading_animation_div").html(no_results_element);
      }

      //set the count
      $("#no_of_faculty_para").text(
        `Showing ${success_json_response.length} of ${success_json_response.length} results`
      );
    },
    function (error, xhr, status) {
      //set the count
      $("#no_of_faculty_para").text(
        `Showing ${success_json_response.length} of ${success_json_response.length} results`
      );
      $("#loading_animation_div").html(no_results_element);
      console.log(error);
    }
  );

  //},5000)
}

function constructFacultyCard(
  faculty_img_path,
  faculty_personal_website_link,
  faculty_name_and_honourific,
  faculty_designation,
  faculty_department
) {
  return `<div class="flex flex-col gap-4 sm:flex-row p-4 rounded-2xl shadow-2xl dark:shadow-none bg-white group dark:bg-gray-800">
                    <div class="sm:w-1/3 rounded-2xl aspect-square overflow-hidden">
                      <img src="${
                        faculty_img_path ?? vaze_logo
                      }" alt="Vaze College Faculty Image" class=" object-fit w-full h-full group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <div class="flex-1 flex flex-col dark:text-white">
                      <a href="${
                        faculty_personal_website_link ?? ""
                      }" class="font-bold text-[1.5rem] ${
    faculty_personal_website_link
      ? "hover:cursor-pointer hover:text-blue-500"
      : "hover:cursor-default"
  }">${faculty_name_and_honourific}</a>
                      <p class="text-slate-600 text-sm  dark:text-emerald-500">${faculty_designation}</p>
                      <p class="mt-4 font-bold">Department</p>
                      <a href="" class="hover:cursor-pointer hover:text-blue-500">Department of ${faculty_department}</a>
                    </div>
                  </div>`;
}
