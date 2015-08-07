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

exit("Success");
