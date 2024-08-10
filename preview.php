<?php

/**
 * Takes in a file name e.g. "about-us.html"
 * Removes the file extension
 * Replaces dashes with spaces
 * Puts the first character of each word in the name to uppsercase, e.g. About Us
 */
function clean($filename) {
    // Remove the file extension
    $nameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
    
    // Replace dashes with spaces
    $nameWithSpaces = str_replace('-', ' ', $nameWithoutExtension);
    
    // Capitalize the first letter of each word
    $newname = ucwords($nameWithSpaces);
    
    return $newname;
}

$html = file_get_contents("template.html");

$title = "Page 1";
$anylink = "";
$content = "Hello_world";

if(isset($_GET['page'])) {
    $title = 
    $content = file_get_contents("pages/".$_GET['page']);
}

$html = str_replace("{content}", $content, $html);
$html = str_replace("{title}", clean($_GET['page']), $html);

echo $html;