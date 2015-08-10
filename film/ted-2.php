<!doctype html>
<html>
    <?php
        $title = "Ted 2 - Lefilm.fr";
        $description = "Ted 2 description";
        require "../helper/fragments/head.php";
    ?>
    <body>

        <header>
            <?php require "../helper/fragments/top-header.php"; ?>
            <nav class="sub-nav sub-nav-film">
                <div class="container-fluid">
                    <small>Comédie - 2015</small>
                    <h2>Ted 2</h2>
                </div>
            </nav>
        </header>

        <div class="container-fluid" id="film">
            <div class="row" id="film-info-container">

                <?php
                    $film = array(
                        "release" => "05 août 2015",
                        "time" => "1h27m",
                        "type" => "Comédie",
                        "country" => "Américain",
                        "realisator" => "Seth MacFarlane",
                        "with" => "Mark Wahlberg, Amanda Seyfried, Seth MacFarlane",
                        "synopsis" => "Marié depuis peu, Ted et Tamy-Linn souhaitent énormément avoir des enfants. Mais pour cela, Ted doit prouver qu'il est une personne, donc un être humain, au juge."
                    );
                    require "../helper/fragments/film-info.php";
                ?>

                <?php require "../helper/fragments/other-videos.php"; ?>
            </div>
        </div>

        <?php require "../helper/fragments/footer.php"; ?>
        <?php require "../helper/fragments/script.php"; ?>
    </body>
</html>
