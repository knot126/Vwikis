<?php 

require_once($IP . "/includes/PageOutput.php");
require_once($IP . "/includes/Module.php");
// require_once($IP . "/includes/Article.php");

// Create global objects here
$wgOutput = new OutputPage();

function wfRun() {
    global $wgEnableModules;
    
    if ($wgEnableModules == true) {
        registerModules();
        invokeModules();
    }
    
    $wgOutput->render();
}
