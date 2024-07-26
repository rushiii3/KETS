<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="The college website">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V. G. </title>
  <?php include('../../../library/library.php'); ?>
  <link rel="stylesheet" href="../../../css/common/header_2.css" />
</head>

<body class=" dark:bg-black mx-auto overflow-x-hidden">
  <?php include('../../Layouts/header2.php'); ?>
  <?php include('../../Components/Student_Corner/rollCall.php'); ?>
  <?php include('../../Layouts/footer.php'); ?>
  <script src="../../../js/Student_Corner/rollCall.js"></script>
  <script src="../../../js/common/header_2.js"></script>

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