<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>CRJI :: The Black Sea</title>

    <script src="js/head.js"></script>
    <script>
        head.load(
            "css/reset.css",
            "css/typekit.css",
            "css/style.css"
        );
        head.load(
            "js/jquery-1.11.0.min.js"
            ,"//use.typekit.net/dqe0pjz.js"
        );
    </script>
</head>
<body>
<div id="topbar-wrapper"> <!-- begin topbar -->
    <div id="topbar">
        <div class="block overflow">
            <div class="logo">
                <a href="http://theblacksea.eu">The Black Sea </a>
                &nbsp; <span class="blue"> Diving Deep into Stories</span>
            </div>
            <ul class="mainNav">
                <li><a href="http://theblacksea.eu/?idT=86&idC=86">blog</a></li>
                <li><a href="http://theblacksea.eu/?idT=88&idC=88">stories</a></li>
                <li><a href="http://theblacksea.eu/?idT=3&idC=3">about</a></li>
            </ul>
        </div>
    </div>
</div>
<header>
    <div class="container">
        <div id="crji-logo">
            <a href="http://crji.org">
                <img src="css/img/crji.png" alt="CRJI"/>
            </a>
            <div class="info">
                <p>Your Foreign Investigative Desk for hire: <br/>
                    reporting, pictures & code.</p>
                <p>crji@theblacksea.eu <br/>
                    T: +40 740 309 073</p>
            </div>
        </div>
        <div id="header-text">
            <p>
                The Romanian Center for Investigative Journalism's mission is to
                deconstruct and expose corrupt structures of power and to create an
                interdisciplinary community of collectors and disseminators of relevant
                and verifiable information. We alternate investigative journalism with
                recording the color of daily life.
            </p>
        </div>
    </div>
</header>
<main>
    <section>
        <article>
            <h1>Skills:</h1>
            <p>
                Research, photo journalism, fixing, native
                English editing & translation, code laboratory,
                information design, illustration, sound, video.
            </p>
        </article>
        <article>
            <h1>Areas of Reporting:</h1>
            <p>
                We cover the Black Sea Region through our
                investigations as well as through
                TheBlackSea.eu, our online magazine. We
                experiment through TheSponge.eu, our open
                media laboratory.
            </p>
        </article>
        <article>
            <h1>Outlets that have featured our work:</h1>
            <p>
                The Guardian, NY Times, Boston Globe,
                Reuters, Toronto Star, ABC, CBC (CA), BBC,
                Channel 4 (UK), ITV (UK), ZDF (DE), ARD
                (DE), NRD (DE), Canal+, Vedomosti, Novaya
                Gazeta (RU), Kyiv Post, Interview (ES),
                Deutsche Welle, Sat 1 (DE), Die Zeit (DE),
                Sueddeutsche Zeitung (DE), Panos Pictures
                (UK), ICIJ, Politiken (DK), Le Soir (BE),
                Nieman Reports, L’Espresso (IT), Spiegel TV
                (DE), BIRN, OCCRP, Scoop, Eu Observer, Radio
                Free Europe, 24chasa (BG), Center for
                Investigative Reporting (HR), HETQ (AM),
                Rustavi TV (GE), Ta Nea (GR), Berliner Gazette
                (DE), Sunday Times (UK).
            </p>
        </article>
        <hr class="dash"/>
        <article>
            <h1>Services and Solutions:</h1>
        </article>
        <article>
            <h1>Story Production Assistance</h1>
            <p>
                Translation, breaking news reporting, photo,
                video, multi-media work.
            </p>
        </article>
        <article>
            <h1>Research:</h1>
            <p>
                Governemnt, database manipulation,
                Customized reporting.
            </p>
        </article>
        <article>
            <h1>Fee-Based Investigations:</h1>
            <p>
                Investigations on per-story basis, subscription
                service for yearly stories.
            </p>
        </article>
        <hr class="dash"/>
        <article>
            <h1>Awards</h1>
            <p>
                In 2014 we were shortlisted for the
                <a href="http://www.europeanpressprize.com/winners/shortlist-2013/">
                Innovation Award at the Euwopean Press Prize</a>.
            </p>
            <p>
                We are part of the team winning a few awards on
                the ICIJ "Offshore Leaks" project:
                <a href="http://ire.org/awards/ire-awards/winners/2013-ire-award-winners/#.Uz--JMd4zR0">
                IRE</a> and
                <a href="http://www.shawards.org/default.aspx">
                Scripps Howard</a>.
            </p>
            <p>
                Our members also won in the past:
                <a href="http://www.ire.org/blog/ire-news/2009/03/31/2008-ire-award-winners-announced/">
                IRE Tom Renner</a>,
                <a href="https://www.opcofamerica.org/awards/2008-opc-award-winners">
                Overseas Press Club</a>,
                <a href="http://www.icij.org/awards#w2011">
                Daniel Pearl Award</a>,
                <a href="http://gijn.org/2011/04/04/gijn-awards-top-investigators/">
                Global Shining Light Award</a>.
            </p>
            <p>
                Fellowships:
                <a href="http://www.nieman.harvard.edu/Microsites/2010AnnualReport/ClassOf2011.aspx">
                Nieman Fellowship at Harvard</a> and
                <a href="http://knight.stanford.edu/fellows/class-of-2010/">
                Knight Journalism Fellowship at Stanford</a>.
            </p>
        </article>
    </section>
    <section>
        <?php
        $testimonials = json_decode(file_get_contents('testimonials/testimonials.json'));
        $images = array_slice(scandir('images'), 2);
        shuffle($images) && shuffle($testimonials);
        $i = 0;
        foreach (array_slice($images, 0, 8) as $image):
        ?>
        <article>
            <img src="images/<?= $image ?>" alt="1"/>
            <div class="img-overlay">
                <h1><?= $testimonials[$i]->quote ?></h1>
                <hr class="dash"/>
                <p><?= $testimonials[$i]->person ?></p>
                <span class="copyright">© Petrut Calinescu</span>
            </div>
        </article>
        <?php $i++; endforeach; ?>
    </section>
</main>
<footer>
    <div class="footer-top"></div>
</footer>


<script>
    head.ready(function(){
        try{Typekit.load();}catch(e){};
    });
</script>
</body>
</html>