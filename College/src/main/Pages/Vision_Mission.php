<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <?php include('../../library/library.php'); ?>
    <style>
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #1a202c;
        }

        .section-heading {
            font-family: 'Montserrat', sans-serif;
            color: #1e3a8a;
        }

        .section-content {
            background-color: #e2e8f0;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .image-wrapper img {
            transition: transform 0.3s ease;
        }

        .image-wrapper:hover img {
            transform: scale(1.05);
        }

        .text-content h3 {
            color: #1e40af;
        }

        .text-content p {
            color: #475569;
        }

        .vision-statement {
            background-color: #ebf2fa;
            border-left: 4px solid #1e3a8a;
            padding: 20px;
            border-radius: 10px;
        }
    
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

    <?php include('../Layouts/header2.php'); ?>
    <?php include('../Components/vision_mission.php'); ?>
    <?php include('../Layouts/footer.php'); ?>
</body>
<?php include('../../library/AOS.php'); ?>

</html>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
 <!-- AOS Animation Library -->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>