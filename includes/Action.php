<?php 

require_once($IP . "/includes/Parser.php");

function editPage(string $page) {

}

function userLogin() {
     /* TODO: Make login work and move to own module. */
}

function registerUser() {

}

function doAction(string $action) {
    switch($action) {
        case "login":
            userLogin();
        case "regiser":
            registerUser();
    }
}

?>
