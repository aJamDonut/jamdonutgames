<?php

$files = glob('pages/*.html');

function get_content($URL){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $URL);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

foreach ($files as $file) {
    $file = str_replace("pages/", "", $file);
    echo "Processing file: " . $file . "\n";
    
    // Add your code to process each file here
    $content = get_content("http://127.0.0.1:32563/jamdonutgames/preview.php?page={$file}");
    
    file_put_contents($file, $content);
}