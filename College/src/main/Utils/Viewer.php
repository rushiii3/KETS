<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V. G. VAZE</title>
  <?php include('../../library/library.php'); ?>
</head>

<body class="bg-white">


  <?php include('../Layouts/header2.php'); ?>
  <div class="mt-36">
    <?php
    $link = $_GET['link'];
    $name = pathinfo($link, PATHINFO_FILENAME);
    $path_info = pathinfo($link);
    $filename = $name . '.' . $path_info['extension'];
    ?>

    <h1 class="text-4xl font-bold tracking-tight text-black sm:text-4xl my-5 text-center"><?php echo ($name); ?></h1>

    <object data="<?php echo ($link); ?>" type="application/pdf" class="h-screen w-full px-3">
      <p>Unable to display PDF file. <a href="<?php echo ($link); ?>">Download</a> instead.</p>
    </object>

    <button type="button" class="text-center mt-10 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
      <a href="<?php echo ($link); ?>" target="_blank" download="<?php echo ($filename); ?>" id="link">Download the pdf</a>
    </button>

  </div>

  <?php include('../Layouts/footer.php'); ?>
</body>
<?php include('../../library/AOS.php'); ?>





</html>