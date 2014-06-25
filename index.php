<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>CRJI :: A work in progress page</title>

    <script src="js/head.js"></script>
    <script>
        head.load(
            "css/reset.css",
            "css/style.css"
        );
        head.load(
            "js/code.jquery.com/jquery-1.11.0.min.js"
//            ,"js/use.typekit.net/dqe0pjz.js"
        );
    </script>
</head>
<body>
<div id="topbar-wrapper"> <!-- begin topbar -->
    <div id="topbar">
        <div class="block overflow">
            <div class="logo">
                <a href="/">The Black Sea </a>
                &nbsp; <span class="blue"> Diving Deep into Stories</span>
            </div>
            <ul class="mainNav">
                <li><a href="#">archive</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="#">about</a></li>
            </ul>
        </div>
    </div>
</div>
<header>
    <div class="container">
        <div id="crji-logo">
            <img src="css/img/crji.png" alt="CRJI"/>
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
        <article></article>
        <article></article>
        <article></article>
    </section>
    <section></section>
</main>
<footer>
    <div class="container"></div>
</footer>


<script>
    head.ready(function(){
        try{Typekit.load();}catch(e){};
    });
</script>
</body>
</html>