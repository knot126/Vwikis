<?php 

require_once($IP . "/includes/Page.php");
require_once($IP . "/includes/Database.php");
require_once($IP . "/includes/Utilities.php");

// Create global objects here
$wgOutput = new OutputPage();
$wgPage = new WikiPage();
$wgActionHandlers = array();
$wgUpdateRequests = array();
$wgSpecialPages = array();

// Module suff needs to be loaded after
require_once($IP . "/includes/Module.php");

function wfRun() {
    global $wgEnableModules, $wgUpdateRequests, $wgOutput;
    
    if ($wgEnableModules == true) {
        registerModules();
    }
    
    $action = wfGet("action");
    if ($action != "read") {
        wfDoAction($action);
    }
    wfDoAction("read");
    
    // TODO: This will need to be moved to wfMain()
    while (count($wgUpdateRequests) > 0) {
        wfEvaluateUpdateRequests();
    }
    
    $wgOutput->render();
}
