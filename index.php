<?php
require_once "header.php";
?>
    <link rel="stylesheet" href="hoofd_includes/index.css">
    <script type="text/javascript" src="hoofd_includes/index.js"></script>
    <script type="text/javascript" src="hoofd_includes/header.js"></script>
    <main>
        <div id="intro">
            <h1>Stage Verslag</h1>
            <p>Dit is mijn stage verslag. Je kunt hier alles over mijn stage vinden. Ik heb de aangegeven opbouw iets
            aangepast omdat er veel informatie is en ik het niet onoverzichtelijk wil maken. Bij het inleveren heb ik
            het opdracht vel erbij ingeleverd waarop staat waar je wat kunt vinden. </p>
        </div>

        <div id="blokjes">
            <a href="index.php"> <i class="fas fa-home"></i> </a>
            <a href="pages/projecten.php"> <i class="fas fa-project-diagram"></i> </a>
            <a href="pages/gegevens.php"> <i class="fas fa-user geen_margin"></i> </a>
            <a href="pages/stage.php"> <i class="fas fa-building geen_margin"></i> </a>
        </div>

        <div id="mobile_navigation" >
            <div class="hamburger_navigation navigation_icon" onclick="openNav()"><i class="fas fa-bars"></i></div>
            <div class="home_navigation navigation_icon"><i class="fas fa-home"></i></div>
            <div class="previous_navigation navigation_icon" onclick="go_back()"><i class="fas fa-undo-alt"></i></div>
        </div>

        <div id="image_holder">
            <img src="hoofd_img/dca.jpg" alt="dca groep">
            <p class="image_caption">DCA Middendreef 281</p>
        </div>

        <div id="rol_stage">
            <h2>Rol binnen stageplek</h2>
            <p>Ik heb tijdens deze stage veel geleerd en ervaring opgedaan.
                En er waren veel opdrachten die ik heb uitgevoerd. Een aantal
                van die opdrachten zijn op deze website te vinden. Verder moest
                ik helpen met het updaten van de computers en helpen met het voorbereiden
                van een congress.</p>
        </div>

        <div id="leerdoelen" style="margin-bottom: 60px">
            <h2>Bereikte Leerdoelen</h2>
            <p>Zoals hierboven beschreven heb ik deze stage veel geleerd. Ik kwam op
                deze stage met basis kennis over <span class="groen">HTML</span>
                <span class="blauw">CSS</span> en een beetje <span class="paars">PHP</span>.
                Aan het begin van de stage had ik nog te weinig kennis om opdrachten te maken.
                Maar ik had een boek gekocht over <span class="paars">PHP</span> dit heeft mij goed geholpen,
                en na een aantal weken had ik mijn eerste opdracht al af. Ook hebben mijn collega's
                op stage goed geholpen en mij ook de kans gegeven om nieuwe talen en technieken toe
                te passen op leuke opdrachtjes.</p>
        </div>

    </main>
</body>
