import { makeAJAXRequest } from "../../js/common/make_ajax_request.js";
import { loading_animation } from "../../js/common/lottie_loading_animation.js";
import { vaze_logo } from "../../js/common/vaze_college_logo_base_64.js";

//////////////////////////////////////////////  VARIABLES    /////////////////////////////////////////
let carousel_index_map = { 0: 0, 1: 1, 2: 2 };
//////////////////////////////////////////////  EVENTS    /////////////////////////////////////////
$(".card").each(function () {
  $(this).click(function (e) {
    // console.log(e)
    let committee_id = $(this)[0].querySelector("p.hidden").innerText;
    let committee_name = $(this)[0].querySelector("p:not(.hidden)").innerText;
    //console.log(committee_name);
    $("#committee_name_heading").text(`${committee_name} Committee`);

    let ajax_url = `./AJAX/fetch_committee_members.php?id=${committee_id}`;
    //console.log(ajax_url);

    $("#degree_committee_members_ul").html("");

    if (!$("#jc_members_heading").hasClass("hidden")) {
      $("#jc_members_heading").addClass("hidden");
    }

    if (!$("#degree_members_heading").hasClass("hidden")) {
      $("#degree_members_heading").addClass("hidden");
    }

    $("#jc_committee_members_ul").html("");

    $("body").append(
      `<div class="fixed z-[20] top-0 left-0 h-[100vh] w-[100vw] bg-transparent" id="helper_div"></div>`
    );

    $("#side_div").removeClass([
      "md:translate-x-[100rem]",
      "translate-y-[100rem]",
    ]);

    $("#side_div").addClass(["md:translate-x-0", "translate-y-0"]);

    $("#main_contents").addClass("opacity-20");
    $(".card").each(function () {
      $(this).removeClass([
        "cursor-pointer",
        "hover:-translate-y-2",
        "hover:bg-white",
        "dark:hover:bg-blue-300",
        "hover:shadow-2xl",
      ]);
    });

    $("body")[0].style.overflow = "hidden";

   // $("#side_div_loading_animation_div").removeClass("hidden");

    $("#side_div_loading_animation_div").html(loading_animation);

    setTimeout(() => {
      makeAJAXRequest(
        ajax_url,
        "GET",
        "json",
        null,
        function (success_response) {
          //console.log(success_response);

          $("#side_div_loading_animation_div").html("");

          if(success_response.degree_members.length < 1 && success_response.junior_members.length <1 ){
            $("#side_div_loading_animation_div").html("<div class='mt-20 h-full w-full flex justify-center items-center'><p class='text-center'> No members present</p></div>");
          }

          //degree members
          if (success_response.degree_members.length > 0) {
            $("#degree_members_heading").removeClass("hidden");
            success_response.degree_members.forEach((member) => {
              $("#degree_committee_members_ul").append(
                constructListItem(
                  member.cp_gender,
                  `${member.cp_honourific} ${member.cp_name}`,
                    member.cp_personal_website_link,
                  `${member.role
                    .substring(0, 1)
                    .toUpperCase()}${member.role.substring(1)}`,
                  member.cp_image_path
                )
              );
            });
          }

          //junior members
          if (success_response.junior_members.length > 0) {
            $("#jc_members_heading").removeClass("hidden");
            $("#jc_committee_members_ul").removeClass("hidden");

            success_response.junior_members.forEach((member) => {
              $("#jc_committee_members_ul").append(
                constructListItem(
                  member.cp_gender,
                  `${member.cp_honourific} ${member.cp_name}`,
                  member.cp_personal_website_link,
                  `${member.role
                    .substring(0, 1)
                    .toUpperCase()}${member.role.substring(1)}`,
                  member.cp_image_path
                )
              );
            });
          }

          //$("#side_div_loading_animation_div").addClass("hidden");
        },
        function (xhr, status, error) {
          console.log(error);
          $("#side_div_loading_animation_div").html("");
           
            $("#side_div_loading_animation_div").html("<div class='mt-20 h-full w-full flex justify-center items-center'><p class='text-center'>Some Error Occurred. No members present</p></div>");
          
          //$("#side_div_loading_animation_div").addClass("hidden");
        }
      );
    }, 2000);
  });
});

$("#close_btn").click(function () {
  $("#side_div").removeClass(["md:translate-x-0", "translate-y-0"]);

  $("#side_div").addClass(["md:translate-x-[100rem]", "translate-y-[100rem]"]);

  $("#main_contents").removeClass("opacity-20");
  $(".card").each(function () {
    $(this).addClass([
      "cursor-pointer",
      "hover:-translate-y-2",
      "hover:bg-white",
      "dark:hover:bg-blue-300",
      "hover:shadow-2xl",
    ]);
  });

  $("body")[0].style.overflow = "scroll";

  $("#helper_div").remove();
});

//////////////////////////////////////////////  FUNCTIONS   /////////////////////////////////////////////
function playCarousel() {
  document.querySelectorAll(".carousel_img").forEach((img, index) => {
    carousel_index_map[index] -= 1;
    if (
      carousel_index_map[index] - index > 0 &&
      img.classList.contains("-z-10")
    ) {
      img.classList.remove("-z-10");
    }
    img.style.transform = `translateX(${
      (carousel_index_map[index] - index) * 100
    }%)`;

    if (carousel_index_map[index] < 0) {
      img.classList.add("-z-10");
      setTimeout(() => {
        img.style.transform = `translateX(${(2 - index) * 100}%)`;
        carousel_index_map[index] = 2;
        //img.classList.remove("invisible");
      }, 1000);
    }
  });
}

setInterval(playCarousel, 5000);

function constructListItem(
  gender,
  name,
  cp_website_link,
  role,
  cp_image_from_db
) {
  let img_bg_color = "";
  let assest_path = "";

  switch (gender) {
    case "m":
      img_bg_color = "bg-blue-100";
      assest_path = "../../../assests/svg/male_dummy_dp_1_svg.svg";
      break;

    case "f":
    case "o":
      img_bg_color = "bg-emerald-100";
      assest_path = "../../../assests/svg/female_dummy_dp_1_svg.svg";
      break;
  }
  return `  <li class="mt-2">
                <div class="flex gap-x-4 ">
                    <img class="rounded-full h-12 w-12 ${img_bg_color} object-fit" src="${
    cp_image_from_db ?? assest_path
  }" alt="Vaze College Committee Member"/>
                    <div class="flex flex-1 flex-col">
                    ${
                      cp_website_link != null
                        ? "<a class='hover:text-blue-500 hover:underline' href='" +
                          cp_website_link +
                          "'>" +
                          name +
                          "</a>"
                        : "<p>" + name + "</p>"
                    }
                      
                        <p class="text-sm text-slate-500">${role}</p>
                    </div>
                </div>
            </li>`;
}


function animateOnScroll(){
  const observer=new IntersectionObserver((entries)=>{
let delay=0
    entries.forEach((entry)=>{
      if(entry.isIntersecting){
        entry.target.classList.add("custom_aos_fade_right")
        entry.target.style.animationDelay=`${delay}ms`
        delay+=150;
      }

    })
  })

  document.querySelectorAll(".card_inner").forEach((card)=>observer.observe(card));
}

animateOnScroll();