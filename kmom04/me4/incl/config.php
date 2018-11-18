<?php
// Start the named session, the name is based on the path to this file.
$sessionname = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($sessionname);
session_start();

/**
 * Configuration file with common settings.
 */
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors

// Create a common part for the title
$baseTitle = " | Test multipage";
