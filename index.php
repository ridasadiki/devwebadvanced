<!DOCTYPE HTML>
<html>
<head>
    <title>Strongly Typed by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="homepage is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <section id="header">
            <div class="container">
                <h1 id="logo"><a href="index.html">Strongly Typed</a></h1>
                <p>A responsive HTML5 site template. Manufactured by HTML5 UP.</p>
                <nav id="nav">
                    <ul>
                        <li><a class="icon solid fa-home" href="index.html"><span>Introduction</span></a></li>
                        <li>
                            <a href="#" class="icon fa-chart-bar"><span>Dropdown</span></a>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Magna phasellus</a></li>
                                <li><a href="#">Etiam dolore nisl</a></li>
                                <li>
                                    <a href="#">Phasellus consequat</a>
                                    <ul>
                                        <li><a href="#">Magna phasellus</a></li>
                                        <li><a href="#">Etiam dolore nisl</a></li>
                                        <li><a href="#">Phasellus consequat</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Veroeros feugiat</a></li>
                            </ul>
                        </li>
                        <li><a class="icon solid fa-cog" href="left-sidebar.html"><span>Left Sidebar</span></a></li>
                        <li><a class="icon solid fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
                        <li><a class="icon solid fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Features -->
        <section id="features">
            <div class="container">
                <header>
                    <h2>Gentlemen, behold! This is <strong>Strongly Typed</strong>!</h2>
                </header>
                <div class="row aln-center">
                    <div class="col-4 col-6-medium col-12-small">
                        <section>
                            <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                            <header>
                                <h3>Okay, so what is this?</h3>
                            </header>
                            <p>This is <strong>Strongly Typed</strong>, a free, fully responsive site template
                            by <a href="http://html5up.net">HTML5 UP</a>. Free for personal and commercial use under the
                            <a href="http://html5up.net/license">CCA 3.0 license</a>.</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!-- Server Info -->
        <section id="server-info">
            <div class="container">
                <header>
                    <h3>Informations sur le serveur</h3>
                </header>
                <ul>
                    <li>Nom du script : <?php echo $_SERVER['PHP_SELF']; ?></li>
                    <li>Nom du serveur : <?php echo $_SERVER['SERVER_NAME']; ?></li>
                    <li>Adresse IP du serveur : <?php echo $_SERVER['SERVER_ADDR']; ?></li>
                    <li>Adresse IP du visiteur : <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
                </ul>
            </div>
        </section>

        <!-- Footer -->
        <section id="footer">
    <div class="container">
        <header>
            <h2>Questions ou commentaires ? <strong>Contactez-nous :</strong></h2>
        </header>
        <form method="POST" action="sendmail.php" class="bg-light p-5 contact-form">
            <div class="form-group">
                <input name="prenom" required type="text" class="form-control" placeholder="Prénom">
            </div>
            <div class="form-group">
                <input name="email" required type="email" class="form-control" placeholder="Votre Email">
            </div>
            <div class="form-group">
                <textarea name="message" required cols="30" rows="7" class="form-control" placeholder="Votre Message"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary py-3 px-5" type="submit" name="send_email">Envoyer un email</button>
            </div>
        </form>
    </div>
</section>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
