<?php

/* 
 *  Create database connection
 */

error_reporting(0);

$username = 'xxxxx';
$password = 'xxxxxxxx';
$host     = 'xxxxxxx';

$database = 'country';


$link = mysql_connect($host, $username, $password);
if (!$link) {
    die('Not connected');
}

// make country the current db
$db_selected = mysql_select_db($database, $link);
if (!$db_selected) {
    die ('can\'t select database');
}



