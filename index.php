<?php

error_reporting(-1);
ini_set('display_errors', 1);

define("VWIKIS_ENTRY_POINT", "index");

// Version definitions
define("VWIKIS_CONST", 1100);
define("VWIKIS_TYPE_CONST", "PLATFORM")
define("VWIKIS_DINO_CONST", $VWIKIS_CONST . "-" . $VWIKIS_TYPE_CONST);

$IP = dirname(__FILE__);

require_once($IP . "/includes/DefaultConfig.php");
require_once($IP . "/LocalConfig.php");
require_once($IP . "/includes/Igniter.php");

wfRun();
