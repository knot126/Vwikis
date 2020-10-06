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
    "UserLogin", "UserInterface", "Setup"
);

/* Main Module (string)
 * Sets the theme module. This will always run.
 */
$wgDefaultTheme = "UserInterface";

/* Default Theme (string) 
 * String of the name of the default theme. NOTE: Themes are a special type of 
 * module. */
$wgDefaultTheme = "BasicTheme";

/* Database Server (string) 
 * The server where the database is located. */
$wgDBserver = "";

/* Database User (string) 
 * The username for the database. */
$wgDBuser = "root";

/* Database Password (string) 
 * The password for the database. */
$wgDBpassword = "";

/* Wiki Name (string) 
 * The name of the wiki. */
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
