<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <style>
        .bg {
            background-color: whitesmoke !important;
        }

        .bg:hover {
            background-color: #3dbeff !important;
            color: #3d3d3d !important;

        }
    </style>
</head>
<?php include('../../../library/library.php'); ?>
<?php include('../../../config/connect.php'); ?>

<body class="bg-gray-100 overflow-x-hidden mx-auto " style="transition: all 2s ease">
    <?php include('../../Layouts/header2.php'); ?>
    <?php include('../../Components/academics_tab/department.php'); ?>
    <?php include('../../Layouts/footer.php'); ?>
    <?php include('../../../library/AOS.php'); ?>
    <script src="../../../js/showMoreItems.min.js"></script>
</body>


</html>