<?php
require_once "header.php";
?>
    <link rel="stylesheet" href="hoofd_includes/index.css">
    <script type="text/javascript" src="hoofd_includes/header.js"></script>


<main>
    <div id="intro">
        <h1>Logboek</h1>
        <p>Dit is mijn persoonlijke logboek site. Hier staan al mijn projecten in die ik over de afgelopen schooljaar(en)
            heb gemaakt. Ook staan opdrachten die ik tijdens stage heb gemaakt hiertussen. Verder staan mijn stage gegevens
        hier ook op deze site.</p>
    </div>

    <div id="blokjes">
        <a href="index.php"> <i class="fas fa-home"></i> </a>
        <a href="#"> <i class="fas fa-project-diagram"></i> </a>
        <a href="#"> <i class="fas fa-user"></i> </a>
        <a href="#"> <i class="fas fa-phone"></i> </a>
    </div>

    <div id="mobile_navigation">
        <div class="hamburger_navigation navigation_icon"><i class="fas fa-bars"></i></div>
        <div class="home_navigation navigation_icon"></div>
        <div class="previous_navigation navigation_icon" onclick="go_back()"><i class="fas fa-caret-left"></i></div>
    </div>
</main>

<?php
require_once "footer.php";
?>