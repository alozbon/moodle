<?php
unset($CFG);  // Ignore this line
global $CFG;  // This is necessary here for PHPUnit execution
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';      // 'pgsql', 'mariadb', 'mysqli', 'sqlsrv' or 'oci'
$CFG->dblibrary = 'native';     // 'native' only at the moment
$CFG->dbhost    = 'mariadb';  // eg 'localhost' or 'db.isp.com' or IP
$CFG->dbname    = 'moodle';     // database name, eg moodle
$CFG->dbuser    = 'moodle';   // your database username
$CFG->dbpass    = 'm00dl3';   // your database password
$CFG->prefix    = 'mdl_';       // prefix to use for all table names
$CFG->dboptions = array(
    'dbpersist' => false,       // should persistent database connections be
    'dbsocket'  => false,       // should connection via UNIX socket be used?
    'dbport'    => '3306',          // the TCP port number to use when connecting
    'dbhandlesoptions' => false,// On PostgreSQL poolers like pgbouncer don't
    'dbcollation' => 'utf8mb4_unicode_ci', // MySQL has partial and full UTF-8
);

$CFG->wwwroot   = 'http://moodle-moodle.apps-crc.testing/';
$CFG->dataroot  = '/var/www/html/moodledata';
$CFG->directorypermissions = 02777;
$CFG->admin = 'admin';
require_once(__DIR__ . '/lib/setup.php'); // Do not edit
