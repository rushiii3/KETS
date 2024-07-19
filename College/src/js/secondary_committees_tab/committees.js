//////////////////////////////////////////////  VARIABLES    /////////////////////////////////////////
let carousel_previous_translate_amt = { 0: 0, 1: 0, 2: 0 };
let carousel_index_map = { 0: 0, 1: 1, 2: 2 };
let translate_by = window.innerWidth;
const carousel_container_div = document.getElementById(
  "carousel_container_div"
);
let carousel_images_array = [];

//////////////////////////////////////////////  EVENTS    /////////////////////////////////////////
//1. carousel

//////////////////////////////////////////////  FUNCTIONS   /////////////////////////////////////////////
function playCarousel() {
  document.querySelectorAll(".carousel_img").forEach((img, index) => {
    carousel_index_map[index] -= 1;
    if((carousel_index_map[index] - index)>0 && img.classList.contains("-z-10")){
        img.classList.remove("-z-10")
        
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
