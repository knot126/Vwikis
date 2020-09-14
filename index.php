<?php

error_reporting(-1);
ini_set('display_errors', 1);

define("VWIKIS_ENTRY_POINT", "index");

$IP = dirname(__FILE__);

require_once($IP . "/includes/DefaultConfig.php");
require_once($IP . "/LocalConfig.php");
require_once($IP . "/includes/Igniter.php");

wfRun();
