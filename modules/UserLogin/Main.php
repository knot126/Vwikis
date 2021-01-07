<?php

class UserModule implements UnmanagedModule {
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

$UserLogin = new UserModule();
wfRegisterAction("login", $UserLogin);

function DisplayUserLogin() {
    global $IP, $wgOutput, $wgPage;
    
    $loginFormPath = $IP . "/modules/UserLogin/forms/login.xml";
    
    $loginFormContent = fopen($loginFormPath, "r");
    $wgPage->append(fread($loginFormContent, filesize($loginFormPath)));
    
    fclose($loginFormContent);
}

// wfRegisterSpecialPage("Special:Login");
