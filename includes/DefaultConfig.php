<?php

/* Database Type (string) 
 * The type of database to use (i.e. mysql, sqlite3, etc.) */
$wgDBtype = "";

/* Single Table Mode (boolean)
 * If the software should run in only one table or run in many
 * tables. */
$wgSingleTable = false;

/* Enable Modules (boolean)
 * If modules should be loaded at all. */
$wgEnableModules = true;

/* Enabled Modules (array of strings)
 * The modules that will be loaded on each request. */
$wgEnabledModules = array(
    "BasicTheme"
);

/* Default Theme (string) 
 * String of the name of the default theme. NOTE: Themes are a special type of 
 * module. */
$wgDefaultTheme = "BasicTheme";

/* Database Password (string) 
 * The password for the database. */
$wgDBpassword = "";

/* Database User (string) 
 * The username for the database. */
$wgDBuser = "root";

/* Wiki Name (string) 
 * The password for the database. */
$wgDBname = "vwikis";

/* Assets Directory (string) 
 * The folder where uploaded files will live. */
$wgAssetDir = "uploads";

/* Logo Path (string) 
 * Name of the website logo in the asset dir. */
$wgWikiLogo = "__WIKI_LOGO__.png";

/* Show Debug Messages (boolean)
 * If debug messages should be shown at all. */
$wgDebugMessages = true;

?> 
