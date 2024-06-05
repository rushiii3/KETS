<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE</title>

    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />-->
    <?php include('../../../library/library.php'); ?>
    <style>
        .head2 {
            background: linear-gradient(to right, rgb(0, 35, 177), rgb(214, 95, 69));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card svg {
            opacity: 0;
            /* Start hidden */
        }

        .card svg.fadeIn {
            animation: fadeIn 2s forwards;
        }

        .card svg.top-quote {
            animation: top-quote 2s forwards;
        }

        .card svg.bottom-quote {
            animation: bottom-quote 2s forwards;
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


        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes top-quote {
            0% {
                transform: translate(50px, 80px);
                opacity: 0;
            }

            50% {
                transform: translate(50px, 0px);
                opacity: 1;
            }

            100% {
                transform: translate(0px, 0px);
                opacity: 1;
            }
        }

        @keyframes bottom-quote {
            0% {
                transform: translate(-50px, -80px);
                opacity: 0;
            }

            50% {
                transform: translate(-50px, 0px);
                opacity: 1;
            }

            100% {
                transform: translate(0px, 0px);
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-white overflow-x-hidden mx-auto">

    <?php include('../../Layouts/header2.php'); ?>
    <?php include('../../Components/nss.php'); ?>
    <?php include('../../Layouts/footer.php'); ?>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fadeIn');
                    if (entry.target.classList.contains('transform') && entry.target.classList.contains('-left-12')) {
                        entry.target.classList.add('top-quote');
                    } else if (entry.target.classList.contains('transform') && entry.target.classList.contains('-right-12')) {
                        entry.target.classList.add('bottom-quote');
                    }
                    observer.unobserve(entry.target); // Stop observing once the animation is triggered
                }
            });
        }, options);

        const svgs = document.querySelectorAll('.card svg');
        svgs.forEach(svg => {
            observer.observe(svg);
        });
    });



    $(document).ready(function() {
        $("#year").on("change", function() {
            var yearID = $(this).val();
            if (yearID == 2019) {
                //alert(yearID);
                $("#2019_2020").show();
                $("#2020_2021").hide();
                $("#2021_2022").hide();
                $("#2022_2023").hide();
                $("#2023_2024").hide();

            } else if (yearID == 2020) {

                $("#2019_2020").hide();
                $("#2020_2021").show();
                $("#2021_2022").hide();
                $("#2022_2023").hide();
                $("#2023_2024").hide();

            } else if (yearID == 2021) {

                $("#2019_2020").hide();
                $("#2020_2021").hide();
                $("#2021_2022").show();
                $("#2022_2023").hide();
                $("#2023_2024").hide();

            } else if (yearID == 2022) {

                $("#2019_2020").hide();
                $("#2020_2021").hide();
                $("#2021_2022").hide();
                $("#2022_2023").show();
                $("#2023_2024").hide();

            } else if (yearID == 2023) {

                $("#2019_2020").hide();
                $("#2020_2021").hide();
                $("#2021_2022").hide();
                $("#2022_2023").hide();
                $("#2023_2024").show();
            } else {
                alert("Error!!");
            }


            // var progId = document.getElementById("programee").value;
            // $("#Submit").show(); //display submit
            // $("#selectall").show();

        });





    });
</script>