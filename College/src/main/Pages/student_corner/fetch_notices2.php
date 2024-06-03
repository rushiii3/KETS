<?php
include("../../../config/connect.php");


if (isset($_POST['year']) && isset($_POST['section'])) {
    $year = $_POST['year'];
    $section = $_POST['section'];

    $query = "SELECT  n.all_pdf_title,n.all_pdf_upload_date FROM `notices` as n INNER JOIN notices_are_for_clg_section_in_academic_year as ny on n.all_pdf_id=ny.notice_id where ny.academic_year='$year' and ny.college_sec_name='$section' ORDER BY all_pdf_upload_date DESC ";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        echo '
<div class="flex w-full bg-gray-500 flex-col marquee overflow-hidden overflow-y-hidden h-96 text-left p-4 space-y-2 gap-4 " id="degree_exam">
';
        while ($row = $result->fetch_assoc()) {
            $date = $row['all_pdf_upload_date'];
            $title = $row['all_pdf_title'];
            echo '<a href="#">
                   <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2 p-3 ">
                   <p class="text-base  px-2 my-5  cursor-pointer">
                  <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">' . $date . ': </span>' . $title . '</a>
                 </p>
                </div>
                </a>
            ';
        }
        echo "</div>";
    }
} else {
    echo "
    <script>
    alert('no!!!!');
    </script>
    ";
}
?>
<style>
    @keyframes marquee {
        0% {
            transform: translateY(0%);
        }

        100% {
            transform: translateY(-100%);
        }
    }

    @keyframes marquee2 {
        0% {
            transform: translateY(100%);
        }

        100% {
            transform: translateY(0%);
        }
    }

    .animate-marquee {
        animation: marquee 15s linear infinite, marquee2 15s linear infinite;
    }

    .animate-marquee2 {
        animation: marquee 15s linear infinite, marquee2 15s linear infinite;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.6.0/jquery.marquee.js" integrity="sha512-fkD+ERYA/LvkGF5GiipDr7myGZH3m8OPbYw62KE6qalbgykahcpfNjWe/RZmsY12qraS+wYUo2e51Zl2hShgVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var $mq = $('.marquee').marquee({
        //speed in milliseconds of the marquee
        duration: 7000,
        //gap in pixels between the tickers
        gap: 60,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 4,
        //'left' or 'right'
        direction: 'up',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,

        pauseOnHover: true,
    });

    $mq.marquee('pause');
    $('#marqueeStarter').click(function() {
        $mq.marquee('resume');
    });
</script>


