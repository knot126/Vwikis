<?php

class UserModule implements Module {
    public function init() {
    
    }
    
    public function run() {
        DisplayUserLogin();
    }
    
    public function update() {
    
    }
    
    public function done() {
        return true;
    }
}

$User = new UserModule();

function DisplayUserLogin() {
    global $wgOutput;
    
    $wgOutput->append();
}

// wfRegisterSpecialPage("Special:Login");
