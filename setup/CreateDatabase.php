<?php

function wfCreateDB() {
    global $wgDatabase;
    
    $query = "CREATE DATABASE " . $wgDBname;

    $querySuccess = $wgDatabase->query($query);

    if ($querySuccess === FALSE) {
        echo "<b>Error:</b> Could not create database.";
        exit(1);
    }
}
