

const filter_div = document.getElementById("filter_div");
const filter_toggle_btn = document.getElementById("filter_toggle_btn");
const filter_parent_div = document.getElementById("degree_tab_contents");
const filter_mobile_close_btn = document.getElementById(
  "filter_mobile_close_btn"
);

//Search varibles
const search_button = document.getElementById("search_button");
const search_input_field = document.getElementById("search_input_field");
const search_form = document.getElementById("search_form");

const all_jc_course_cards = document.querySelectorAll(".jc_stream_card");

let is_filter_visible = false;
if (window.innerWidth >= 640) {
  is_filter_visible = true;
}

const loading_animation = `<div class="w-full h-full flex justify-center items-center"><script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

    <dotlottie-player src="https://lottie.host/05cd14a8-5dbd-46bf-9c8f-d53989023063/S2BPC9SDzq.json" background="transparent" speed="1" style="width: 50%; height: 50%;" loop autoplay></dotlottie-player></div>`;

//////////////////////////////////////////////////////////////////////////////////////////
let degree_tab_search_query_state = "";
let limit_state = 50;
let offset_state = 0;
let level_filter_state = [];
let faculty_filter_state = [];
let college_section_filter_state = [];
const selected_tab_states = {
  degree: "d",
  junior: "j",
  certificate_course: "cc",
};

let selected_tab_state =
  sessionStorage.getItem("selected_tab_state") ?? selected_tab_states.degree;

   

  console.log("initially the selected tab state is:"+selected_tab_state);

let certificate_courses_tab_search_query_state = "";

let degree_courses_loading_state = false;
let certificate_courses_loading_state = false;


//////////////////////////////////////////////////////////////////////////////////
//let i=sessionStorage.getItem("times_loaded")??"1";

//if(i=="1"){
fetchProgrammesFromDB(limit_state, offset_state);
fetchCertificateCoursesFromDB();
//i="2";
//sessionStorage.setItem("times_loaded",i);
//}

///////////////////////////////////////////////////////////////////////////////////////

//let all_other_divs_other_than_filter_div= document.querySelectorAll("#degree_tab_contents ~ div")

//console.log("all_other_divs are"+all_other_divs_other_than_filter_div+ "length is:"+ all_other_divs_other_than_filter_div.length);
//////////////////////////////////EVENTS///////////////////////////////////////////////////

filter_toggle_btn.addEventListener("click", (e) => {
  console.log("filter button clicked " + is_filter_visible);

  //for screen sizes with 640 px width and above
  if (is_filter_visible && window.innerWidth >= 640) {
    filter_div.classList.add("-translate-x-[100rem]");

    filter_div.classList.replace("sm:w-1/5", "sm:w-0");

    is_filter_visible = false;
    console.log(is_filter_visible);
  } else if (!is_filter_visible && window.innerWidth >= 640) {
    if (filter_div.classList.contains("-translate-x-[100rem]")) {
      filter_div.classList.remove("-translate-x-[100rem]");
    } else {
      filter_div.classList.add("translate-x-[100rem]");
    }

    filter_div.classList.replace("sm:w-0", "sm:w-1/5");

    is_filter_visible = true;
    console.log(is_filter_visible);
  }

  //for mobile
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
    dismissFilterWindowWhenInMobileMode();
  }
});

//when the close icon in filter is clicked
filter_mobile_close_btn.addEventListener("click", (e) => {
  dismissFilterWindowWhenInMobileMode();
});

//this is for testing purposes
window.addEventListener("resize", () => {
  console.log("window resized");
  resetFilterDivCSS();

  if (window.innerWidth >= 640) {
    document.body.style.overflow = "auto";

    is_filter_visible = true;
  } else {
    is_filter_visible = false;
  }
});

//redirect to specific jc stream page
all_jc_course_cards.forEach((course_card) => {
  course_card.addEventListener("click", () => {
    let stream = course_card.querySelector("h3").innerText;
    //the link is respective to the php file where this js file will be linked
    window.location.href =
      "../../Pages/academics_tab/specific_jc_stream.php?stream=" +
      stream.toLowerCase();
  });
});

//When search button is clicked
search_button.addEventListener("click", (e) => {
  e.preventDefault();
  if (
    selected_tab_state == selected_tab_states.degree &&
    search_input_field.value != ""
  ) {
    degree_tab_search_query_state = search_input_field.value;
    fetchProgrammesFromDB(
      50,
      0,
      degree_tab_search_query_state,
      level_filter_state,
      college_section_filter_state,
      faculty_filter_state
    );
  } else if (
    selected_tab_state == selected_tab_states.certificate_course &&
    search_input_field.value != ""
  ) {
    certificate_courses_tab_search_query_state = search_input_field.value;
    fetchCertificateCoursesFromDB(certificate_courses_tab_search_query_state);
  }
});

document.getElementById("search_form").addEventListener("submit", (e) => {
  e.preventDefault();
  search_button.click();
});

$("#btn_clear_search").click(function () {
  //alert("here");
  if (
    selected_tab_state == selected_tab_states.degree &&
    search_input_field.value != ""
  ) {
    degree_tab_search_query_state = "";
    fetchProgrammesFromDB(
      50,
      0,
      degree_tab_search_query_state,
      level_filter_state,
      college_section_filter_state,
      faculty_filter_state
    );
  } else if (
    selected_tab_state == selected_tab_states.certificate_course &&
    search_input_field.value != ""
  ) {
    certificate_courses_tab_search_query_state = "";
    fetchCertificateCoursesFromDB();
  }
});

//when filter clear button is clicked
$("#filter_clear_button").click(function () {
  //alert("here");
  //TODO: check if checkbox options are ticked. If there are ticked only then fetch, else dont fetch
  if (
    faculty_filter_state.length > 0 ||
    college_section_filter_state.length > 0 ||
    level_filter_state.length > 0
  ) {
    college_section_filter_state = [];
    level_filter_state = [];
    faculty_filter_state = [];
    fetchProgrammesFromDB(50, 0, degree_tab_search_query_state);
  }
});

//when apply button is clicked
$("#apply_filter_button").click(function (e) {
  e.preventDefault();
  //select the ticked level filters

  let checkedLevelItems = [];
  $('input[name="level"]:checked').each(function () {
    checkedLevelItems.push($(this).val());
  });

  level_filter_state = checkedLevelItems;
  // console.log(checkedLevelItems);

  let checkedSectionItems = [];
  $('input[name="section"]:checked').each(function () {
    checkedSectionItems.push($(this).val());
  });

  college_section_filter_state = checkedSectionItems;
  //console.log(checkedSectionItems);

  let checkedFacultyItems = [];
  $('input[name="faculty"]:checked').each(function () {
    checkedFacultyItems.push($(this).val());
  });

  //console.log(checkedFacultyItems);
  faculty_filter_state = checkedFacultyItems;

  fetchProgrammesFromDB(
    limit_state,
    offset_state,
    degree_tab_search_query_state,
    level_filter_state.length == 0 ? null : level_filter_state,
    college_section_filter_state.length == 0
      ? null
      : college_section_filter_state,
    faculty_filter_state.length == 0 ? null : faculty_filter_state
  );
});

$("#degree_tab").click(function () {
  selected_tab_state = selected_tab_states.degree;
  search_input_field.disabled = false;
  search_input_field.setAttribute("placeholder", "Search Programs");
  search_input_field.value = degree_tab_search_query_state;
  search_form.classList.replace("bg-gray-200", "bg-transparent");
  //search_input_field.classList.replace("dark:placeholder:text-slate-700","dark:placeholder:text-white")
  search_input_field.classList.replace(
    "placeholder:text-slate-200",
    "placeholder:text-[#001b53]"
  );
  search_form.classList.remove("dark:bg-gray-700");

  sessionStorage.setItem("selected_tab_state", selected_tab_state);
});


$("#junior_tab").click(function () {
  selected_tab_state = selected_tab_states.junior;
  search_input_field.disabled = true;
  search_input_field.setAttribute("placeholder", "");
  search_input_field.value = "";
  search_form.classList.replace("bg-transparent", "bg-gray-200");
  search_form.classList.add("dark:bg-gray-700");
  // search_input_field.classList.replace("dark:placeholder:text-white","dark:placeholder:text-slate-700")
  search_input_field.classList.replace(
    "placeholder:text-[#001b53]",
    "placeholder:text-slate-200"
  );

  sessionStorage.setItem("selected_tab_state", selected_tab_state);
});


$("#certificate_course_tab").click(function () {
  selected_tab_state = selected_tab_states.certificate_course;
  search_input_field.disabled = false;
  search_input_field.setAttribute("placeholder", "Search Programs");
  search_input_field.value = certificate_courses_tab_search_query_state;
  search_form.classList.replace("bg-gray-200", "bg-transparent");
  search_form.classList.remove("dark:bg-gray-700");
  // search_input_field.classList.replace("dark:placeholder:text-slate-700","dark:placeholder:text-white")
  search_input_field.classList.replace(
    "placeholder:text-slate-200",
    "placeholder:text-[#001b53]"
  );

  sessionStorage.setItem("selected_tab_state", selected_tab_state);
});

document.addEventListener("DOMContentLoaded", function () {
  
  switch (selected_tab_state) {
    case selected_tab_states.junior:
      console.log("going to junior tab")
      $("#junior_tab").attr("aria-selected","true");
      
      break;
    case selected_tab_states.degree:
      $("#degree_tab").attr("aria-selected","true");
        console.log("going to degree tab")
      break;
    case selected_tab_states.certificate_course:
    $("#certificate_course_tab").attr("aria-selected","true");
        console.log("going to cc tab")
      break;
  }
});
//////////////////////////FUNCTIONS///////////////////////
function getScreenHeight() {
  return document.documentElement.clientWidth;
}

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
    "sm:w-1/5",
    "transition-transform",
    "transition-width",
    "duration-[750ms]",
    "ease-in-out"
  );
}

function dismissFilterWindowWhenInMobileMode() {
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

function makeAJAXRequest(
  url,
  request_method,
  data_type,
  data,
  success_function,
  error_function
) {
  $.ajax({
    url: url,
    method: request_method,
    dataType: data_type,
    data: data,
    success: success_function,
    error: error_function,
  });
}

function createCourseCard(
  prog_id,
  prog_bg_image_link,
  prog_name,
  prog_type,
  prog_duration,
  prog_clg_section
) {
  return `<div class="group flex-col rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10 cursor-pointer course_card">
              <p class="p_hidden" hidden>${prog_id}</p>
              <div class="relative flex-1 overflow-hidden rounded-t-xl">
                <img src="${prog_bg_image_link}" alt="art cover" loading="lazy" width="1000" height="667" class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
              </div>
              <div class=" flex-1 relative px-4 py-4">
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">
                  ${prog_name}
                </h3>

                <p class="text-slate-500 dark:text-white">
                 ${prog_type}
                </p>

                <ul class="list-none mt-4">
                  <li>
                    <p class="font-bold dark:text-white">Duration</p>
                  </li>
                  <li>
                    <p class="text-slate-500 dark:text-white">${prog_duration}</p>
                  </li>

                  <li class="mt-2">
                    <p class="font-bold dark:text-white">Falls under</p>
                  </li>
                  <li>
                    <p class="text-slate-500 dark:text-white truncate">${prog_clg_section}</p>
                  </li>

                </ul>
              </div>
            </div>
            `;
}

function fetchProgrammesFromDB(
  limit,
  offset,
  search_query,
  level_filter,
  college_section_filter,
  faculty_filter
) {
  let ajax_url = "./AJAX/fetch_search_filter_programmes.php?";
  let parameter_number = 0;

  if (limit != null && limit > 0) {
    parameter_number == 0
      ? (ajax_url += `limit=${limit}`)
      : (ajax_url += `&limit=${limit}`);
    parameter_number++;
  }
  if (offset != null) {
    parameter_number == 0
      ? (ajax_url += `offset=${offset}`)
      : (ajax_url += `&offset=${offset}`);
    parameter_number++;
  }

  if (search_query != null && search_query != "") {
    parameter_number == 0
      ? (ajax_url += `search=${search_query}`)
      : (ajax_url += `&search=${search_query}`);
    parameter_number++;
    console.log("here");
  }

  if (level_filter != null) {
    parameter_number == 0
      ? (ajax_url += `level=${level_filter.join(",")}`)
      : (ajax_url += `&level=${level_filter.join(",")}`);
    parameter_number++;
  }

  if (college_section_filter != null) {
    parameter_number == 0
      ? (ajax_url += `section=${college_section_filter.join(",")}`)
      : (ajax_url += `&section=${college_section_filter.join(",")}`);
    parameter_number++;
  }

  if (faculty_filter != null && faculty_filter != "") {
    parameter_number == 0
      ? (ajax_url += `faculty=${faculty_filter.join(",")}`)
      : (ajax_url += `&faculty=${faculty_filter.join(",")}`);
    parameter_number++;
  }

  console.log(ajax_url);

  degree_courses_loading_state = true;

  if (degree_courses_loading_state) {
    document
      .getElementById("degree_loading_animation_div")
      .classList.remove("hidden");
    $("#degree_loading_animation_div").html(loading_animation);
  }


    makeAJAXRequest(
      ajax_url,
      "GET",
      "json",
      null,
      function (response) {
        if (response.msg == "success") {
          let programmes_array = response.programmes_array;
          let total_fetched_programmes = programmes_array.length;

          $("#course_cards_grid_div").html("");
          if (total_fetched_programmes > 0) {
            programmes_array.forEach((programme_object) => {
              let prog_clg_section;
              switch (programme_object.college_sec_name) {
                case "s":
                  prog_clg_section = "Self Financing Courses(SFC) section";
                  break;
                case "d":
                  prog_clg_section = "Regular section";
                  break;
              }

              let prog_final_type;
              switch (programme_object.prog_type) {
                case "ug":
                  prog_final_type = "Undergraduate Course";
                  break;
                case "pg":
                  prog_final_type = "Postgraduate Course";
                  break;
                case "phd":
                  prog_final_type = "PhD course";
                  break;
                case "gd":
                  prog_final_type =
                    "G.D. Kelkar Skill Developement and Finishing School Course";
                  break;
              }

              var course_card = createCourseCard(
                programme_object.prog_id,
                programme_object.prog_bg_image_link,
                programme_object.prog_name,
                prog_final_type,
                programme_object.prog_duration,
                prog_clg_section
              );
              $("#course_cards_grid_div").append(course_card);
            });

            $("#no_of_courses_para").text(
              `${total_fetched_programmes} course(s) available`
            );
            degree_courses_loading_state = false;
            if (
              !document
                .getElementById("degree_loading_animation_div")
                .classList.contains("hidden")
            ) {
              document
                .getElementById("degree_loading_animation_div")
                .classList.add("hidden");
            }

            attachClickListenerOnCourseCards();
          } else {
            //alert("zero fetched results");
            degree_courses_loading_state = false;
            $("#no_of_courses_para").text(
              `${total_fetched_programmes} course(s) available`
            );

            var no_programmes_available_div = `<div class=" flex flex-col justify-center items-center w-full h-full dark:text-white text-lg">
        <img src="../../../assests/svg/sad_emoji_svg.svg" class="w-[10rem] h-[10rem] dark:bg-white dark:text-white"/>
          <p class="text-center ">Sorry! Couldn't find what you are looking for</p>
          </div>`;

            document
              .getElementById("degree_loading_animation_div")
              .classList.remove("hidden");
            $("#degree_loading_animation_div").html(
              no_programmes_available_div
            );
          }
        } else {
          console.log(response);
          //alert("zero fetched results");
          degree_courses_loading_state = false;
          $("#no_of_courses_para").text(`0 course(s) available`);

          var no_programmes_available_div = `<div class=" flex flex-col justify-center items-center w-full h-full dark:text-white text-lg">
        <img src="../../../assests/svg/sad_emoji_svg.svg" class="w-[10rem] h-[10rem] dark:bg-white dark:text-white"/>
          <p class="text-center ">Sorry! Couldn't find what you are looking for</p>
          </div>`;

          document
            .getElementById("degree_loading_animation_div")
            .classList.remove("hidden");
          $("#degree_loading_animation_div").html(no_programmes_available_div);
        }
      },
      function (status, xhr, error) {
        console.log(error);
        //alert("zero fetched results");
        degree_courses_loading_state = false;
        $("#no_of_courses_para").text(
          `0 course(s) available`
        );

        var no_programmes_available_div = `<div class=" flex flex-col justify-center items-center w-full h-full dark:text-white text-lg">
        <img src="../../../assests/svg/sad_emoji_svg.svg" class="w-[10rem] h-[10rem] dark:bg-white dark:text-white"/>
          <p class="text-center ">Sorry! Couldn't find what you are looking for</p>
          </div>`;

        document
          .getElementById("degree_loading_animation_div")
          .classList.remove("hidden");
        $("#degree_loading_animation_div").html(no_programmes_available_div);
      }
    );
 
}

function attachClickListenerOnCourseCards() {
  let all_course_cards = document.querySelectorAll(".course_card");
  //redirect to specific course page
  all_course_cards.forEach((course_card) => {
    course_card.addEventListener("click", () => {
      let course_id = course_card.querySelector(".p_hidden").innerText;
      //the link is respective to the php file where this js file will be linked
      window.location.href =
        "../../Pages/academics_tab/specific_course_details.php?id=" + course_id;
    });
  });
}

function fetchCertificateCoursesFromDB(search_query) {
  let ajax_url = "./AJAX/fetch_certificate_courses.php";
  if (search_query) {
    ajax_url += `?search=${search_query}`;
  }
  console.log(ajax_url);

  certificate_courses_loading_state = true;

  if (certificate_courses_loading_state) {
    document
      .getElementById("cc_loading_animation_div")
      .classList.remove("hidden");
    $("#cc_loading_animation_div").html(loading_animation);
  }

  makeAJAXRequest(
    ajax_url,
    "GET",
    "json",
    null,
    function (response) {
      if (response.msg == "success") {
        let cc_array = response.cc_array;
        let total_fetched_cc = cc_array.length;
        //console.log("here"+ total_fetched_cc)

        $("#cc_course_cards_grid_div").html("");
        if (total_fetched_cc > 0) {
          cc_array.forEach((cc) => {
            var certificate_course_card = `<div class="group  rounded-xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10 cursor-pointer hover:scale-[1.015] transition-transform duration-500 cc_course_card">
          <div class=" flex w-full items-center justify-between  relative px-4 py-4">
          <div class="flex flex-col">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white text-ellipsis">
              ${cc.prog_name}
            </h3>
            <p class="text-slate-500 dark:text-white">
            ${cc.prog_duration}
            </p>
            </div>
            <span class="material-symbols-outlined dark:text-white">
              arrow_forward_ios
            </span>
          </div>`;

            $("#cc_course_cards_grid_div").append(certificate_course_card);
          });

          $("#cc_no_of_courses_para").text(
            `${total_fetched_cc} course(s) available`
          );

          attachClickListenerOnCertificateCourseCards();
          certificate_courses_loading_state = false;
          if (
            !document
              .getElementById("cc_loading_animation_div")
              .classList.contains("hidden")
          ) {
            document
              .getElementById("cc_loading_animation_div")
              .classList.add("hidden");
          }
        } else {
          //alert("here");
          //alert("zero fetched results");
          $("#cc_no_of_courses_para").text(
            `${total_fetched_cc} course(s) available`
          );

          certificate_courses_loading_state = false;

          var no_cc_available_div = `<div class=" flex flex-col justify-center items-center w-full h-full dark:text-white text-lg">
        <img src="../../../assests/svg/sad_emoji_svg.svg" class="w-[10rem] h-[10rem] dark:bg-white dark:text-white"/>
          <p class="text-center ">Sorry! Couldn't find what you are looking for</p>
          </div>`;

          document
            .getElementById("cc_loading_animation_div")
            .classList.remove("hidden");
          $("#cc_loading_animation_div").html(no_cc_available_div);
        }
      } else {
        console.log(response);
        //alert("here");
        //alert("zero fetched results");
        certificate_courses_loading_state = false;
        $("#cc_no_of_courses_para").text(
          `${total_fetched_cc} course(s) available`
        );

        var no_cc_available_div = `<div class=" flex flex-col justify-center items-center w-full h-full dark:text-white text-lg">
        <img src="../../../assests/svg/sad_emoji_svg.svg" class="w-[10rem] h-[10rem] dark:bg-white dark:text-white"/>
          <p class="text-center ">Sorry! Couldn't find what you are looking for</p>
          </div>`;

        document
          .getElementById("cc_loading_animation_div")
          .classList.remove("hidden");
        $("#cc_loading_animation_div").html(no_cc_available_div);
      }
    },
    function (status, xhr, error) {
      //alert("zero fetched results");
      certificate_courses_loading_state = false;
      $("#cc_no_of_courses_para").text(`0 course(s) available`);

      var no_cc_available_div = `<div class=" flex flex-col justify-center items-center w-full h-full dark:text-white text-lg">
        <img src="../../../assests/svg/sad_emoji_svg.svg" class="w-[10rem] h-[10rem] dark:bg-white dark:text-white"/>
          <p class="text-center ">Sorry! Couldn't find what you are looking for</p>
          </div>`;

      document
        .getElementById("cc_loading_animation_div")
        .classList.remove("hidden");
      $("#cc_loading_animation_div").html(no_cc_available_div);

      console.log(error);
    }
  );
}

function attachClickListenerOnCertificateCourseCards() {
  $(".cc_course_card").each(function (index) {
    $(this).click(function () {
      alert("show pdf of certificate course");
    });
  });
}
