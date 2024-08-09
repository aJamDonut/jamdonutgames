<?php

$html = file_get_contents("template.html");

$title = "Page 1";
$anylink = "";
$content = "Hello_world";

if(isset($_GET['page'])) {
    $content = file_get_contents("pages/".$_GET['page']);
}

$html = str_replace("{content}", $content, $html);

echo $html;