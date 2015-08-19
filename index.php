<!doctype html>
<html>
    <?php
        $title = "Lefilm.fr";
        $description = "Votre nouveau guide cinéma personnalisé. Retrouvez toutes les bandes annonces de vos films en streaming, les avis des spectateurs et de vos amis, les nouveautés et les films à venir, et obtenez des suggestions ciné selon vos préférences";
        require "helper/fragments/head.php";
    ?>
    <body>

    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header>
        <?php require "helper/fragments/top-header.php"; ?>
        <nav class="sub-nav">
            <div class="container-fluid __auto_padding">
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
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="collapse-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a alt="Tous les films" title="Tous les films" class="active" href="/">Tous les films</a></li>
                        <li><a alt="Action" title="Action" href="/">Action</a></li>
                        <li><a alt="Comédies" title="Comédies" href="/">Comédies</a></li>
                        <li><a alt="Drames" title="Drames" href="/">Drames</a></li>
                        <li><a alt="Français" title="Français" href="/">Français</a></li>
                        <li><a alt="Classiques" title="Classiques" href="/">Classiques</a></li>
                        <li><a alt="Thrillers" title="Thrillers" href="/">Thrillers</a></li>
                        <li><a alt="Arts" title="Arts" href="/">Arts</a></li>
                        <li><a alt="Fantastiques" title="Fantastiques" href="/">Fantastiques</a></li>
                        <li><a alt="Horreur" title="Horreur" href="/">Horreur</a></li>
                        <li><a alt="Documentaires" title="Documentaires" href="/">Documentaires</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid" id="grid">
        <div class="row row-film">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <a href="film/divergente-2.php" alt="Divergente 2" title="Divergente 2">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/divergente2.jpg');">
                            <section class="film-infos">
                                <h2>Divergente 2</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2015</span>
                                    <span>1h59</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/oblivion.jpg');">
                            <section class="film-infos">
                                <h2>Oblivion</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2014</span>
                                    <span>2h41</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <a href="film/interstellar.php" alt="Interstellar" title="Interstellar">
                            <div class="film-wrapper" style="background-image: url('/images/dummy/interstellar.jpg');">
                                <section class="film-infos">
                                    <h2>Interstellar</h2>
                                    <p>
                                        <span>Science-fiction</span>
                                        <span>2014</span>
                                        <span>3h02</span>
                                    </p>
                                    <div class="film-play">
                                        <button><i class="fa fa-play"></i></button>
                                    </div>
                                </section>
                            </div>
                        </a>
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
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <a href="film/ted-2.php" alt="Ted 2" title="Ted 2">
                            <div class="film-wrapper" style="background-image: url('/images/dummy/ted.jpg');">
                                <section class="film-infos">
                                    <h2>Ted</h2>
                                    <p>
                                        <span>Comédie</span>
                                        <span>2012</span>
                                        <span>1h16</span>
                                    </p>
                                    <div class="film-play">
                                        <button><i class="fa fa-play"></i></button>
                                    </div>
                                </section>
                            </div>
                        </a>
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
                                    <button><i class="fa fa-play"></i></button>
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
                            <button><i class="fa fa-play"></i></button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/oblivion.jpg');">
                            <section class="film-infos">
                                <h2>Oblivion</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2014</span>
                                    <span>2h41</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 film">
                <div class="film-container">
                    <div class="film-wrapper">
                        <div class="film-wrapper" style="background-image: url('/images/dummy/interstellar.jpg');">
                            <section class="film-infos">
                                <h2>Interstellar</h2>
                                <p>
                                    <span>Science-fiction</span>
                                    <span>2014</span>
                                    <span>3h02</span>
                                </p>
                                <div class="film-play">
                                    <button><i class="fa fa-play"></i></button>
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
                                    <button><i class="fa fa-play"></i></button>
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
                                    <button><i class="fa fa-play"></i></button>
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
                                    <button><i class="fa fa-play"></i></button>
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

    <?php require "helper/fragments/cookies.php"; ?>
    <?php require "helper/fragments/footer.php"; ?>
    <?php require "helper/fragments/script.php"; ?>
</body>
</html>
