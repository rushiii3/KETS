<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <style>
        .bg:hover {
            color: rgb(242, 242, 242) !important;

        }
    </style>

</head>
<?php include('../../../library/library.php'); ?>
<?php include('../../../config/connect.php'); ?>

<body class="bg-gray-100 overflow-x-hidden mx-auto " style="transition: all 2s ease">
    <?php include('../../Layouts/header2.php'); ?>
    <?php include('../../Components/academics_tab/dept_index.php'); ?>
    <?php include('../../Layouts/footer.php'); ?>

</body>
<?php include('../../../library/AOS.php'); ?>

</html>
<script src="../../../js/showMoreItems.min.js"></script>
<script src="../../../js/common/header_2.js"></script>

<script>
    $(document).ready(function() {

        $('.list1').showMoreItems({
            startNum: 9,
            afterNum: 3,
            moreText: 'View All',
            original: true,
        });
    })


    $(document).ready(function() {
        $("#ok1").show(); //display submit
        $("#ok2").hide();
        $("#ok3").hide();

        $("#test1").on("click", function() {
            var yearID = $(this).val();
            //  alert("test1");

            // var progId = document.getElementById("programee").value;
            $("#ok1").show(); //display submit
            $("#ok2").hide();
            $("#ok3").hide();
        });

        $("#test2").on("click", function() {
            //   alert("test2");


            $("#ok1").hide(); //display submit
            $("#ok2").show();
            $("#ok3").hide();
        });
        $("#test3").on("click", function() {
            //   alert("test2");
            $("#ok1").hide(); //display submit
            $("#ok3").show();
            $("#ok2").hide();
        });
    });
</script>