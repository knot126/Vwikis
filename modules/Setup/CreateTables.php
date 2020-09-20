<?php

function wfCreateTables() {
    /* Create tables for the first time. */
    global $wgDatabase;
    
    $query = "CREATE TABLE user (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user VARCHAR(64) NOT NULL,
        password VARCHAR(512) NOT NULL,
        salt VARCHAR(256) NOT NULL
    ); 
    CREATE TABLE page (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(96) NOT NULL,
        current INT UNSIGNED NOT NULL,
    );
    CREATE TABLE revisions (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        page INT NOT NULL,
        content TEXT,
    );";

    $querySuccess = $wgDatabase->query($query);

    if ($querySuccess === FALSE) {
        echo "<b>Error:</b> Could not create database.";
        exit(1);
    } else {
        global $wgPage;
        $wgPage->append("<div style=\"backgorund: pink; font-weight: bold;\">The database was set up successfully. Please make sure to set the <code>\$wgSetupFinished</code> varible to some true value, otherwise the database will be set up again.</div>");
    }
}
