<?php

function rightBarContent() {
    global $IP;
    
    require($IP . "/data/xml/bar.xml");
}

function ThemeStart() {
    global $IP;
    
    require($IP . "/data/xml/header.xml");
}

function ThemeEnd() {
    echo "</div>";
    rightBarContent();
    echo "</div>";
    echo "</body></html>";
}

?>