<?php

function rightBarContent() {
    echo "
</div>
<div class=\"right-bar-div\">";
    echo "right bar content";
    echo "</div></div>";
}

function ThemeStart() {
    echo "
<html>
    <head>
        <title>Vwikis</title>
        <link rel=\"stylesheet\" href=\"./data/css/style.css\"/>
    </head>
    <body>
        <div class=\"full-div\">
            <div class=\"left-bar-div\">
    ";
}

function ThemeEnd() {
    rightBarContent();
    echo "</body></html>";
}

?>
