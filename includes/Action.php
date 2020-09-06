<?php 

require_once($IP . "/includes/Parser.php");

function EditPage() {

}

function UserLogin() {
    /* Function for rendering login. 
     * TODO: Make login work and move to own module. */
    require_once($IP . "/data/xml/login.xml");
}

function Register() {

}

function doAction($action) {
    switch($action) {
        case "edit":
            EditPage();
        case "login":
            UserLogin();
        case "regiser":
            Regiser();
    }
}

?>
