const filter_div = document.getElementById("filter_div");
const filter_toggle_btn = document.getElementById("filter_toggle_btn");
const filter_parent_div = document.getElementById("degree_tab_contents");
const filter_mobile_close_btn = document.getElementById(
  "filter_mobile_close_btn"
);

const all_course_cards=document.querySelectorAll(".course_card");
const all_jc_course_cards=document.querySelectorAll(".jc_stream_card");

let is_filter_visible = false;
if (window.innerWidth >= 640) {
  is_filter_visible = true;
}

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

//redirect to specific course page
all_course_cards.forEach((course_card)=>{
  course_card.addEventListener('click',()=>{
    let course_id= document.querySelector(".p_hidden").innerText;
    //the link is respective to the php file where this js file will be linked
    window.location.href="../../Pages/academics_tab/specific_course_details.php?id="+course_id;
  })
})

//redirect to specific jc stream page
all_jc_course_cards.forEach((course_card)=>{
  course_card.addEventListener('click',()=>{
    let stream= course_card.querySelector("h3").innerText;
    //the link is respective to the php file where this js file will be linked
    window.location.href="../../Pages/academics_tab/specific_jc_stream.php?stream="+stream;
  })
})
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
