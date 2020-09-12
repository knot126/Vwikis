<?php

interface Module {
    /* It is recommended that a module implement this interface.
     * "Run" refers to the first time that a module is run, whereas
     * "Init" refers to the initialization of the module. "Update"
     * means to check for anything that may need checking for. This
     * may be called on by other modules. */
    public function init();
    public function run();
    public function update();
}

interface UnmanagedModule {
    /* Like module, but only with an update method. */
    public function update();
}

function wfRegisterAction(array $entry) {
    /* Registers an action handler */
    global $wgActionHandlers;
    $wgActionHandlers = array_merge($wgActionHandlers, $entry);
}

function wfRequestUpdate(array $entry) {
    /* Adds an update to the update queue. The entry paramater is the name of
     * the implemented module interface. */
    global $wgUpdateRequests;
    $wgUpdateRequests = array_merge($wgUpdateRequests, $entry);
}

function wfEvaluateUpdateRequests() {
    /* Evaluates all requests for updates. */
    global $wgUpdateRequests, $wgEnabledModules;
    
    foreach ($wgUpdateRequests as $update) {
        // TODO: If possible, DO NOT rely on eval
        // eval($update)
        $$update->update();
        array_shift($wgUpdateRequests);
    }
}

function wfModuleIsLoaded(string $module) {
    global $wgEnabledModules;
    
    if (in_array($module, $wgEnabledModules)) {
        return true;
    } else {
        return false;
    }
}

function registerModules() {
    /* Function to register modules by looping through them and running their 
     * Main.php file. */
    global $wgEnabledModules, $IP, $wgDebugMessages;
    
    foreach($wgEnabledModules as $module) {
        if ($wgDebugMessages) {
            echo "<b>Note: </b>Loading module $module.";
        }
        require_once($IP . "/modules/" . $module . "/Main.php");
    }
}
