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
        <div class="crji-logo">
            <img src="css/img/crji.png" alt="CRJI"/>
        </div>
        <div class="info">
            <p>Your Foreign Investigative Desk for hire: <br/>
            reporting, pictures & code.</p>
            <p>crji@theblacksea.eu <br/>
            T: +40 740 309 073</p>
        </div>
        <div id="header-text">
            <p></p>
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