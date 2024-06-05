<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="The college website">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V. G. </title>
  <?php include('../../../library/library.php'); ?>
  <?php include('../../../config/connect.php'); ?>
</head>

<body class=" mx-auto overflow-x-hidden">
  <?php include('../../Layouts/header2.php'); ?>
  <?php include('../../Components/Student_Corner/examination.php'); ?>
  <?php include('../../Layouts/footer.php'); ?>
  <script src="../../../js/Student_Corner/examination.js"></script>
    


</body>
<?php include('../../../library/AOS.php'); ?>

</html>

<script>
  var $mq = $('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration: 7000,
    //gap in pixels between the tickers
    gap: 50,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
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
<!-- <script>
   function fetchNotices1(year, value) {
    alert("year, value");
    $(document).ready(function() {

      $.ajax({
        url: "fetch_notices2.php",
        type: "POST",
        cache: false,
        data: {
          year: year,
          section: value,
          
          
        },
          
        success: function(data) {
          $("#"+ value +"_exam").html(data);
        }
      });

    });


  }

  function fetchNotices(year, value) {
    alert("year, value 2");
    fetchNotices1(year, value);
    $(document).ready(function() {

      $.ajax({
        url: "fetch_notices2.php",
        type: "POST",
        cache: false,
        data: {
          a_year: year,
          clg_section: value,
          
          
        },
          
        success: function(data) {
          $("#"+value+"_result").html(data);
        }
      });

    });


  }

  
</script> -->