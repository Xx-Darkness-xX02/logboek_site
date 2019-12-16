<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="hoofd_includes/header.css">
    <script type="text/javascript" src="hoofd_includes/header.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,400,400i,700&display=swap" rel="stylesheet">
</head>
<body>
<header> <!-- header -->
    <img src="hoofd_img/logo.png" alt="">
    <span onclick="openNav()" > <div class="hamburger"> <i class="fas fa-bars"></i> </div> </span>
</header> <!-- einde header -->

<div id="myNav" class="overlay"><!-- overlay -->

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <!-- close button -->

    <div class="overlay-content"> <!-- content -->
        <a href="index.php">Home</a>
        <a href="pages/projecten.php">Projecten</a>
        <a href="pages/gegevens.php">Gegevens</a>
        <a href="pages/stage.php">Stage Info</a>
        <a href="pages/evaluatie.php">evaluatie</a>
    </div> <!-- einde content -->

</div><!-- einde overlay -->

