<?php
include_once "header.php";
?>
<link rel="stylesheet" href="page_includes/projecten.css">
<main>
    <div class="intro">
        <!-- ------------- hier moet komen te staan dat je jan-jaap moet mailen of de website ook als verslag mag tellen. ----->
        <!-- Tim vragen voor stamboom DCA Multimedia -->
        <h1>Stage Projecten</h1>
        <p>Je bent nu op de projecten pagina beland. op deze pagina staan alle projecten en opdrachten
            die ik heb uitgevoerd op stage. Hier Staan projecten in die in opdracht waren voor stage, en
            projecten die ik tijdens stage heb gemaakt om bepaalde talen en functies uit te proberen.</p>
    </div>

    <div id="div_een" ><!-- dit is de 1e div -->
        <h1>Leer doelen</h1>
        <p>Tijdens stage heb ik veel leermomenten gehad. Mijn stagebegeleiders lieten mij veel nieuwe dingen
            uitproberen, en gaven hier goede uitleg en tips bij. Ik heb niet alleen nieuwe dingen geleerd op
            het gebied van
            programeren maar ook op het gebied van het omgaan met de computer en ook wat een ict job in zijn
            algemeen inhoud
            denk hierbij aan het updaten van alle computers in het bedrijf. voor een opsomming wat ik
            allemaal heb
            gedaan klik dan op de onderstaande knop.</p>
            <button class="klik_een" name="klik_een" onclick="hide_div()">klik</button>
    </div>

    <div id="div_twee" style="display: none"><!-- dit is de 2e div -->
        <h1>hallo</h1>
        <p>dit is mijn div</p>
            <button class="klik_twee" name="klik_twee" value="klik" onclick="show_div()">klik</button>
    </div>

</main>

<?php
include_once "navigation.php";
?>

<script>
    function hide_div() {
        document.getElementById("div_een").style.display = "none";
        document.getElementById("div_twee").style.display = "block";
    }

    function show_div(){
        document.getElementById("div_een").style.display = "block";
        document.getElementById("div_twee").style.display = "none";
    }
</script>


<!-- maak een knop die een andere inhoud laat tonen in de div-->
<!-- in die moet komen te staan wat je allemaal heb gedaan en wat je ervan hebt geleerd -->

