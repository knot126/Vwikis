<?php

$wgDatabase = new mysqli($wgDBserver, $wgDBuser, $wgDBpassword);

if ($wgDatabase->connect_error) {
    
    exit(1);
}
