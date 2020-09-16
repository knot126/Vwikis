<?php

$wgDatabase = new mysqli($wgDBserver, $wgDBuser, $wgDBpassword);

if ($wgDatabase->connect_error) {
    echo "<b>Error:</b> Database connection error.";
    exit(1);
}
