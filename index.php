<!doctype html>
<html>
    <?php
        $title = "Lefilm.fr";
        $description = "Description index";
        require "/helper/fragments/head.php";
    ?>
    <body>

    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header>
        <?php require "/helper/fragments/top-header.php"; ?>
        <nav class="sub-nav">
            <div class="container-fluid">
                <!-- <button type="button" class="navbar-toggle collapsed burger" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-tags"></i>
                </button> -->
                <div class="toggle-burger">
                    <span data-toggle="collapse" data-target=".navbar-collapse">Tous les films</span>
                    <button type="button" class="navbar-toggle collapsed burger" data-toggle="collapse" data-target=".navbar-collapse">
                        <!-- <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> -->
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="collapse-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a class="active" href="#">Tous les films</a></li>
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Comédies</a></li>
                        <li><a href="#">Drames</a></li>
                        <li><a href="#">Français</a></li>
                        <li><a href="#">Classiques</a></li>
                        <li><a href="#">Thrillers</a></li>
                        <li><a href="#">Arts</a></li>
                        <li><a href="#">Fantastiques</a></li>
                        <li><a href="#">Horreur</a></li>
                        <li><a href="#">Documentaires</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid" id="grid">
        <div class="row row-film">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper" style="background-image: url('/images/dummy/fast_and_furious.jpg');">
                        <section class="film-infos">
                            <h2>Fast and Furious</h2>
                            <p>
                                <span>Course</span>
                                <span>2008</span>
                                <span>1h35</span>
                            </p>
                            <div class="film-play">
                                <a href="/">
                                    <button><i class="fa fa-play"></i></button>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper">
                            <section class="film-infos">
                                <h2>Oblivion</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2014</span>
                                    <span>2h41</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/interstellar.png');">
                            <section class="film-infos">
                                <h2>Interstellar</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2014</span>
                                    <span>3h02</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/quantum-of-solace.jpg');">
                            <section class="film-infos">
                                <h2>Quantum of Solace</h2>
                                <p>
                                    <span>Action</span>
                                    <span>2011</span>
                                    <span>2h23</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/ted.jpg');">
                            <section class="film-infos">
                                <h2>Ted</h2>
                                <p>
                                    <span>Comédie</span>
                                    <span>2012</span>
                                    <span>1h16</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/simpson.jpg');">
                            <section class="film-infos">
                                <h2>Les Simpsons</h2>
                                <p>
                                    <span>Aventure</span>
                                    <span>2010</span>
                                    <span>1h38</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-film">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper" style="background-image: url('/images/dummy/fast_and_furious.jpg');">
                        <section class="film-infos">
                            <h2>Fast and Furious</h2>
                            <p>
                                <span>Course</span>
                                <span>2008</span>
                                <span>1h35</span>
                            </p>
                            <div class="film-play">
                                <a href="/">
                                    <button><i class="fa fa-play"></i></button>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper">
                            <section class="film-infos">
                                <h2>Oblivion</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2014</span>
                                    <span>2h41</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/interstellar.png');">
                            <section class="film-infos">
                                <h2>Interstellar</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2014</span>
                                    <span>3h02</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/quantum-of-solace.jpg');">
                            <section class="film-infos">
                                <h2>Quantum of Solace</h2>
                                <p>
                                    <span>Action</span>
                                    <span>2011</span>
                                    <span>2h23</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/ted.jpg');">
                            <section class="film-infos">
                                <h2>Ted</h2>
                                <p>
                                    <span>Comédie</span>
                                    <span>2012</span>
                                    <span>1h16</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/simpson.jpg');">
                            <section class="film-infos">
                                <h2>Les Simpsons</h2>
                                <p>
                                    <span>Aventure</span>
                                    <span>2010</span>
                                    <span>1h38</span>
                                </p>
                                <div class="film-play">
                                    <a href="/">
                                        <button><i class="fa fa-play"></i></button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="load-more">
        <button><i class="fa fa-spinner"></i>En voir plus</button>
    </div>

    <?php require "/helper/fragments/footer.php"; ?>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','http//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-XXXXX-X');
        ga('send', 'pageview');
    </script>
    <!-- LIBRARIES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
    <script type="text/javascript">
    if ('addEventListener' in document) {
        document.addEventListener('DOMContentLoaded', function() {
            FastClick.attach(document.body);
        }, false);
    }
    </script>
    <script src="scripts/app.min.js"></script>
</body>
</html>