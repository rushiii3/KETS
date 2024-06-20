<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
    <?php include('../../library/library.php'); ?>
    
</head>
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

        .vision-statement {
            background: linear-gradient(135deg, #ebf2fa, #e0f7ff);
            border-left: 6px solid #1e3a8a;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .vision-statement h3 {
            font-family: 'Montserrat', sans-serif;
            color: #1e40af;
            font-weight: 700;
        }

        .vision-statement p {
            color: #475569;
            font-size: 1.25rem;
        }

        @media (min-width: 1024px) {
            .vision-statement h3 {
                font-size: 2rem;
            }

            .vision-statement p {
                font-size: 1.5rem;
            }
        }
    </style>

<body class="bg-white overflow-x-hidden mx-auto">

    <?php include('../Layouts/header2.php'); ?>
    <?php include('../Components/kelkar_trust.php'); ?>
    <?php include('../Layouts/footer.php'); ?>
</body>
<?php include('../../library/AOS.php'); ?>


 <!-- AOS Animation Library -->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</html>
