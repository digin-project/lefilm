<!doctype html>
<html>
    <?php
        $title = "Interstellar - Lefilm.fr";
        $description = "Interstellar description";
        require "../helper/fragments/head.php";
    ?>
    <body>

        <header>
            <?php require "../helper/fragments/top-header.php"; ?>
            <nav class="sub-nav sub-nav-film">
                <div class="container-fluid">
                    <small>Aventure - 2014</small>
                    <h2>Interstellar</h2>
                </div>
            </nav>
        </header>

        <div class="container-fluid" id="film">
            <div class="row" id="film-info-container">

                <?php
                    $film = array(
                        "release" => "05 Novembre 2014",
                        "time" => "2h49m",
                        "type" => "Science-fiction, aventure",
                        "country" => "Américain",
                        "realisator" => "Christopher Nolan",
                        "with" => "Matthew McConaughey, Anne Hathaway, Michael Caine",
                        "synopsis" => "Alors que la Terre se meurt, une équipe d'astronautes franchit un trou de ver apparu près de Saturne conduisant à une autre galaxie. Ceci dans le but d'explorer un nouveau système stellaire et d'espérer trouver une nouvelle planète habitable pour l'humanité, dans l'espoir de la sauver. Dans un futur proche, la Terre est de moins en moins accueillante pour l'humanité qui connaît une grave crise alimentaire. Une humanité tellement résignée sur son destin que les écoles enseignent désormais que les missions Apollo n'eurent pas lieu et ne servirent qu'à pousser la Russie à se ruiner en projets concurrents. Cooper, un ancien pilote de la NASA, est devenu agriculteur pour subvenir aux besoins de la population et vit dans sa ferme avec sa famille. Sa fille Murphy, âgée de dix ans, croit que leur maison est hantée par un fantôme qui tente de communiquer avec elle. C'est alors qu'ils découvrent que ce « fantôme » est en réalité une forme inconnue d'intelligence qui finit par leur envoyer un message codé au moyen d'ondes gravitationnelles qui altèrent la poussière sur le sol. Ils finissent par comprendre que ce message est écrit en langage binaire, et qu'il leur indique des coordonnées géographiques auxquelles ils décident de se rendre."
                    );
                    require "../helper/fragments/film-info.php";
                ?>

                <?php require "../helper/fragments/other-videos.php"; ?>
            </div>
        </div>

        <?php require "../helper/fragments/suggestions.php"; ?>
        <?php require "../helper/fragments/footer.php"; ?>
        <?php require "../helper/fragments/script.php"; ?>
    </body>
</html>
