<?php

interface Module {
    /* It is recommended that a module implement this interface.
     * "Run" refers to the first time that a module is run, whereas
     * "Init" refers to the initialization of the module. "Update"
     * means to check for anything that may need checking for. This
     * may be called on by other modules. "Done" returns true if the
     * module has finished all its work, false if not. Please note that
     * modules are not required to implement this interface and create an
     * object with it, but it is the only way to request a place in the
     * queue. */
    public function init();
    public function run();
    public function update();
    public function done();
}

interface UnmanagedModule {
    /* Like module, but only with an update method. */
    public function update();
}

function wfRegisterAction(string $action, &$module) {
    /* Registers an action handler, which are in the format:
     *     ACTION -> MODULE CLASS
     * For example: ("test" => "TestModule") */
    global $wgActionHandlers;
    $wgActionHandlers = array_merge($wgActionHandlers, array($action => $module));
}

function wfDoAction(string $action) {
    global $wgActionHandlers;
    
    $wgActionHandlers[$action]->run();
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
        ${$update}->update();
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
            echo "<p><b>Note: </b>Loading module $module.</p>";
        }
        require_once($IP . "/modules/" . $module . "/Main.php");
    }
}
