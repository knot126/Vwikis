<?php

$wgDatabase = NULL;

function wfConnectToDatabase() : void {
    global $wgDBserver, $wgDBuser, $wgDBpassword, $wgDatabase;
    $wgDatabase = new mysqli($wgDBserver, $wgDBuser, $wgDBpassword);
    
    if ($wgDatabase->connect_error) {
        echo "<b>Error:</b> Database connection error.<br/>";
        exit(1);
    }
}
