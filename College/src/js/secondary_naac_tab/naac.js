import { loading_animation } from "../common/lottie_loading_animation.js";
import { makeAJAXRequest } from "../common/make_ajax_request.js";

//////////////////////////////////////VARIABLES////////////////////////////
let scroll_by_to_reach_aqar_height =
  document.getElementById("main_heading_div").scrollHeight +
  document.getElementById("report_selector_div").scrollHeight -
  50;

let scroll_by_to_reach_caqar_height =
  scroll_by_to_reach_aqar_height +
  document.getElementById("aqar_reports_div").scrollHeight;

let scroll_by_to_reach_iqac_height =
  scroll_by_to_reach_caqar_height +
  document.getElementById("caqar_reports_div").scrollHeight;

let scroll_by_to_reach_ssr_height =
  scroll_by_to_reach_iqac_height +
  document.getElementById("iqac_div").scrollHeight;

/////////////////////////////////////// EVENTS //////////////////////////////////////////////

$(".pdf_card").each(function () {
  $(this).click(function () {
    window.location.href = $(this).find("a")[0].href;
  });
});

//caqar academics years list click listener
$(".caqar_ay").each(function () {
  $(this).click(function () {
    if ($(this).hasClass("not_selected_caqar_ay")) {
      //console.log("caqar here");
      $(".caqar_ay").each(function () {
        if ($(this).hasClass("selected_caqar_ay")) {
          $(this)[0].classList.replace(
            "selected_caqar_ay",
            "not_selected_caqar_ay"
          );
        }
      });
      $(this)[0].classList.replace(
        "not_selected_caqar_ay",
        "selected_caqar_ay"
      );

      //LOADING ANIMATION
      if ($("#caqar_loading_animation_div").hasClass("hidden")) {
        $("#caqar_loading_animation_div").removeClass("hidden");
      }

      $("#caqar_loading_animation_div").html(loading_animation);

      if (!$("#caqar_grid_container").hasClass("hidden")) {
        $("#caqar_grid_container").addClass("hidden");
      }

      let ajax_url = `./AJAX/fetch_caqar.php?caqar_ay=${$(this).text()}`;
      //console.log(ajax_url);

      //setTimeout(() => {
      makeAJAXRequest(
        ajax_url,
        "GET",
        "json",
        null,
        function (success_response) {
          $("#caqar_loading_animation_div").html("");
          //if (success_response.length > 0) {
          $("#caqar_grid_container").removeClass("hidden");
          $("#caqar_loading_animation_div").addClass("hidden");
          //$("#caqar_grid").html("");

          //for criterias
          for (let i = 1; i < 8; i++) {
            $(`#caqar_grid_${i}`).html("");
            console.log(success_response[`criteria_${i}`].length);
            if (success_response[`criteria_${i}`].length > 0) {
              success_response[`criteria_${i}`].forEach((pdf) => {
                $(`#caqar_grid_${i}`).append(
                  constructCAQARPDFCard(
                    pdf.all_pdf_title,
                    pdf.all_pdf_pdf_link,
                    pdf.aqar_sub_criteria
                  )
                );
              });
            } else {
              $(`#caqar_grid_${i}`).html(
                `<p class="ms-4">No reports</p>`
              );
              //console.log("no caqar data fetched");
            }
          }
        },
        function (xhr, status, error) {
          $("#caqar_loading_animation_div").html(
            `<div class="mt-12 flex justify-center items-center">Sorry! Some error occurred. No results found</div>`
          );
          console.log(error);
        }
      );
      //}, 2000);
    }
  });
});

//iqac academics years list click listener
$(".iqac_ay").each(function () {
  $(this).click(function () {
    if ($(this).hasClass("not_selected_iqac_ay")) {
      console.log("here");
      $(".iqac_ay").each(function () {
        if ($(this).hasClass("selected_iqac_ay")) {
          $(this)[0].classList.replace(
            "selected_iqac_ay",
            "not_selected_iqac_ay"
          );
        }
      });
      $(this)[0].classList.replace("not_selected_iqac_ay", "selected_iqac_ay");

      //LOADING ANIMATION
      if ($("#iqac_loading_animation_div").hasClass("hidden")) {
        $("#iqac_loading_animation_div").removeClass("hidden");
      }

      $("#iqac_loading_animation_div").html(loading_animation);
      $("#iqac_grid").html("");

      let ajax_url = `./AJAX/fetch_iqac.php?iqac_ay=${$(this).text()}`;
      //console.log(ajax_url);

      //setTimeout(() => {
      makeAJAXRequest(
        ajax_url,
        "GET",
        "json",
        null,
        function (success_response) {
          $("#iqac_loading_animation_div").html("");
          if (success_response.length > 0) {
            $("#iqac_loading_animation_div").addClass("hidden");

            success_response.forEach((pdf) => {
              $("#iqac_grid").append(
                constructPDFCard(pdf.all_pdf_title, pdf.all_pdf_pdf_link)
              );
            });
          } else {
            $("#iqac_loading_animation_div").html(
              `<div class="flex justify-center items-center">Sorry! No results found</div>`
            );
            console.log("no iqac data fetched");
          }
        },
        function (xhr, status, error) {
          $("#iqac_loading_animation_div").html(
            `<div class="flex justify-center items-center">Sorry!Some error occurred. No results found</div>`
          );
          console.log(error);
        }
      );
      //}, 2000);
    }
  });
});

//report selector listeners
$("#aqar_li").click(function () {
  window.scrollTo({
    top: scroll_by_to_reach_aqar_height,
    behavior: "smooth",
  });
});

$("#caqar_li").click(function () {
  window.scrollTo({
    top: scroll_by_to_reach_caqar_height,
    behavior: "smooth",
  });
});

$("#iqac_li").click(function () {
  window.scrollTo({
    top: scroll_by_to_reach_iqac_height,
    behavior: "smooth",
  });
});

$("#ssr_li").click(function () {
  window.scrollTo({
    top: scroll_by_to_reach_ssr_height,
    behavior: "smooth",
  });
});

$("#scroll_to_top_btn").click(function () {
  window.scrollTo({
    top: document.getElementById("main_heading_div").scrollHeight - 50,
    behavior: "smooth",
  });
});

//visibilty of scroll to top button
window.addEventListener("scroll", function () {
  if (this.window.scrollY > scroll_by_to_reach_aqar_height - 100) {
    if ($("#scroll_to_top_btn").hasClass("invisible")) {
      $("#scroll_to_top_btn").removeClass("invisible");
    }
  } else {
    if (!$("#scroll_to_top_btn").hasClass("invisible")) {
      $("#scroll_to_top_btn").addClass("invisible");
    }
  }
});
////////////////////////////////////////////// FUNCTIONS ///////////////////////
function constructPDFCard(pdf_title, pdf_link) {
  return `<div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105 transition-transform duration-500  hover:cursor-pointer pdf_card">
                                <img src="../../../assets/webp/pdf.webp" alt="naac_pdf" class="aspect-square w-[20%]">
                                <a href="${pdf_link}" class="flex-1">${pdf_title}</a>
                            </div>`;
}

function constructCAQARPDFCard(pdf_title, pdf_link, pdf_sub_criteria) {
  return `<div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105 transition-transform duration-500  hover:cursor-pointer pdf_card">
                                <img src="../../../assets/webp/pdf.webp" alt="naac_pdf" class="aspect-square w-[20%]">
                                <a href="${pdf_link}" class="flex-1"><span class="font-bold">${pdf_sub_criteria}</span> ${pdf_title}</a>
                            </div>`;
}
