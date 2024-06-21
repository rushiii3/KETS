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
            transition: transform 0.3s ease;
        }

        .section-content:hover {
            transform: scale(1.02);
        }

        .quote {
            font-style: italic;
            color: #475569;
            margin-top: 10px;
            font-size: 1.25rem;
            animation: fadeIn 2s ease-in-out forwards;
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

        .animate-text {
            animation: fadeInUp 2s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header-bg {
            background: linear-gradient(to top, rgba(30, 41, 59, 0.8), rgba(30, 41, 59, 0.6)), url('../../assests/college.png') no-repeat center center/cover;
        }

        .objective-card {
            background-color: #fff;
            border-left: 4px solid #1e40af;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .objective-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .objective-title {
            color: #1e3a8a;
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 10px;
            position: relative;
        }

        .objective-title::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 3px;
            background-color: #1e3a8a;
            bottom: -5px;
            left: 0;
        }

        .objective-list {
            list-style-type: none;
            padding: 0;
            color: #475569;
        }

        .objective-list li {
            margin-bottom: 10px;
            font-size: 1.125rem;
            display: flex;
            align-items: center;
        }

        .objective-list li::before {
            content: '•';
            color: #1e40af;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
            margin-right: 0.5em;
        }

        .objective-list ul {
            padding-left: 1.5em;
        }
    </style>
    <body class="bg-white overflow-x-hidden mx-auto">

    <?php include('../Layouts/header2.php'); ?>
    <?php include('../Components/faculty.php'); ?>
    <?php include('../Layouts/footer.php'); ?>
</body>
<?php include('../../library/AOS.php'); ?>


 <!-- AOS Animation Library -->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        AOS.init();
    </script>
</html>
