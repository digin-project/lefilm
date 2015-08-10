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
        <div class="recommendations">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="clear"></div>
                        <h2>Divergente, toute la sage !</h2>
                        <div class="film films-form-right">
                            <div class="first">
                                <div class="image" style="background-image:url('/images/dummy/divergente.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/divergente2.jpg');"><div class="internShadow"></div></div>
                            </div>
                        </div>
                     </div>
                    <div class="col-lg-5">
                        <div class="clear"></div>
                        <h2>Prochainement dans les salles</h2>
                        <div class="film films-form-left">
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/amy.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/insidious3.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/minions.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/magicmike.jpg');"><div class="internShadow"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="clear"></div>
                        <h3>Les sorties de la semaine</h3>
                        <div class="slider">
                            <div class="film films-form-right show">
                                <div class="first">
                                    <div class="image" style="background-image:url('/images/dummy/lesprofs2.jpg');"><div class="internShadow"></div></div>
                                </div>
                                <div>
                                    <div class="image" style="background-image:url('/images/dummy/terminator.jpg');"><div class="internShadow"></div></div>
                                </div>
                                <div class="last">
                                    <div class="image" style="background-image:url('/images/dummy/taleoftales.jpg');"><div class="internShadow"></div></div>
                                </div>
                            </div>
                            <div class="film films-form-right hide">
                                <div class="first">
                                    <div class="image" style="background-image:url('/images/dummy/lesprofs2.jpg');"><div class="internShadow"></div></div>
                                </div>
                                <div>
                                    <div class="image" style="background-image:url('/images/dummy/terminator.jpg');"><div class="internShadow"></div></div>
                                </div>
                                <div class="last">
                                    <div class="image" style="background-image:url('/images/dummy/taleoftales.jpg');"><div class="internShadow"></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="actions">
                            <a href="" class="see-more">En voir plus ...</a>

                            <div class="controls">
                                <a href="javascript:prev();"><i class="fa fa-arrow-circle-left"></i></a>
                                <ul>
                                    <li><a href="javascript:changeThumb(0);" class="active"><i class="fa fa-circle"></i></i></a></li>
                                    <li><a href="javascript:changeThumb(1);"><i class="fa fa-circle"></i></a></li>
                                </ul>
                                <a href="javascript:next();"><i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="clear"></div>
                        <h3>Avec les mêmes acteurs</h3>
                        
                        <div class="film films-form-left">
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/amy.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/insidious3.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/horsdutemps.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/magicmike.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/holiday.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/tattoo.jpg');"><div class="internShadow"></div></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="actions">

                            <div class="controls">
                                <a href="javascript:prev();"><i class="fa fa-arrow-circle-left"></i></a>
                                <ul>
                                    <li><a href="javascript:changeThumb(0);" class="active"><i class="fa fa-circle"></i></i></a></li>
                                    <li><a href="javascript:changeThumb(1);"><i class="fa fa-circle"></i></a></li>
                                </ul>
                                <a href="javascript:next();"><i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="clear"></div>
                        <h3>Vous aimez ce réalisateur ? Vous aimerez aussi :</h3>    
                        <div class="slider">
                            <div class="film films-form-right show">
                                <div class="first">
                                    <div class="image" style="background-image:url('/images/dummy/flightplan.jpg');"><div class="internShadow"></div></div>
                                </div>
                                <div>
                                    <div class="image" style="background-image:url('/images/dummy/tattoo.jpg');"><div class="internShadow"></div></div>
                                </div>
                                <div class="last">
                                    <div class="image" style="background-image:url('/images/dummy/horsdutemps.jpg');"><div class="internShadow"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="clear"></div>
                        <h3>On parie que vous aimez aussi</h3>
                        <div class="film films-form-left">
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/hamlet.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/3royaumes.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/holiday.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/holdup.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/divergente.jpg');"><div class="internShadow"></div></div>
                            </div>
                            <div>
                                <div class="image" style="background-image:url('/images/dummy/magicmike.jpg');"><div class="internShadow"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require "../helper/fragments/footer.php"; ?>
        <?php require "../helper/fragments/script.php"; ?>
    </body>
</html>
