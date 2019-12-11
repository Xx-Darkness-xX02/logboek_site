<?php
include_once "header.php";
?>
    <link rel="stylesheet" href="page_includes/gegevens.css">
<main>
<div id="gegevens">
    <h1>Gegevens</h1>
    <p>Je bent nu op de gegevens pagina beland. Hier kan je alle gegevens van stage
    vinden.</p>

    <h3>Gegevens Leerling</h3><!-- gegevens leerling -->
    <ul>
        <li>Kjell Roelofs</li>
        <li>kroelofs@roc-dev.com</li>
        <span id="dots">. . .</span>
        <div id="more">
            <li>0643718796</li>
            <li>2083915</li>
        </div>
    </ul>
    <button id="my_button" onclick="read_more()">Meer weergeven</button>

    <h3>Gegevens School</h3><!-- gegevens school -->
    <ul>
        <li>Roc van Flevoland</li>
        <li>Straat van Florida 1</li>
        <span id="dots2">. . .</span>
        <div id="more2">
        <li>1334 PA, Almere</li>
        <li>Applicatie-Ontwikkelaar (AO)</li>
        <li>Periode 2</li>
        </div>
    </ul>
    <button id="mijn_knop" onclick="lees_meer()">Meer weergeven</button>

    <h3>Gegevens Stage</h3>
    <ul>
        <li><h4>Praktijk-Opleider</h4></li>
        <li>Tim Vrolijk</li>
        <li>vrolijk@dca-ict.nl</li>
        <span id="dots3">. . .</span>
        <div id="more3">
            <li>ICT</li>
            <li>+31 0320-269520</li>
            <li><h4>BPV-begeleider</h4></li>
            <li>Jan-Jaap Siewers</li>
            <li>j.siewers@rocvf.nl</li>
        </div>
    </ul>
    <button id="my_Button" onclick="read_More()">Meer weergeven</button>
</div>

    <div id="werkzaamheden" >
        <h1>werkzaamheden</h1>
        <p>Bij mijn stage heb ik talloze werkzaamheden verricht. Ik heb een aantal tools gemaakt (zie projecten pagina).
        Ook moest ik een aantal computers klaarmaken voor mijn collega's. Vaak als collega's op een andere afdeling
        problemen hadden met hun computers vroegen ze vaak aan de ict'ers of wij konden helpen of hun probleem konden
        oplossen. Ook werd er 18 december een congress gehouden daar werden tasjes uitgedeeld. Deze tasjes heb ik samen
        met een andere stagaire klaargemaakt. Dit behoort niet echt tot de ict maar ook ict'ers moeten soms iets anders
        doen. Verder heb ik nog externe klanten geholpen met hun website mooi maken of onderhouden. Soms werdt er ook aan
        mij gevraagd of ik zou willen helpen in de studio. Dit vondt ik geen probleem en ook nog eens leuk. Taken in de
        studio waren bijvoorbeeld de camera updaten of de camera instellen.</p>
    </div>

    <div id="voorbereiding" >
        <h1>Voorbereiding / Aanpak</h1>
        <p>Ik vondt het lastig om mij te voorbereiden op een opdracht. Dit kwam omdat elke opdracht wel uniek was. Dit
        vondt ik juist leuk zo was elke opdracht weer een nieuwe uitdaging. Omdat ik het lastig vondt om mijzelf voor te
        bereiden op een opdracht. Was mijn aanpak ook niet denderend als ik een opdracht had en iemand vroeg of ik iets kon
        doen vondt ik het lastig om nee te zeggen en zo werden soms opdrachten uitgesteld voor anderen. Wel vondt ik het
        goed dat ik meteen aan de slag ging met de opgegeven opdracht. Verder had ik het idee dat mijn stagebegeleiders dit wel door
        hadden en mij ondanks deze aanpak wel uitstekend hielpen.</p>
    </div>

    <div id="eindproducten" style="margin-bottom: 60px;">
        <h1>eindproducten</h1>
        <p>Veel van mijn opdrachten waren het helpen van collega's zoals eerder beschreven. Ik heb wel een volledige opdracht
        gemaakt. Dit was een E-Mail footer generator.</p>
    </div>
</main>
<?php
include_once "navigation.php"
?>