<?php

function rightBarConent() {
    echo "
</div>
<div>

</div>";
}

function ThemeStart() {
    echo "
<html>
    <head>
        <title>Vwikis</title>
        <link rel=\"stylesheet\" href=\"./assets/css/style.css\"/>
    </head>
    <body>
        <div>
    ";
}

function ThemeEnd() {
    rightBarContent();
    echo "</body></html>";
}

?>
