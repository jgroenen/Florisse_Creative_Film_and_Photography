<!DOCTYPE html>
<html>
    <head>
        <meta name='viewport' content='width=320,initial-scale=1,user-scalable=0'>
        
        <link rel='image_src' href='/img/logo-zwart-800-sq.png'/>
        <link rel='shortcut icon' type='image/png' href='/img/favicon.jpg'>
        
        <title>Florisse Creative</title>
        <meta name="title" content="Florisse Creative | Videopresentatie en animatie">
        <meta name="description" content="Uw bedrijf goed in beeld met onze 2-minuut videopresentaties voor MKB.">
        <meta name="keywords" content="florisse, creative, video, videopresentatie, bedrijfspresentatie, drone, time-lapse, 360 graden, special effects, 3D, animatie, logo, ontwerp, fotoreportage">
        
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="main.css">
        
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-74773502-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <img src="/img/logo-zwart-800.png" style="margin: 40px 40px 24px; max-width: 60%">
            </div>
        </header>
        <main class="payoff">
            <div class="wrapper">
                <h1>Uw&nbsp;bedrijf goed in&nbsp;beeld</h1>
                <h2>met&nbsp;onze&nbsp;2-minuut <span>videopresentaties</span> voor&nbsp;MKB.</h2>
            </div>
        </main>
        <main class="video">
            <div class="wrapper">
                <section class="video">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Nm9v4h8pyK8" frameborder="0" allowfullscreen></iframe>
                </section>
            </div>
        </main>
        <main class="diensten">
            <div class="wrapper">
                <!--<h2>Wat wij doen</h2>-->
                <ul>
                    <li>Drone video</li>
                    <li>Time-lapse</li>
                    <li>360 graden</li>
                    <li>Special effects</li>
                </ul>
                <ul>
                    <!-- voice over -->
                    <!-- tekst en geluid -->
                    <li>3D animatie</li>
                    <li>Logo-ontwerp</li>
                    <li>Fotoreportage</li>
                    <li>... en meer</li>
                </ul>
            </div>
        </main>
        <main class="voorbeelden">
            <div class="wrapper">
                <section>
                    <div class="youtube-video">
                        <iframe width="396" height="200" src="https://www.youtube.com/embed/QK34Q_xwtmI"></iframe>
                    </div>
                    <h2>Drone video en time-lapse</h2>
                    <p>Met drone video en time-lapse opnames ontstaat een dynamisch beeld van uw bedrijf. Meer perspectief en overzicht zorgen voor een goed beeld van al uw activiteiten. Uitermate geschikt voor het tonen van buitenlocaties, bouwprojecten en productieprocessen.</p>
                    <p><a target="_blank" href="https://www.youtube.com/user/EmilFlorisse">Meer voorbeelden &gt;</a></p>
                    <div class="clear"></div>
                </section>
                <section>
                    <div class="youtube-video">
                        <iframe width="396" height="200" src="https://www.youtube.com/embed/nqO4ldByjtk"></iframe>
                    </div>
                    <h2>Logo ontwerp en 3D animatie</h2>
                    <p>Uw merk gaat meer leven door video-animatie en 3D plaatsing van uw logo in video's en op uw website. Ook als introductie bij uw video-presentaties van producten en diensten, voor online gebruik en tijdens bedrijfspresentaties.</p>
                    <p><a target="_blank" href="https://www.youtube.com/user/EmilFlorisse">Meer voorbeelden &gt;</a></p>
                    <div class="clear"></div>
                </section>
            </div>
        </main>
        <main class="cta">
            <div class="wrapper">
                <section>
                    <h2>Uw bedrijf ook krachtig en bondig presenteren?<br>Specifieke wensen?</h2>
                    <a href="tel:31620097866"><button>Bel direct</button></a>
                </section>
            </div>
        </main>
        <main class="formulier">
            <div class="wrapper">
                <section>
<?php

if ("POST" === $_SERVER["REQUEST_METHOD"]) {
	mail("info@florisse.nl", "Een bericht vanuit florisse.nl", print_r($_POST, true));
?>
                    <h2>Bedankt voor uw bericht.</h2>
                    <h3>Wij nemen zo spoedig mogelijk contact met u op.</h3>
<?php

} else {

?>
                    <h2>... of laat uw gegevens achter.</h2>
                    <h3>Wij nemen zo spoedig mogelijk contact met u op.</h3>
                    <form method="post">
                        <div>
                            <label for="bedrijf">Bedrijfsnaam:</label>
                            <input type="text" name="bedrijf" placeholder="bijv. Florisse Creative">
                        </div>
                        <div>
                            <label for="contact">Contactpersoon:</label>
                            <input type="text" name="contact" placeholder="bijv. Emil Florisse">
                        </div>
                        <div>
                            <label for="telefoon">Telefoonnummer:</label>
                            <input type="text" name="telefoon" placeholder="bijv. 06 12345678">
                        </div>
                        <div>
                            <label for="email">E-mail:</label>
                            <input type="text" name="email" placeholder="bijv. emil@florisse.nl">
                        </div>
                        <div>
                            <label for="vraag">Vraag:</label>
                            <textarea name="vraag" style="width: 295px; height: 100px; vertical-align: top"></textarea>
                        </div>
                        <div>
                            <br>
                            <label></label>
                            <input type="submit" value="Neem contact op">
                        </div>
                    </form>
<?php } ?>
                </section>
            </div>
        </main>
        <footer>
            <div class="wrapper">
                <section>
                    <div class="col">
                        <h1>Florisse Creative</h1>
                    </div>
                    <div class="col">
                        Betuwepad 8<br>
                        5691 LN Son en Breugel<br>
                        (nabij Eindhoven)
                    </div>
                    <div class="col">
                        <p>
                            <a href="tel:+31620097866">+331620097866</a><br>
                        </p>
                        <p>
                            <a href="http://www.florisse.nl">www.florisse.nl</a><br>
                            <a href="mailto:info@florisse.nl">info@florisse.nl</a>
                        </p>
                    </div>
                </section>
            </div>
        </footer>
    </body>
</html>
