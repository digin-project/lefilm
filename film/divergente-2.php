<!doctype html>
<html>
    <?php
        $title = "Divergente 2 : L'insurrection - Lefilm.fr";
        $description = "Divergente 2 - L'insurrection : le Film Entier en Haute Qualité  &amp; 100% Légal avec lefilm.fr Réalisé par Robert Schwentke.";
        require "../helper/fragments/head.php";
    ?>
    <body>

        <header>
            <?php require "../helper/fragments/top-header.php"; ?>
            <nav class="sub-nav sub-nav-film">
                <div class="container-fluid">
                    <small>Action - 2015</small>
                    <h2>Divergente 2 : L'insurrection</h2>
                </div>
            </nav>
        </header>

        <div class="container-fluid" id="film">
            <div class="row" id="film-info-container">

                <?php
                    $film = array(
                        "release" => "18 Mars 2015",
                        "time" => "1h59m",
                        "type" => "Science-fiction, Action",
                        "country" => "Américain",
                        "realisator" => "Robert Schwentke",
                        "with" => "Shailene Woodley, Theo James, Octavia Spencer",
                        "synopsis" => "Dans un monde post-apocalyptique où la société a été réorganisée autour de 5 factions (Audacieux, Érudits, Altruistes, Sincères et Fraternels), Tris a mis au jour un complot mené par la faction dominante, les Érudits, dirigés par Jeanine. Abandonnant une ville à feu et à sang, à la recherche d’alliés, Tris et Quatre sont désormais traqués par les autorités. Jeanine décrète la loi martiale pour anéantir les Divergents, tandis que la guerre entre les factions prend de l’ampleur. Pourquoi les Divergents sont-ils une menace pour la société ? La découverte d’un objet mystérieux, hérité du passé, pourrait bien bouleverser l’équilibre des forces…"
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
