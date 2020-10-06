<?php 

class SetupModule implements Module {
    function init() {}
    
    function run() {
        SetupModuleDoSetup();
    }
    
    function update() {}
    
    function done() {
        return true;
    }
}

require_once($IP . "/modules/Setup/CreateDatabase.php");
require_once($IP . "/modules/Setup/CreateTables.php");

function SetupModuleDoSetup() {
    if (!$wgSetupFinished) {
        if ($wgDBneedsCreation) {
            wfCreateDB();
        }
        wfCreateTables();
    }
}

$Setup = new SetupModule();
wfRegisterAction("setup", $Setup);
