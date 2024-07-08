/*///////////////////////////////
VARIABLES
///////////////////////////////*/
//principals
let principals_each_timeline_line_percent_scrolled_map = {};
let principals_number_of_timeline_lines = $(".p_timeline_line").length;

//initialize the map elements to zero
$(".p_timeline_line").each((index, value) => {
  principals_each_timeline_line_percent_scrolled_map[index] = 0;
});

let principals_number_of_timeline_circles = $(".p_timeline_circle").length;

let bg_fixed_image_height =
  document.getElementById("bg_fixed_image_div").offsetHeight;

let height_of_divs_before_p_timeline = 0;

document.querySelectorAll(".div_before_p_timeline").forEach((div) => {
  height_of_divs_before_p_timeline += div.offsetHeight;
});

let principal_members_div = document.getElementById("principal_members_div");

let principal_timeline_object={
  height_of_divs_before_timeline:height_of_divs_before_p_timeline,
  percent_scrolled_map:principals_each_timeline_line_percent_scrolled_map,
  number_of_timeline_lines:principals_number_of_timeline_lines,
  number_of_timeline_circles:principals_number_of_timeline_circles,
  members_div:principal_members_div,
  timeline_line_selector:".p_timeline_line",
  timeline_circle_selector:".p_timeline_circle",
  year_text_div_selector:".p_year_text_div",
  card_container_div_selector:".p_card_container_div",
}



//viceprincipals degree
let vpd_each_timeline_line_percent_scrolled_map = {};
let vpd_number_of_timeline_lines = $(".vpd_timeline_line").length;

//initialize the map elements to zero
$(".vpd_timeline_line").each((index, value) => {
  principals_each_timeline_line_percent_scrolled_map[index] = 0;
});

let vpd_number_of_timeline_circles = $(".vpd_timeline_circle").length;



let height_of_divs_before_vpd_timeline = 0;

document.querySelectorAll(".div_before_vpd_timeline").forEach((div) => {
  height_of_divs_before_timeline += div.offsetHeight;
});

let vpd_members_div = document.getElementById("vpd_members_div");

let vpd_timeline_object={
  height_of_divs_before_timeline:height_of_divs_before_vpd_timeline,
  percent_scrolled_map:vpd_each_timeline_line_percent_scrolled_map,
  number_of_timeline_lines:vpd_number_of_timeline_lines,
  number_of_timeline_circles:vpd_number_of_timeline_circles,
  members_div:vpd_members_div,
  timeline_line_selector:"vpd_timeline_line",
  timeline_circle_selector:"vpd_timeline_circle",
  year_text_div_selector:"vpd_year_text_div",
  card_container_div_selector:"vpd_card_container_div",

}

let vpj_timeline_object={
  height_of_divs_before_timeline:height_of_divs_before_p_timeline,
  percent_scrolled_map:principals_each_timeline_line_percent_scrolled_map,
  number_of_timeline_lines:principals_number_of_timeline_lines,
  number_of_timeline_circles:principals_number_of_timeline_circles,
  members_div:principal_members_div,
  timeline_line_selector:"vpj_timeline_line",
  timeline_circle_selector:"vpj_timeline_circle",
  year_text_div_selector:"vpj_year_text_div",
  card_container_div_selector:"vpj_card_container_div",
}

/*//////////////////////
EVENTS  
///////////////////*/
window.onscroll = function () {
  //calculate the percent scrolled
  //console.log(principal_timeline_object.members_div)
  let principal_percent_scrolled =
    ((window.scrollY - principal_timeline_object.height_of_divs_before_timeline) /
      principal_members_div.scrollHeight) *
    100;

    // let vpd_percent_scrolled =
    // ((window.scrollY - vpd_timeline_object.height_of_divs_before_timeline) /
    //   vpd_timeline_object.members_div.scrollHeight) *
    // 100;

    let vpj_percent_scrolled =0
    // ((window.scrollY - vpj_timeline_object.height_of_divs_before_timeline) /
    //   vpj_timeline_object.members_div.scrollHeight) *
    // 100;

    



  //check whether we have reached the max scroll extent. If yes, then set the last timeline line's percent_scrolled to 100% or more.
  //This is needed because sometimes  we reach the end but the last timeline line isnt 100%
  if (
    window.innerHeight + window.scrollY >=
    document.documentElement.scrollHeight
  ) {
    i//vpj_percent_scrolled = Math.round(percent_scrolled + 50);
  }

  //redraw the timeline
  redrawTimeline(principal_percent_scrolled > 0 ? principal_percent_scrolled : 0,principal_timeline_object);
  // redrawTimeline(vpd_percent_scrolled > 0 ? vpd_percent_scrolled : 0,vpd_timeline_object);
  // redrawTimeline(vpj_percent_scrolled > 0 ? vpj_percent_scrolled : 0,vpj_timeline_object);
};

// $("#opt_1").click(function(){
//   $(".p_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-40","opacity-30")
//   })
//   $(".vpd_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-40","opacity-30")
//   })
//   $(".vpj_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-40","opacity-30")
//   })
// })

// $("#opt_2").click(function(){
//   $(".p_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-40","opacity-30")
//   })
//   $(".vpd_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-100","opacity-40")
//   })
//   $(".vpj_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-100","opacity-40")
//   })
// })

// $("#opt_3").click(function(){
//   $(".p_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-100","opacity-40")
//   })
//   $(".vpd_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-100","opacity-30")
//   })
//   $(".vpj_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-100","opacity-40")
//   })
// })

// $("#opt_4").click(function(){
//   $(".p_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-100","opacity-40")
//   })
//   $(".vpd_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-100","opacity-40")
//   })
//   $(".vpj_card").each((index,htmlElement)=>{
//     htmlElement.classList.replace("opacity-40","opacity-30")
//   })
// })

/*////////////////////////////////////////
FUNCTIONS
//////////////////////////////////*/

function redrawTimeline(percent_scrolled,timeline_object) {

  let number_of_timeline_circles=timeline_object.number_of_timeline_circles
  let number_of_timeline_lines=timeline_object.number_of_timeline_lines
  let each_timeline_line_percent_scrolled_map=timeline_object.percent_scrolled_map
 let  timeline_line_selector=timeline_object.timeline_line_selector
  let timeline_circle_selector=timeline_object.timeline_circle_selector
  let year_text_div_selector=timeline_object.year_text_div_selector
  let card_container_div_selector=timeline_object.card_container_div_selector


  //the amount(%) someone has to scroll in order to 100% scroll a timelne line
  let amount_scrolled_to_fill_a_timeline_line = 20;

  let number_of_lines_hundred_percent = Math.floor(
    percent_scrolled / amount_scrolled_to_fill_a_timeline_line
  );

  let max_permissible_scroll_percent =
    number_of_timeline_circles * amount_scrolled_to_fill_a_timeline_line;

  if (percent_scrolled > max_permissible_scroll_percent) {
    percent_scrolled = max_permissible_scroll_percent;
  }

  if (number_of_lines_hundred_percent > number_of_timeline_lines) {
    number_of_lines_hundred_percent = number_of_timeline_lines;
  }

  //console.log("Number of lines hundred percent: " + number_of_lines_hundred_percent + " \npercent scrolled: " + percent_scrolled)

  //set the scroll percent to 100% for all the lines that should be 100%
  for (let i = 0; i < number_of_lines_hundred_percent; i++) {
    each_timeline_line_percent_scrolled_map[i] = 100;

    //console.log("hundred index:" + i)

    if (i + 1 < number_of_timeline_circles) {
      $(timeline_circle_selector)[i + 1].classList.replace(
        "opacity-30",
        "opacity-100"
      );
      $(card_container_div_selector)[i + 1].classList.replace(
        "opacity-30",
        "opacity-100"
      );
      $(year_text_div_selector)[i + 1].classList.replace("opacity-30", "opacity-100");
    }
    if (i != number_of_timeline_lines - 1) {
      $(year_text_div_selector)[i].classList.replace(
        "lg:text-[6rem]",
        "lg:text-[5rem]"
      );
      $(year_text_div_selector)[i].classList.replace(
        "text-[1.5rem]",
        "text-[1.1rem]"
      );
      $(year_text_div_selector)[i].classList.replace(
        "md:text-[3rem]",
        "md:text-[2.5rem]"
      );
    }

    // if ((i + 1) % 2 == 0) {
    //     //console.log("hi")
    //     $(".timeline_circle")[(i + 1) / 2].classList.replace("opacity-30", "opacity-100")
    // } else if (i < number_of_timeline_circles) {
    //     if (i == 0) {
    //         $(".timeline_circle")[1].classList.replace("opacity-100", "opacity-30")
    //     } else {
    //         $(".timeline_circle")[i].classList.replace("opacity-100", "opacity-30")

    //     }
    // }
  }

  //set the scroll percent for the current timeline line that is visible
  if (number_of_lines_hundred_percent < number_of_timeline_lines) {
    principals_each_timeline_line_percent_scrolled_map[number_of_lines_hundred_percent] =
      ((percent_scrolled -
        number_of_lines_hundred_percent *
          amount_scrolled_to_fill_a_timeline_line) /
        amount_scrolled_to_fill_a_timeline_line) *
      100;
    $(year_text_div_selector)[number_of_lines_hundred_percent].classList.replace(
      "lg:text-[5rem]",
      "lg:text-[6rem]"
    );
    $(year_text_div_selector)[number_of_lines_hundred_percent].classList.replace(
      "text-[1.1rem]",
      "text-[1.5rem]"
    );
    $(year_text_div_selector)[number_of_lines_hundred_percent].classList.replace(
      "md:text-[2.5rem]",
      "md:text-[3rem]"
    );
  }

  //set the scroll_percent for all the timeline lines after the current timeline line to 0%
  for (
    let i = number_of_lines_hundred_percent + 1;
    i < number_of_timeline_lines;
    i++
  ) {
    principals_each_timeline_line_percent_scrolled_map[i] = 0;

    if (i < number_of_timeline_circles) {
      $(timeline_circle_selector)[i].classList.replace("opacity-100", "opacity-30");
      $(card_container_div_selector)[i].classList.replace(
        "opacity-100",
        "opacity-30"
      );
      $(year_text_div_selector)[i].classList.replace("opacity-100", "opacity-30");
      $(year_text_div_selector)[i].classList.replace(
        "lg:text-[6rem]",
        "lg:text-[5rem]"
      );
      $(year_text_div_selector)[i].classList.replace(
        "text-[1.5rem]",
        "text-[1.1rem]"
      );
      $(year_text_div_selector)[i].classList.replace(
        "md:text-[3rem]",
        "md:text-[2.5rem]"
      );
    }
  }

  //draw the timeline line that indicates the current progress on the timeline
  $(timeline_line_selector).each((index, value) => {
    let div = document.createElement("div");

    if (
      index < number_of_timeline_lines - 1 &&
      each_timeline_line_percent_scrolled_map[index + 1] != 0
    ) {
      div.classList.add(
        "absolute",
        "top-0",
        "left-0",
        `h-[${each_timeline_line_percent_scrolled_map[index]}%]`,
        `${timeline_line_selector.substring(1)}`,
        "w-2",
        "bg-blue-800"
      );
    } else if (each_timeline_line_percent_scrolled_map[index] <= 100) {
      div.classList.add(
        "absolute",
        "top-0",
        "left-0",
        `h-[${each_timeline_line_percent_scrolled_map[index]}%]`,
        `${timeline_line_selector.substring(1)}`,
        "bg-gradient-to-b",
        "w-2",
        "from-blue-800",
        "to-emerald-500",
        "via-blue-500",
        "via-60%"
      );
    }
    /*
    else{
        div.classList.add("absolute", "top-0", "left-0", `h-[${previous_percent_scrolled_map[index]}%]`, "timeline_line", "bg-blue-800")

    }
    */

    let parentNode = value.parentNode;
    parentNode.removeChild(value);
    parentNode.appendChild(div);
  });
}
