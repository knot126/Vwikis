<?php 

require_once($IP . "/includes/PageOutput.php");
// require_once($IP . "/includes/Article.php");

// Create global objects here
$wgOutput = new OutputPage();
$wgActionHandlers = array();
$wgUpdateRequests = array();

// Module suff needs to be loaded after
require_once($IP . "/includes/Module.php");

function wfRun() {
    global $wgEnableModules, $wgUpdateRequests;
    
    if ($wgEnableModules == true) {
        registerModules();
    }
    
    while (count($wgUpdateRequests) > 0) {
        wfEvaluateUpdateRequests();
    }
    
    $wgOutput->render();
}
