let principal_values_object = {
  years_translate_percent: 33.333333,
  info_card_translate_amount: 100,
  increment_percent: false,
  decrement_percent: false,
  active_index: 1,
  total_number_of_years: $("#year_ul_principals li").length,
  year_ul_css_selector: "#year_ul_principals",
  info_card_css_selector: ".principal_info_card",
  next_button_css_selector: "#next_button_principals",
  prev_button_css_selector: "#prev_button_principals",
};

let vice_principal_degree_values_object = {
  years_translate_percent: 33.333333,
  info_card_translate_amount: 100,
  increment_percent: false,
  decrement_percent: false,
  active_index: 1,
  total_number_of_years: $("#year_ul_vp_degree li").length,
  year_ul_css_selector: "#year_ul_vp_degree",
  info_card_css_selector: ".vp_degree_info_card",
  next_button_css_selector: "#next_button_vp_degree",
  prev_button_css_selector: "#prev_button_vp_degree",
};

let vice_principal_junior_values_object = {
  years_translate_percent: 33.333333,
  info_card_translate_amount: 100,
  increment_percent: false,
  decrement_percent: false,
  active_index: 1,
  total_number_of_years: $("#year_ul_vp_junior li").length,
  year_ul_css_selector: "#year_ul_vp_junior",
  info_card_css_selector: ".vp_junior_info_card",
  next_button_css_selector: "#next_button_vp_junior",
  prev_button_css_selector: "#prev_button_vp_junior",
};


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function () {
  if (principal_values_object.active_index == 1) {
    $("#prev_button_principals").addClass("hidden");
  }

  if (vice_principal_degree_values_object.active_index == 1) {
    $("#prev_button_vp_degree").addClass("hidden");
  }

  if (vice_principal_junior_values_object.active_index == 1) {
    $("#prev_button_vp_junior").addClass("hidden");
  }
});


//PRINCIPAL SECTION
$("#next_button_principals").click(function () {
  carouselNextButtonClicked(principal_values_object);
});

//Previous button
$("#prev_button_principals").click(function () {
  carouselPrevButtonClicked(principal_values_object)
 
});


//VICE PRINCIPAL DEGREE SECTION
$("#next_button_vp_degree").click(function () {
  carouselNextButtonClicked(vice_principal_degree_values_object);
});

//Previous button
$("#prev_button_vp_degree").click(function () {
  carouselPrevButtonClicked(vice_principal_degree_values_object)
 
});

//VICE PRINCIPAL JUNIOR SECTION
$("#next_button_vp_junior").click(function () {
  carouselNextButtonClicked(vice_principal_junior_values_object);
});

//Previous button
$("#prev_button_vp_junior").click(function () {
  carouselPrevButtonClicked(vice_principal_junior_values_object)
 
});
//////////////////////////////////////////////////////////////////FUNCTIONS////////////////////////////////////////////
function carouselNextButtonClicked(values_object) {
  if (values_object.active_index != values_object.total_number_of_years - 1) {
    for (let index = 0; index < values_object.total_number_of_years; index++) {
      element = $(`${values_object.year_ul_css_selector} li`)[index];
      principal_card = $(`${values_object.info_card_css_selector}`)[index];

      //shift the years
      if (
        element.classList.contains(
          `-translate-x-[${values_object.years_translate_percent}vw]`
        )
      ) {
        //console.log("also also here");
        element.classList.replace(
          `-translate-x-[${values_object.years_translate_percent}vw]`,
          `-translate-x-[${
            values_object.years_translate_percent + 33.333333
          }vw]`
        );

        values_object.increment_percent = true;
      } else {
        //console.log("also also here 2");
        values_object.increment_percent = false;
        element.classList.add(
          `-translate-x-[${values_object.years_translate_percent}vw]`
        );
      }

      if (
        index == values_object.active_index + 1 &&
        element.classList.contains("inactive_year")
      ) {
        element.classList.replace("inactive_year", "font-black");
        element.classList.remove("dark:inactive_year");
        element.classList.replace("text-sm", "text-xl");
        element.classList.replace("sm:text-2xl", "sm:text-4xl");
        element.classList.replace("md:text-4xl", "md:text-[3rem]");
        element.classList.replace("lg:text-5xl", "lg:text-[3.7rem]");
        //return false;
      } else if (element.classList.contains("font-black")) {
        element.classList.replace("font-black", "inactive_year");
        element.classList.add("dark:inactive_year");
        // element.classList.remove("scale-110");
        element.classList.replace("text-xl", "text-sm");
        element.classList.replace("sm:text-4xl", "sm:text-2xl");
        element.classList.replace("md:text-[3rem]", "md:text-4xl");
        element.classList.replace("lg:text-[3.7rem]", "lg:text-5xl");
      }

      //shift the principal cards

      if (index < values_object.total_number_of_years - 1) {
        if (
          principal_card.classList.contains(
            `-translate-x-[${values_object.info_card_translate_amount}vw]`
          )
        ) {
          principal_card.classList.replace(
            `-translate-x-[${values_object.info_card_translate_amount}vw]`,
            `-translate-x-[${values_object.info_card_translate_amount + 100}vw]`
          );
          values_object.increment_percent = true;
        } else {
          values_object.increment_percent = false;
          principal_card.classList.add(
            `-translate-x-[${values_object.info_card_translate_amount}vw]`
          );
        }
      }
    }

    //$("#year_ul li").each(function (index, element) {

    //});

    values_object.active_index += 1;

    if (values_object.active_index == values_object.total_number_of_years - 1) {
      $(`${values_object.next_button_css_selector}`).addClass("hidden");
    } else if (
      values_object.active_index < values_object.total_number_of_years - 1 &&
      $(`${values_object.next_button_css_selector}`).hasClass("hidden")
    ) {
      $(`${values_object.next_button_css_selector}`).removeClass("hidden");
    }

    if (
      values_object.active_index > 1 &&
      $(`${values_object.prev_button_css_selector}`).hasClass("hidden")
    ) {
      $(`${values_object.prev_button_css_selector}`).removeClass("hidden");
    }

    if (values_object.increment_percent) {
      values_object.years_translate_percent += 33.333333;
      values_object.info_card_translate_amount += 100;
    }
  }
}

function carouselPrevButtonClicked(values_object) {
  if (values_object.active_index > 1) {
    for (let index = 0; index < values_object.total_number_of_years; index++) {
      element = $(`${values_object.year_ul_css_selector} li`)[index];
      principal_card = $(`${values_object.info_card_css_selector}`)[index];
      if (
        element.classList.contains(
          `-translate-x-[${values_object.years_translate_percent}vw]`
        )
      ) {
        //console.log("also also here");
        element.classList.replace(
          `-translate-x-[${values_object.years_translate_percent}vw]`,
          `-translate-x-[${values_object.years_translate_percent - 33.333333}vw]`
        );

        values_object.decrement_percent = true;
      } else {
        //console.log("also also here 2");
        values_object.decrement_percent = false;
        element.classList.add(
          `-translate-x-[${values_object.years_translate_percent}vw]`
        );
      }

      if (
        index == values_object.active_index - 1 &&
        element.classList.contains("inactive_year")
      ) {
        element.classList.replace("inactive_year", "font-black");
        element.classList.remove("dark:inactive_year");
        element.classList.replace("text-sm", "text-xl");
        element.classList.replace("sm:text-2xl", "sm:text-4xl");
        element.classList.replace("md:text-4xl", "md:text-[3rem]");
        element.classList.replace("lg:text-5xl", "lg:text-[3.7rem]");
        //return false;
      } else if (element.classList.contains("font-black")) {
        element.classList.replace("font-black", "inactive_year");
        element.classList.add("dark:inactive_year");
        // element.classList.remove("scale-110");
        element.classList.replace("text-xl", "text-sm");
        element.classList.replace("sm:text-4xl", "sm:text-2xl");
        element.classList.replace("md:text-[3rem]", "md:text-4xl");
        element.classList.replace("lg:text-[3.7rem]", "lg:text-5xl");
      }

      //shift the principal cards

      if (index < values_object.total_number_of_years- 1) {
        if (
          principal_card.classList.contains(
            `-translate-x-[${values_object.info_card_translate_amount}vw]`
          )
        ) {
          principal_card.classList.replace(
            `-translate-x-[${values_object.info_card_translate_amount}vw]`,
            `-translate-x-[${values_object.info_card_translate_amount - 100}vw]`
          );
          values_object.decrement_percent = true;
        } else {
          values_object.decrement_percent = false;
          principal_card.classList.add(
            `-translate-x-[${values_object.info_card_translate_amount}vw]`
          );
        }
      }
    }

    

   values_object.active_index -= 1;

    if (values_object.active_index == 1) {
      $(`${values_object.prev_button_css_selector}`).addClass("hidden");
    } else if (
      values_object.active_index < values_object.total_number_of_years - 1 &&
      $(`${values_object.next_button_css_selector}`).hasClass("hidden")
    ) {
      $(`${values_object.next_button_css_selector}`).removeClass("hidden");
    }

    if (
      values_object.active_index == values_object.total_number_of_years - 1 &&
      !$(`${values_object.next_button_css_selector}`).hasClass("hidden")
    ) {
      $(`${values_object.next_button_css_selector}`).addClass("hidden");
    }

    if (values_object.decrement_percent) {
      values_object.years_translate_percent -= 33.333333;
      values_object.info_card_translate_amount -= 100;
    }
  }
}
