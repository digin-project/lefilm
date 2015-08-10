<?php
    define("DEV", true);
?>

<?php
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

ob_start("sanitize_output");
?>

<head>
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    <meta name="description" content="<?php print $description; ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- LIBRARIES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css"> -->
    <!-- Il manque un truc css pour le burger, à trouver ... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php if(DEV) { ?>
        <link rel="stylesheet" href="/styles/app.css">
        <link rel="stylesheet" href="/styles/film.css">
        <link rel="stylesheet" href="/styles/footer.css">
        <link rel="stylesheet" href="/styles/mobile.css">
    <?php } else { ?>
        <link rel="stylesheet" href="/styles/app.min.css">
    <?php } ?>
</head>
