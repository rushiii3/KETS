
const tabsElement = document.getElementById("tabs-example");
const tabElements = [{
    id: "profile",
    triggerEl: document.querySelector("#profile-tab-example"),
    targetEl: document.querySelector("#profile-example"),
},
{
    id: "dashboard",
    triggerEl: document.querySelector("#dashboard-tab-example"),
    targetEl: document.querySelector("#dashboard-example"),
},
];
// options with default values
const options = {
    defaultTabId: "profile",
    activeClasses: "text-white bg-blue-700 hover:text-blue-100 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500",
    inactiveClasses: "text-gray-500 bg-white hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300",
    onShow: () => {
        console.log("tab is shown");
    },
};

// instance options with default values
const instanceOptions = {
    id: "tabs-example",
    override: true,
};
const tabs = new Tabs(tabsElement, tabElements, options, instanceOptions);
tabs.show("profile");

console.log(options);
function fetchNotices_exam(year, value) {
    alert("year, value");
    $(document).ready(function() {

      $.ajax({
        url: "../../Components/Student_Corner/AJAX/fetchNotices_exam.php",
        type: "POST",
        cache: false,
        data: {
          year: year,
          section: value,
          
          
        },
          
        success: function(data) {
          $("#"+value+"_exam").html(data);
        }
      });

    });


  }
  function fetchNotices_roll(year, value) {
    alert("year, value");
    $(document).ready(function() {

      $.ajax({
        url: "../../Components/Student_Corner/AJAX/fetchNotices_result.php",
        type: "POST",
        cache: false,
        data: {
          year: year,
          section: value,
          
          
        },
          
        success: function(data) {
          $("#"+value+"_roll").html(data);
        }
      });

    });


  }
