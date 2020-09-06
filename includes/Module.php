<?php

class Module {
    /* Work in progress Module class */
    private $mName;
    private $mType;
    private $mIsLoaded;
    
    function load() {
        
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

?>