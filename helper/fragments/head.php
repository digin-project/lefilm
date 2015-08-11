<?php
define("DEV", true);

function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}

if(!DEV) {
    ob_start("sanitize_output");
}
?>

<head>
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    <meta name="description" content="<?php print $description; ?>">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#b9352a">

    <!-- Facebook meta tags -->
    <meta property="og:title" content="<?php print $title; ?>">
    <meta property="og:image" content="http://lefilm.digin.fr/images/lefilmfr.png">
    <meta property="og:url" content="http://lefilm.digin.fr/">
    <meta property="og:site_name" content="Lefilm.fr">
    <meta property="og:description" content="<?php print $description; ?>">

    <!-- Twitter meta tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php print $title; ?>">
    <meta name="twitter:url" content="http://lefilm.digin.fr/">
    <meta name="twitter:image" content="http://lefilm.digin.fr/images/lefilmfr.png">
    <meta name="twitter:description" content="<?php print $description; ?>">

    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">

    <!-- LIBRARIES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css"> -->
    <!-- Il manque un truc css pour le burger, à trouver ... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <?php if(DEV) { ?>
    <link rel="stylesheet" href="/styles/app.css" type="text/css">
    <link rel="stylesheet" href="/styles/film.css" type="text/css">
    <link rel="stylesheet" href="/styles/footer.css" type="text/css">
    <link rel="stylesheet" href="/styles/mobile.css" type="text/css">
    <?php } else { ?>
    <link rel="stylesheet" href="/styles/app.min.css">
    <?php } ?>
</head>
