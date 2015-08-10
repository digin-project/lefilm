<?php

$jsFile = "../scripts/app.js";
$jsOutput = "../scripts/app.min.js";

$ch = curl_init('http://closure-compiler.appspot.com/compile');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    'js_code' => file_get_contents($jsFile),
    'compilation_level' => 'SIMPLE_OPTIMIZATIONS',
    'output_format' => 'text',
    'output_info' => 'compiled_code'
)));

file_put_contents($jsOutput, curl_exec($ch));

$cssFile = array(
    "../styles/app.css",
    "../styles/film.css",
    "../styles/mobile.css",
    "../styles/footer.css"
);
$cssOutputFile = "../styles/app.min.css";

function compressCss ($code) {
    $code = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $code);
    $code = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $code);
    $code = str_replace('{ ', '{', $code);
    $code = str_replace(' }', '}', $code);
    $code = str_replace('; ', ';', $code);

    return $code;
}

$cssOutput = "";
foreach ($cssFile as $key => $file) {
    $css = file_get_contents($file);
    $cssOutput .= compressCss($css);
}

file_put_contents($cssOutputFile, $cssOutput);

exit("Success");
