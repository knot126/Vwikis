<?php 

require_once($IP . "/includes/Module.php");
require_once($IP . "/includes/Article.php");

function run() {
    global $wgEnableModules;
    
    if ($wgEnableModules == true) {
        registerModules();
    }
    renderPage();
}
?>
