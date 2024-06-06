<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="The college website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. </title>
    <?php include('../../../library/library.php'); ?>
    <?php include('../../../config/connect.php');?>
  </head>
  <body class=" mx-auto overflow-x-hidden"> 
  <?php include('../../Layouts/header2.php'); ?> 
    <?php include('../../Components/Student_Corner/notice.php'); ?>
    <?php include('../../Layouts/footer.php'); ?> 
    <script src="../../../js/Student_Corner/notice.js"></script>
    <script src="../../../js/Student_Corner/notice.js"></script>
    
 
  </body>
  <?php include('../../../library/AOS.php'); ?>
</html>
<script>
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
        </script>

