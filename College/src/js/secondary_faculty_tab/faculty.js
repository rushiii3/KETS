import { loading_animation } from "../../js/common/lottie_loading_animation.js";
import { makeAJAXRequest } from "../../js/common/make_ajax_request.js";
import { vaze_logo } from "../common/vaze_college_logo_base_64.js";

const filter_div = document.getElementById("filter_div");
const filter_toggle_btn = document.getElementById("filter_toggle_btn");
const filter_mobile_close_btn = document.getElementById(
  "filter_mobile_close_btn"
);

const navbar_height = document.querySelector(".navbar").offsetHeight;

//Search varibles
const search_button = document.getElementById("search_button");
const search_input_field = document.getElementById("search_input_field");
const search_form = document.getElementById("search_form");

//no search results
const no_results_element = `<div class=" mt-4 flex flex-col justify-center items-center w-full h-1/2 dark:text-white text-lg">
        <img src="../../../assets/svg/sad_emoji_svg.svg" class="sm:w-[10rem] sm:h-[10rem] dark:bg-white dark:text-white" alt="Vaze College Course Catalog"/>
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
let college_sec_filter_state = [];
let faculty_loading_state = false;

//////////////////////////////////////////////////////////////////////////////////

//initial fetch from the database
//fetchFacultyFromDB();

/////////////////////////////// EVENTS //////////////////////////////////
filter_toggle_btn.addEventListener("click", (e) => {
  //console.log("filter button clicked " + is_filter_visible);

  //for screen sizes with 640 px width and above
  if (is_filter_visible && window.innerWidth >= 640) {
    filter_div.classList.add("-translate-x-[100rem]");

    filter_div.classList.replace("sm:w-1/4", "sm:w-0");

    is_filter_visible = false;
    //console.log(is_filter_visible);
  } else if (!is_filter_visible && window.innerWidth >= 640) {
    if (filter_div.classList.contains("-translate-x-[100rem]")) {
      filter_div.classList.remove("-translate-x-[100rem]");
    } else {
      filter_div.classList.add("translate-x-[100rem]");
    }

    filter_div.classList.replace("sm:w-0", "sm:w-1/4");

    is_filter_visible = true;
    //console.log(is_filter_visible);
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

$("#apply_filter_button").click(function (e) {
  e.preventDefault();
  // console.log("apply button clicked")
  let checkedDepartments = [];
  let checkedFaculty = [];
  let checkedDesignation = [];
  let checkedCollegeSections = [];
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

  $("input[name='college_section']:checked").each(function () {
    checkedCollegeSections.push($(this).val());
  });

  college_sec_filter_state = checkedCollegeSections;

  if (
    checkedDepartments.length +
      checkedFaculty.length +
      checkedDesignation.length +
      checkedCollegeSections.length !=
    0
  ) {
    fetchFacultyFromDB();
  }
  dismissFilterWindowWhenInMobileMode();
});

$("#filter_clear_button").click(function (e) {
  e.preventDefault();
  console.log(e);
  let isAnyCheckboxChecked = false;
  $("input[type='checkbox']").each(function () {
    if ($(this).prop("checked")) {
      $(this).prop("checked", false);
      isAnyCheckboxChecked = true;
    }
  });

  resetState();
  if (isAnyCheckboxChecked) {
    fetchFacultyFromDB();
  }
  dismissFilterWindowWhenInMobileMode();
});

$(".sort_selector").each(function () {
  $(this).click(function () {
    //console.log("here");

    operationsToPerformOnAlphabetClick($(this));
    //console.log(sort_state)
    fetchFacultyFromDB();
  });
});

$(".next_button").each(function () {
  $(this).click(function () {
    $(".sort_selector.selected_sort_letter").next().click();
    //scroll to the top of the faculty filter div
    window.scrollTo({
      top: 0 + window.innerHeight - navbar_height,
    });
  });
});

$(".previous_button").each(function () {
  $(this).click(function () {
    $(".sort_selector.selected_sort_letter").prev().click();
    //scroll to the top of the faculty filter div
    window.scrollTo({
      top: 0 + window.innerHeight - navbar_height,
    });
  });
});

$("#take_a_look_btn").click(function () {
  window.scrollTo({
    behavior: "smooth",
    top: window.innerHeight - navbar_height,
  });
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
    //console.log(is_filter_visible);

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

  if (college_sec_filter_state.length > 0) {
    let college_sections = college_sec_filter_state.map((college_sec) =>
      college_sec.toLowerCase()
    );
    if (
      query_params.includes("search") ||
      query_params.includes("sort") ||
      query_params.includes("dept") ||
      query_params.includes("faculty") ||
      query_params.includes("designation")
    ) {
      query_params += `&college_sec=${college_sections.join(",")}`;
    } else {
      query_params += `college_sec=${college_sections.join(",")}`;
    }
  }

  let ajax_url = `./AJAX/fetch_faculty.php${query_params}`;
  //console.log(`ajax url is  ${ajax_url}`);

  faculty_loading_state = true;
  if (faculty_loading_state) {
    $("#faculty_cards_grid_div").html("");
    $("#loading_animation_div").removeClass("hidden");
    $("#loading_animation_div").html(loading_animation);
  }

  setTimeout(() => {
    makeAJAXRequest(
      ajax_url,
      "GET",
      "json",
      null,
      function (success_json_response) {
        let no_of_faculty_for_first_alphabet = 0;
        $("#loading_animation_div").html("");
        //console.log(success_json_response);

        if (success_json_response.faculty_array.length > 0) {
          $("#loading_animation_div").addClass("hidden");
          let first_letter_of_first_faculty =
            success_json_response.faculty_array[0]["cp_name"]
              .substring(0, 1)
              .toLowerCase()
              .trim();
          //console.log(first_letter_of_first_faculty);
          //console.log(success_json_response);
          //sort_state = first_letter_of_first_faculty;
          if (sort_state == "") {
            $(".sort_selector").each(function () {
              if (
                $(this).text().trim().toLowerCase() ==
                first_letter_of_first_faculty
              ) {
                //$(this).click();
                //console.log("here")
                operationsToPerformOnAlphabetClick($(this));
              }
            });
          }
          success_json_response.faculty_array.forEach((response) => {
            if (
              response.cp_name.substring(0, 1).trim().toLowerCase() ==
              first_letter_of_first_faculty
            ) {
              let dept_faculty_name = "";
              let college_sec_name = "";

              no_of_faculty_for_first_alphabet++;

              switch (response.dept_faculty_name) {
                case "a":
                  dept_faculty_name = "Arts";
                  break;
                case "s":
                  dept_faculty_name = "Science";
                  break;
                case "c":
                  dept_faculty_name = "Commerce";
                  break;
              }

              switch (response.college_sec_name) {
                case "j":
                  college_sec_name = "Junior College";
                  break;
                case "d":
                  college_sec_name = "Degree College";
                  break;
                case "s":
                  college_sec_name = "Self-Financing Courses (SFC) section";
                  break;
              }
              $("#faculty_cards_grid_div").append(
                constructFacultyCard(
                  response.cp_image_path,
                  response.cp_personal_website_link,
                  `${response.cp_honourific} ${response.cp_name}`,
                  response.cp_desig,
                  response.dept_name,
                  dept_faculty_name,
                  college_sec_name
                )
              );
            }
          });
        } else {
          $("#loading_animation_div").html(no_results_element);
        }

        //set the count

        let starting_range_current_letter = 0;
        let ending_range_of_current_letter = 0;
        if (
          success_json_response.total_rows >
            success_json_response.count_of_previous_letters &&
          no_of_faculty_for_first_alphabet != 0
        ) {
          starting_range_current_letter =
            success_json_response.count_of_previous_letters + 1;
          ending_range_of_current_letter =
            starting_range_current_letter -
            1 +
            no_of_faculty_for_first_alphabet;
        }
        $("#no_of_faculty_para").text(
          `Showing ${starting_range_current_letter} - ${ending_range_of_current_letter} of ${success_json_response.total_rows} results`
        );

        //reset the sort state
        //the sort state should be used only when the user clicks on the letters or the "next" or "prev" button.This is because if the sort state is stored and the filter options are used, then if the corresponding letter selected doesnt have any results, it will show "no results found", but the results might start with a different letter, causing the user to believe that there are no results.
        //Hence dont use the sort state and instead fetch the results when filters are applied and then set the selected letter to the first letter of the first result.
        //If the user wants a specific letter he will have to choose it again.
        //That is the trade-off
        sort_state = "";

        success_json_response = "";
      },
      function (error, xhr, status) {
        //set the count
        $("#no_of_faculty_para").text(`Showing ${0} of ${0} results`);
        $("#loading_animation_div").html(no_results_element);
        console.log(error);
      }
    );
  }, 2000);
}

function constructFacultyCard(
  faculty_img_path,
  faculty_personal_website_link,
  faculty_name_and_honourific,
  faculty_designation,
  faculty_department,
  faculty_type,
  faculty_college_sec_name
) {
  //console.log(faculty_name_and_honourific)
  return `<div class="flex flex-col gap-4 sm:flex-row p-4 rounded-2xl shadow-2xl dark:shadow-none bg-white group dark:bg-gray-800">
                    <div class="sm:w-[40%] rounded-2xl aspect-square overflow-hidden">
                      <img src="${
                        faculty_img_path ?? vaze_logo
                      }" alt="Vaze College Faculty Image" class="object-fit w-full h-full group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <div class="flex-1 flex flex-col dark:text-white">
                      <a href="${
                        faculty_personal_website_link ?? ""
                      }" class="font-bold text-[1.5rem] ${
    faculty_personal_website_link
      ? "hover:cursor-pointer hover:text-blue-900 dark:hover:text-emerald-500 hover:underline"
      : "hover:cursor-default"
  }">${faculty_name_and_honourific}</a>

                      <p class="text-blue-800 text-sm  dark:text-emerald-500">${faculty_designation}</p>

                      <p class="mt-4 font-medium dark:text-white">Department</p>
                      <a href="" class="text-sm hover:cursor-pointer text-slate-600 dark:text-slate-400 hover:text-black  dark:hover:text-emerald-500 hover:underline">Department of ${faculty_department}</a>

                      <p class="mt-4 font-medium">Faculty Type</p>
                       <p class="text-sm text-slate-600 dark:text-slate-400">
                        ${faculty_type}
                      </p>

                      <p class="mt-4 font-medium">College Section</p>
                      <p class="text-sm text-slate-600 dark:text-slate-400">
                       ${faculty_college_sec_name}
                      </p>
                    </div>
                  </div>`;
}

//there are multiple places where this function is used and this is without including the "fetchFacultyFromDb()" function. The fetch function is excluded on purpose and this function is required
function operationsToPerformOnAlphabetClick(currentElement) {
  $(".sort_selector.selected_sort_letter").each(function () {
    $(this).removeClass(["selected_sort_letter","dark:selected_sort_letter"]);
    $(this).addClass(["dark:text-white" ,"text-slate-500"]);
  });
  currentElement.removeClass(["dark:text-white","text-slate-500"]);
  currentElement.addClass("selected_sort_letter dark:selected_sort_letter");

  sort_state = currentElement.text().trim();
  //console.log(sort_state);
  if (sort_state == "Z") {
    $(".next_button").each(function () {
      $(this).addClass("invisible");
    });
    if ($(".previous_button").first().hasClass("invisible")) {
      $(".previous_button").each(function () {
        $(this).removeClass("invisible");
      });
    }
  } else if (sort_state == "A") {
    $(".previous_button").each(function () {
      $(this).addClass("invisible");
    });

    if ($(".next_button").first().hasClass("invisible")) {
      $(".next_button").each(function () {
        $(this).removeClass("invisible");
      });
    }
  } else {
    if ($(".next_button").first().hasClass("invisible")) {
      $(".next_button").each(function () {
        $(this).removeClass("invisible");
      });
    } else if ($(".previous_button").first().hasClass("invisible")) {
      $(".previous_button").each(function () {
        $(this).removeClass("invisible");
      });
    }
  }
}

function resetState() {
  faculty_search_query_state = "";
  limit_state = 50;
  offset_state = 0;
  sort_state = "";
  department_filter_state = [];
  faculty_filter_state = [];
  designation_filter_state = [];
  college_sec_filter_state = [];
  faculty_loading_state = false;
}
