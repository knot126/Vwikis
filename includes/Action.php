<?php 

require_once($IP . "/includes/Request.php");

function editPage(string $page) {

}

function wfUserLogin() {
    /* TODO: Make login work and move to own module. */
    if (!array_key_exists("username", $_POST) || !array_key_exists("password", $_POST)) {
        echo "<b>Error:</b> No login information has been provided.<br>";
        exit(1);
    }
    
    $uUser = wfGetFromPost("username");
    $uPassword = wfGetFromPost("password");
    
    if (!preg_match("/^[a-zA-Z ]*$/", $uUser)) {
        echo "<b>Error:</b> This user name is not a valid username.<br>";
        exit(1);
    }
    
    echo "Your username is: $uUser<br>";
    echo "Your password is: $uPassword<br>";
}

function wfRegisterUser() {

}

function doAction(string $action) {
    switch($action) {
        case "login":
            wfUserLogin();
        case "regiser":
            wfRegisterUser();
    }
}
