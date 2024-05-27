<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&family=Sofia+Sans+Condensed:wght@200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
<?php

$servername = "db";
$username = "root";
$password = "root";
$dbname = "cloud_visits";

date_default_timezone_set('Europe/Brussels');
$current_time = date("Y-m-d H:i:s");

$mysqli = new mysqli($servername, $username, $password, $dbname);

CREATE TABLE IF NOT EXISTS visitors (
    id INT_AUTO_INCREMENT PRIMARY KEY,
    visited TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

$stmt = $mysqli->prepare("INSERT INTO visitors (visited) VALUES (?)");
$stmt->bind_param("s", $current_time);

$stmt->execute();

$stmt->close();
$mysqli->close();

?>
    <header>
        <h1>Welkom op Computer Games. <br> Niveau omhoog, games binnen handbereik!</h1>
        <img src="/Assets/images/logo.png" alt="logo" id="logo">
        <nav>
            <a href="index.html">Home</a>
            <p>-</p>
            <a href="shop.html">Shop</a>
            <p>-</p>
            <a href="contact.html">Contact</a>
            <p>-</p>
            <a href="klanten.html">Klanten</a>
            <form action="#">
                <label for="zoekbalk"></label>
                <input type="text" name="zoekbalk" id="zoekbalk" placeholder="zoeken">
                <label for="button"></label>
                <input type="submit" value="zoeken" id="zoekknop">
            </form>
        </nav>
    </header>
    <main id="home">
        <aside id="korting">
            <a href="productBloodborne.html">
                <h2>Korting!</h2><br>
                <img src="Assets/images/Bloodborne.jpg" alt="Bloodborne" class="gamefoto">
                <h3>Bloodborne</h3>
                <p><strong>35%</p>
                <p id="kortingprijs">50€</p>
                <p>32.50€</p></strong>
            </a>
        </aside>
        <article id="nieuws">
            <h2>GameNieuws!</h2><br>
            <section id="nieuwsp">
                <p>elden ring is nu beschikbaar!<br><strong>bestel de game hier!</strong></p>
                <p>call of duty zijn nieuwste update is sinds 30/09/2023 uit!<br><strong>update nu!</strong></p>
                <p>binnekort verkrijgbaar:<br> <strong>elder scrolls 6</strong></p>
            </section>
        </article>
        <section id="bestsellers">
            <h1 id="hoofdingbestsellers">Top 3 bestsellers!</h1>
            <section class="bestseller"><a href="productEldenring.html"><img src="Assets/images/EldenRing.jpg"
                        alt="eldenring" class="gamefoto">
                    <h2>EldenRing</h2>
                    <p>60€</p>
                    <p>adventure - action</p>
                </a>
            </section>
            <section class="bestseller"><a href="productRemnant.html"><img src="Assets/images/Remnant.jpg" alt="remnant"
                        class="gamefoto">
                    <h2>Remnant 2</h2>
                    <p>50€</p>
                    <p>adventure - action</p>
                </a>
            </section>
            <section class="bestseller"><a href="codmw2.html"><img src="Assets/images/CodMw2.jpg" alt="mw2"
                        class="gamefoto">
                    <h2>Call of duty mw2</h2>
                    <p>60€</p>
                    <p>fps - action</p>
                </a>
            </section>
        </section>
        <section id="about">
            <h1>Over</h1>
            <img src="Assets/images/fotosvw.jpg" alt="footer" id="portrait">
            <p id="p1">Stap binnen in een wereld vol avontuur en eindeloze mogelijkheden. Welkom bij onze
                gamewebshop, waar passie voor gaming tot leven komt. Ontdek een uitgebreide collectie van de
                nieuwste
                blockbusters, tijdloze klassiekers en innovatieve accessoires. Of je nu een doorgewinterde gamer
                bent of
                net begint aan je reis, hier vind je alles om je gamingervaring naar een hoger niveau te tillen.</p>
            <p id="p2">Welkom bij Computer Games - waar gamingdromen tot leven komen! Stap binnen in onze digitale
                wereld boordevol mogelijkheden en avonturen. We zijn verheugd om jou te verwelkomen in onze
                gemeenschap
                van gepassioneerde gamers. Of je nu een doorgewinterde professional bent of net begint aan je reis
                in de
                gamingwereld, bij ons vind je alles wat je nodig hebt.
                Ontdek een uitgebreide selectie van de nieuwste en meest gewilde games voor al je favoriete
                platforms.
                Van spannende RPG's tot razendsnelle actiespellen en nostalgische klassiekers, we hebben het
                allemaal.
                Maar dat is nog niet alles! We bieden ook een scala aan hoogwaardige gaming-accessoires om je
                ervaring
                naar een hoger niveau te tillen.
                Ons toegewijde team staat klaar om je te helpen bij elke stap van je gamingreis. Of je nu op zoek
                bent
                naar advies, support of gewoon wilt delen in de opwinding van de gaminggemeenschap, wij zijn er voor
                jou.
                Dus, pak je controller, zet je schrap voor avontuur en duik in een wereld vol plezier en vermaak.
                Het
                begint hier, bij Computer Games. We kijken ernaar uit om samen met jou de grenzeloze wereld van
                gaming
                te verkennen!</p>
            <p id="p3">Bij Computer Games streven we naar uitmuntendheid in elk aspect van onze dienstverlening. We
                geloven dat geweldige gaming niet eindigt bij de aankoop, dus bieden we ook uitgebreide
                ondersteuning en
                advies. Ons toegewijde team staat altijd voor je klaar, of het nu gaat om technische vragen,
                aanbevelingen voor nieuwe titels, of gewoon een goed gesprek over je favoriete games.</p>
        </section>
    </main>
    <footer>
        <h2>Gemaakt door:<br>Steff Van Weereld</h2>
        <p>bedankt om een kijkje te nemen.</p>
    </footer>
    <script>
        // Function to send a request to record visit date
        function recordVisit(){
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "record_visit.php", true);
            xhr.send();
        }

        // Call the function when page loads
        window.onload = function() {
            recordVisit();
        };
    </script>

</body>

</html>
