<?php 

require_once($IP . "/includes/Page.php");
require_once($IP . "/includes/Database.php");
require_once($IP . "/includes/Utilities.php");

// Create global objects here
$wgOutput = new OutputPage();
$wgPage = new WikiPage();
$wgActionHandlers = array();
$wgUpdateRequests = array();

// Module suff needs to be loaded after
require_once($IP . "/includes/Module.php");

function wfRun() {
    global $wgEnableModules, $wgUpdateRequests;
    
    if ($wgEnableModules == true) {
        registerModules();
    }
    
    // TODO: This will need to be moved to wfMain()
    while (count($wgUpdateRequests) > 0) {
        wfEvaluateUpdateRequests();
    }
    
    $wgOutput->render();
}
