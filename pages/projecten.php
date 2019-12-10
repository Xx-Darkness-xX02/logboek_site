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
            projecten die ik tijdens stage heb gemaakt om bepaalde talen en functies uit te proberen. </p>
    </div>

    <div id="div_een"><!-- dit is de 1e div -->
        <h1>Leer doelen</h1>
        <p>Tijdens stage heb ik veel leermomenten gehad. Mijn stagebegeleiders lieten mij veel nieuwe dingen
            uitproberen, en gaven hier goede uitleg en tips bij. Ik heb niet alleen nieuwe dingen geleerd op
            het gebied van
            programeren maar ook op het gebied van het omgaan met de computer en ook wat een ict job in zijn
            algemeen inhoud
            denk hierbij aan het updaten van alle computers in het bedrijf. voor een opsomming wat ik
            allemaal heb
            gedaan klik dan op de onderstaande knop.</p>
        <button class="klik_een" name="klik_een" onclick="hide_div()">klik</button><!-- verander div knop -->
    </div>

    <div id="div_twee" style="display: none"><!-- dit is de 2e div -->
        <h1>Opsomming</h1> <!-- opsomming -->
        <p>Hier is een opsomming van wat ik allemaal heb gedaan en wat ik ervan geleerd heb. Als je meer wilt
            weten over een onderwerp klik dan op het kopje. Je wordt dan omgeleid naar een andere pagina met
            uitgebreide uitleg.
        </p>

        <h3>Programmeer Talen</h3> <!-- programmeer talen -->
        <p>Tijdens stage zijn er veel programmeer talen voorbij gekomen. Ik heb zelf een boek gekocht
            met daarin een uitgebreide uitleg over PHP. Mijn stagebegeleiders lieten mij de tijd nemen om
            dit door te nemen. Ik heb uit dat boek ook veel geleerd. Ook zijn door de verschillende opdrachten
            verschillende talen van pas geweest waarvan ik een paar voor het eerst heb gebruikt. voorbeelden zijn.
        <ul>
            <li style="color: #6cc24a; font-weight: bold;">Node</li>
            <li style="color: purple; font-weight: bold;">PHP</li>
            <li style="color: yellow; font-weight: bold;">Javascript</li>
        </ul>
        PHP en Javascript zijn talen die ik voorheen ook heb geprobeerd. Maar ik heb ze nooit in de praktijk
        gebruikt. Verder zijn er nog een aantal talen die van pas zijn gekomen maar die zijn niet heel relevant
        om op te noemen. Ik heb er uiteraard wel wat van opgestoken.
        </p>
        <h3>Computer Skills</h3><!-- computer skills -->
        <p>Ik heb tijdens mijn stage ook veel geleerd over het omgaan met een computer. Ik heb een aantal updates
            uitgevoerd op de Vaste computers. Ook heb ik een aantal computers "ready to use" gemaakt voor nieuwe
            stagaires
            of collega's. Ook heb ik tijdens mijn stage geleerd hoe ik een computer kan bouwen en wat alles inhoud.</p>
        <h3>Kantoorbaan?</h3>
        <p>Ook een belangrijk onderdeel wat heb ik heb geleerd tijdens stage, is wat een kantoorbaan inhoudt. Ik vond
            het een bijzondere ervaring, omdat stage een goed beeld geeft van hoe het leven is na school. </p>

        <button class="klik_twee" name="klik_twee" value="klik" onclick="show_div()">klik</button>
        <!-- verander div knop -->
        <label class="naar_boven" onclick="topFunction()">naar boven <i class="fas fa-long-arrow-alt-up"></i></label>
        <!-- naar boven knop -->
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

    function show_div() {
        document.getElementById("div_een").style.display = "block";
        document.getElementById("div_twee").style.display = "none";
    }

    function topFunction() {
        document.body.scrollTop = 0; //safari
        document.documentElement.scrollTop = 0;
    }
</script>


<!-- maak een knop die een andere inhoud laat tonen in de div-->
<!-- in die moet komen te staan wat je allemaal heb gedaan en wat je ervan hebt geleerd -->

