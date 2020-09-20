<?php

function wfCreateDB() {
    /* Create the database for the first time.
     * TODO: This should check if the database already exsists. */
    global $wgDatabase;
    
    $query = "CREATE DATABASE ;" . $wgDBname;

    $querySuccess = $wgDatabase->query($query);

    if ($querySuccess === FALSE) {
        echo "<b>Error:</b> Could not create database.";
        exit(1);
    } else {
        global $wgPage->append("<div style=\"backgorund: pink; font-weight: bold;\">The database was created successfully. Please make sure to set the <code>\$wgSetupFinished</code> varible to some true value, otherwise the database will be set up again.</div>");
    }
}
