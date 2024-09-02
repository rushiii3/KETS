import { loading_animation } from "../common/lottie_loading_animation.js";
import { makeAJAXRequest } from "../common/make_ajax_request.js";

////////////////////////////////////////////////Filter slider/////////////////////////////////////

let length_of_all_filters = 0;
let selected_filter_text = "achievements";
let selected_academic_year = "";
//background slider
$("#bg_slider")[0].style.width = `${$(".filter_btn").first()[0].offsetWidth}px`;
$(".filter_btn").each(function (index) {
  length_of_all_filters += $(this)[0].scrollWidth;
  // $(this).click(function(){
  //     $("#bg_slider")[0].style.transform=``
  // })
});
// let gap_between_two_filters =
//   ($("#bg_slider").parent()[0].scrollWidth - length_of_all_filters) / 4;

let current_highlighted_filter = $(".filter_btn")[0];
//console.log(current_highlighted_filter)

$(".filter_btn").each(function (index) {
  $(this).click(function () {
    let translate_by = 0;
    let i = 0;
    //+8 because gap-2= 8px
    while (i < index) {
      translate_by += $(".filter_btn")[i].offsetWidth + 8;
      i++;
    }
    $("#bg_slider")[0].style.transform = `translateX(${translate_by}px)`;

    current_highlighted_filter.classList.add(
      "dark:bg-gray-800",
      "bg-slate-100"
    );
    $(this).removeClass(["dark:bg-gray-800", "bg-slate-100"]);
    current_highlighted_filter = $(this)[0];

    $("#bg_slider")[0].style.width = `${$(this)[0].offsetWidth}px`;

    //loading animation
    // $("#loading_animation_div").removeClass("hidden");
    // $("#photos_grid").addClass("hidden");
    // $("#loading_animation_div").html(loading_animation);
    selected_filter_text = $(this).text().toLowerCase().trim();
    let ajax_url = `./AJAX/fetch_photos.php?type=${selected_filter_text}`;
    if (selected_academic_year != "") {
      ajax_url += `&ay=${selected_academic_year}`;
    }

    fetchImagesFromDB(ajax_url);
  });
});

$(".select_option").each(function () {
  $(this).click(function () {
    selected_academic_year = $(this).val();
    let ajax_url = `./AJAX/fetch_photos.php?type=${selected_filter_text}`;

    if (selected_academic_year != "") {
      ajax_url += `&ay=${selected_academic_year}`;
    }
    fetchImagesFromDB(ajax_url);
  });
});

///////////////////////////////////// FUNCTIONS /////////////////////////////////////////////////////////
function constructphotosCard(photo_link, photo_caption) {
  return `<div class=" group relative h-fit overflow-clip img_card ">
              <img src="${photo_link}" class=" aspect-square object-cover sm:object-cover h-[20vh] sm:h-[50vh]" data-aos="fade-up" loading="lazy" id="grid_photo" />
              <div class="dark:bg-black bg-white h-0 p-4 text-sm opacity-0 w-full group-hover:h-full  group-hover:opacity-100  absolute bottom-0 transition-all duration-1000" id="grid_photo_caption">${photo_caption}</div>
            </div>`;
}

function attachClickListenersOnImageCards() {
  $(".img_card").each(function () {
    $(this).click(function () {
      $("#modal_div").removeClass(["opacity-0", "translate-x-[100%]"]);
      $("#modal_div").addClass(["opacity-100", "translate-x-0"]);

      $("#modal_div").find("#modal_photo")[0].src =
        $(this).find("#grid_photo")[0].src;

      $("#modal_div")
        .find("#modal_photo_caption")
        .text(`${$(this).find("#grid_photo_caption").text()}`);

      $("body").prepend(
        "<div id='dummy_div' class='fixed top-0 bottom-0 z-[100] bg-black opacity-50 h-[100vh] w-[100vw]'></div>"
      );

      $("#modal_div")
        .find("#close_btn")
        .click(function (e) {
          var card = $("#modal_div")[0];
          card.classList.remove("opacity-100", "translate-x-0");
          card.classList.add("opacity-0", "translate-x-[100%]");
          $("#dummy_div").remove();
        });
    });
  });
}

function fetchImagesFromDB(ajax_url) {
  $("#loading_animation_div").removeClass("hidden");
  $("#photos_grid").addClass("hidden");
  $("#loading_animation_div").html(loading_animation);
  setTimeout(() => {
    makeAJAXRequest(
      ajax_url,
      "GET",
      "json",
      null,
      function (success_response) {
        if (success_response.length > 0) {
          $("#loading_animation_div").addClass("hidden");
          $("#photos_grid").html("");
          $("#photos_grid").removeClass("hidden");

          success_response.forEach((photo) => {
            $("#photos_grid").append(
              constructphotosCard(photo.photo_link, photo.photo_caption)
            );
          });

          attachClickListenersOnImageCards();
        } else {
          $("#loading_animation_div").html(
            "<div class='flex justify-center items-center'><p>No photos present.</p></div>"
          );
        }
      },
      function (xhr, status, error) {
        $("#loading_animation_div").html(
          "<div class='flex justify-center items-center'><p>Sorry! Some Error occurred.</p></div>"
        );
        console.error(error);
      }
    );
  }, 2000);
}

attachClickListenersOnImageCards();
