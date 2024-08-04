import { loading_animation } from "../common/lottie_loading_animation.js";
import { makeAJAXRequest } from "../common/make_ajax_request.js";

$(".faculty_card").each(function () {
  $(this).click(function () {
    if ($(this).find("a") != null) {
      window.location.href = $(this).find("a")[0].href;
    }
  });
});

$("#ug_syllabus_button").click(function () {
  if (!$(this).hasClass("bg-blue-800") && !$(this).hasClass("text-white")) {
    $(this).addClass(["bg-blue-800", "text-white"]);
  }

  if ($(this).hasClass("bg-gray-200") && $(this).hasClass("dark:bg-gray-800")) {
    $(this).removeClass(["bg-gray-200", "dark:bg-gray-800"]);
  }

  if (
    !$("#pg_syllabus_button").hasClass("bg-gray-200") &&
    !$("#pg_syllabus_button").hasClass("dark:bg-gray-800")
  ) {
    $("#pg_syllabus_button").addClass(["bg-gray-200", "dark:bg-gray-800"]);
  }

  if (
    $("#pg_syllabus_button").hasClass("bg-blue-800") &&
    $("#pg_syllabus_button").hasClass("text-white")
  ) {
    $("#pg_syllabus_button").removeClass(["bg-blue-800", "text-white"]);
  }

  if (!$("#pg_syllabus_grid").hasClass("hidden")) {
    $("#pg_syllabus_grid").addClass("hidden");
  }

  if ($("#ug_syllabus_grid").hasClass("hidden")) {
    $("#ug_syllabus_grid").removeClass("hidden");
  }
});

$("#pg_syllabus_button").click(function () {
  if (!$(this).hasClass("bg-blue-800") && !$(this).hasClass("text-white")) {
    $(this).addClass(["bg-blue-800", "text-white"]);
  }

  if ($(this).hasClass("bg-gray-200") && $(this).hasClass("dark:bg-gray-800")) {
    $(this).removeClass(["bg-gray-200", "dark:bg-gray-800"]);
  }

  if (
    !$("#ug_syllabus_button").hasClass("bg-gray-200") &&
    !$("#ug_syllabus_button").hasClass("dark:bg-gray-800")
  ) {
    $("#ug_syllabus_button").addClass(["bg-gray-200", "dark:bg-gray-800"]);
  }

  if (
    $("#ug_syllabus_button").hasClass("bg-blue-800") &&
    $("#ug_syllabus_button").hasClass("text-white")
  ) {
    $("#ug_syllabus_button").removeClass(["bg-blue-800", "text-white"]);
  }

  if (!$("#ug_syllabus_grid").hasClass("hidden")) {
    $("#ug_syllabus_grid").addClass("hidden");
  }

  if ($("#pg_syllabus_grid").hasClass("hidden")) {
    $("#pg_syllabus_grid").removeClass("hidden");
  }
});

$(".ay_btn").each(function () {
  $(this).click(function () {
    $(".ay_btn.selected").addClass(["bg-gray-200", "dark:bg-gray-800"]);
    $(".ay_btn.selected").removeClass([
      "selected",
      " bg-blue-800",
      "text-white",
    ]);
    $(this).addClass(["selected", " bg-blue-800", "text-white"]);
    $(this).removeClass(["bg-gray-200", "dark:bg-gray-800"]);

    let ay = $(this).text().trim();
    let dept_sec_id = $("#heading p").text().trim();

    $("#loading_animation_div").html(loading_animation);

    if ($("#loading_animation_div").hasClass("hidden")) {
      $("#loading_animation_div").removeClass("hidden");
    }

    if (!$("#dept_act_div").hasClass("hidden")) {
      $("#dept_act_div").addClass("hidden");
    }
    let ajax_url = "";
    if (ay != "" && dept_sec_id != "") {
      ajax_url = `./AJAX/fetch_dept_act.php?dept_sect_id=${dept_sec_id}&ay=${ay}`;
      //console.log(ajax_url);
    } else {
      $("#loading_animation_div").html(
        "<div class='flex justify-center items-center><p>Sorry! Some Error occured.Please bear with us</p></div>'"
      );
    }

    //setTimeout(() => {
    makeAJAXRequest(
      ajax_url,
      "GET",
      "json",
      null,
      function (success_response) {
        if (success_response.length > 0) {
          console.log("here");
          //let anim_delay = 0;
          $("#dept_act_div").html("");
          success_response.forEach((dept_act, index) => {
            $("#dept_act_div").append(
              constructDeptActCard(
                //anim_delay,
                dept_act.dept_act_title,
                dept_act.dept_act_desc,
                index == success_response.length - 1 ? true : false
              )
            );
            // anim_delay += 100;
          });

          document
            .querySelectorAll(".dept_act")
            .forEach((act) => observer1.observe(act));
          if (!$("#loading_animation_div").hasClass("hidden")) {
            $("#loading_animation_div").addClass("hidden");
          }
          if ($("#dept_act_div").hasClass("hidden")) {
            $("#dept_act_div").removeClass("hidden");
          }
        } else {
          $("#loading_animation_div").html(
            "<div class='flex justify-center items-center><p>Sorry! Some Error occured</p></div>'"
          );
        }
      },
      function (xhr, status, error) {
        $("#loading_animation_div").html(
          "<div class='flex justify-center items-center><p>Sorry! Some Error occured</p></div>'"
        );
      }
    );
    // }, 2000);
  });
});

////////////////////////////////FUNCTIONS////////////////////////////////////////

const observer1 = new IntersectionObserver((entries) => {
  let delay = 0;
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("custom_tiling_animation");
      entry.target.style.animationDelay = `${delay}ms`;
      delay += 250;
    }
  });
  //console.log("here");
});

function animateOnScroll() {
  const observer = new IntersectionObserver((entries) => {
    let delay = 0;
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("custom_aos_fade_right");
        entry.target.style.animationDelay = `${delay}ms`;
        delay += 150;
      }
    });
  });

  document
    .querySelectorAll(".pdf_card_wrapper,.faculty_card")
    .forEach((card) => observer.observe(card));

  document
    .querySelectorAll(".dept_act")
    .forEach((act) => observer1.observe(act));
}

function constructDeptActCard(title, desc, isLastIndex) {
  return `<div class=" flex flex-col items-center px-8 pb-8 dept_act" >
             <p class="text-xl font-bold text-left w-full">${title}</p>
                <p class="dark:text-gray-400 w-full text-left">${desc}
                </p> 
                
                ${
                  isLastIndex == true
                    ? ""
                    : '<hr class="w-full mt-2 border-gray-500 h-[1px]">'
                }


            </div>`;
}

animateOnScroll();
