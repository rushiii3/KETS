/*///////////////////////////////
VARIABLES
///////////////////////////////*/
let each_timeline_line_percent_scrolled_map = {};
let number_of_timeline_lines = $(".timeline_line").length;

//initialize the map elements to zero
$(".timeline_line").each((index, value) => {
  each_timeline_line_percent_scrolled_map[index] = 0;
});

let number_of_timeline_circles = $(".timeline_circle").length;

let bg_fixed_image_height =
  document.getElementById("bg_fixed_image_div").offsetHeight;

let height_of_divs_before_timeline = 0;

document.querySelectorAll(".div_before_timeline").forEach((div) => {
  height_of_divs_before_timeline += div.offsetHeight;
});

let all_members_div = document.getElementById("all_members_div");

/*//////////////////////
EVENTS  
///////////////////*/
window.onscroll = function () {
  //calculate the percent scrolled
  let percent_scrolled =
    ((window.scrollY - height_of_divs_before_timeline) /
      all_members_div.scrollHeight) *
    100;

  //check whether we have reached the max scroll extent. If yes, then set the last timeline line's percent_scrolled to 100% or more.
  //This is needed because sometimes  we reach the end but the last timeline line isnt 100%
  if (
    window.innerHeight + window.scrollY >=
    document.documentElement.scrollHeight
  ) {
    percent_scrolled = Math.round(percent_scrolled + 50);
  }

  //redraw the timeline
  redrawTimeline(percent_scrolled > 0 ? percent_scrolled : 0);
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

function redrawTimeline(percent_scrolled) {
  //the amount(%) someone has to scroll in order to 100% scroll a timelne line
  let amount_scrolled_to_fill_a_timeline_line = 6;

  let number_of_lines_hundred_percent = Math.floor(
    percent_scrolled / amount_scrolled_to_fill_a_timeline_line
  );

  let max_permissible_scroll_percent =
    number_of_timeline_lines * amount_scrolled_to_fill_a_timeline_line;

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
      $(".timeline_circle")[i + 1].classList.replace(
        "opacity-30",
        "opacity-100"
      );
      $(".card_container_div")[i + 1].classList.replace(
        "opacity-30",
        "opacity-100"
      );
      $(".year_text_div")[i + 1].classList.replace("opacity-30", "opacity-100");
    }
    if (i != number_of_timeline_lines - 1) {
      $(".year_text_div")[i].classList.replace(
        "lg:text-[6rem]",
        "lg:text-[5rem]"
      );
      $(".year_text_div")[i].classList.replace(
        "text-[1.5rem]",
        "text-[1.1rem]"
      );
      $(".year_text_div")[i].classList.replace(
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
    each_timeline_line_percent_scrolled_map[number_of_lines_hundred_percent] =
      ((percent_scrolled -
        number_of_lines_hundred_percent *
          amount_scrolled_to_fill_a_timeline_line) /
        amount_scrolled_to_fill_a_timeline_line) *
      100;
    $(".year_text_div")[number_of_lines_hundred_percent].classList.replace(
      "lg:text-[5rem]",
      "lg:text-[6rem]"
    );
    $(".year_text_div")[number_of_lines_hundred_percent].classList.replace(
      "text-[1.1rem]",
      "text-[1.5rem]"
    );
    $(".year_text_div")[number_of_lines_hundred_percent].classList.replace(
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
    each_timeline_line_percent_scrolled_map[i] = 0;

    if (i < number_of_timeline_circles) {
      $(".timeline_circle")[i].classList.replace("opacity-100", "opacity-30");
      $(".card_container_div")[i].classList.replace(
        "opacity-100",
        "opacity-30"
      );
      $(".year_text_div")[i].classList.replace("opacity-100", "opacity-30");
      $(".year_text_div")[i].classList.replace(
        "lg:text-[6rem]",
        "lg:text-[5rem]"
      );
      $(".year_text_div")[i].classList.replace(
        "text-[1.5rem]",
        "text-[1.1rem]"
      );
      $(".year_text_div")[i].classList.replace(
        "md:text-[3rem]",
        "md:text-[2.5rem]"
      );
    }
  }

  //draw the timeline line that indicates the current progress on the timeline
  $(".timeline_line").each((index, value) => {
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
        "timeline_line",
        "w-2",
        "bg-blue-800"
      );
    } else if (each_timeline_line_percent_scrolled_map[index] <= 100) {
      div.classList.add(
        "absolute",
        "top-0",
        "left-0",
        `h-[${each_timeline_line_percent_scrolled_map[index]}%]`,
        "timeline_line",
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
