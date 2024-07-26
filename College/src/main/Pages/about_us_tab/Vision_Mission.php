<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE</title>
     <link rel="stylesheet" href="../../../css/common/header_2.css" />

    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />-->
    <?php include('../../../library/library.php'); ?>
    <style>
        .about {
            animation: fade-out linear;
            animation-timeline: view();
            animation-range: exit -200px;

        }


        @keyframes fade-out {
            to {
                opacity: 0;
            }
        }

        h3 {
            background: linear-gradient(to right, rgb(0, 35, 177), rgb(214, 95, 69));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .head, .kelkar {
            background: linear-gradient(to right, rgb(0, 0, 252), rgb(0, 127, 149), rgb(0, 113, 81));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="bg-white overflow-x-hidden mx-auto">

    <?php include('../../Layouts/header2.php'); ?>
    <?php include('../../Components/about_us_tab/vision_mission.php'); ?>
    <?php include('../../Layouts/footer.php'); ?>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script src="../../../js/common/header_2.js"></script>
<script>

</script>