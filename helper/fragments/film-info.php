<div class="col-lg-8 col-md-7">
    <div class="player-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <div id="player">
                    <i class="fa fa-play"></i>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 film-info">
                <div class="rank">
                    <i class="fa fa-star full"></i>
                    <i class="fa fa-star full"></i>
                    <i class="fa fa-star full"></i>
                    <i class="fa fa-star full"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="film-info-wrapper">
                    <p><strong>Date de sortie:</strong> <?php print $film["release"]; ?></p>
                    <p><strong>Durée:</strong> <?php print $film["time"]; ?></p>
                    <p><strong>Genre:</strong> <?php print $film["type"]; ?></p>
                    <p><strong>Nationalité:</strong> <?php print $film["country"]; ?></p>
                </div>
                <div class="film-info-wrapper">
                    <p><strong>Réalisateur:</strong> <?php print $film["realisator"]; ?></p>
                </div>
                <div class="film-info-wrapper">
                    <p><strong>Avec:</strong> <?php print $film["with"]; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="synopsis-container">
        <p><?php print $film["synopsis"]; ?></p>
    </div>
</div>
