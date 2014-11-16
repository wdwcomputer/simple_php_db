<?php
/**
 * Website: http://github.com/wdwcomputer/simple_php_db
 * 
 * This library simplifies database procedures using secure methods provided by the PHP PDO class set
 * of methods. The goal is to improve productivity by reducing coding time for any and all database
 * related tasks. New features, bug fixes, and upgrades may be added on occasion, so always use the
 * newest release available on GitHub and SourceForge under the username 'wdwcomputer'.
 * 
 * Licensed under GPU License
 * Redistributions of files must contain this unchanged header information.
 * 
 * @author William D. Wilkerson <wdwcomputer@gmail.com>
 * @version 0.00.01
 * @package wdwcomputer
 * @subpackage simple_php_db
 */

/**
 * PHP PDO connect string defines
 */
define('SPHPDB_MYSQL', 'mysql:DBHOST=**DBHOST**;dbname=**DBNAME**');												// MySQL
define('SPHPDB_POSTGRE', 'pgsql:dbname=**DBNAME**;DBHOST=**DBHOST**');												// PostGre
define('SPHPDB_SQLITE', 'sqlite:**DBPATHFILE**');																	// SQLite
define('SPHPDB_FIREBIRD', 'firebird:dbname=**DBHOST**:**DBPATHFILE**');												// Firebird
define('SPHPDB_INFORMIX', 'informix:DSN=**DBNAME**');																// Informix
define('SPHPDB_ORACLE', 'OCI:dbname=**DBNAME**;DBCHARSET=**DBCHARSET**');											// Oracle
define('SPHPDB_ODBC', 'odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=**DBPATHFILE**;Uid=**DBUSERNAME**');		// ODBC
define('SPHPDB_DBLIB', 'dblib:DBHOST=**DBHOST**:**DBPORT**;dbname=**DBNAME**');										// DBLIB
define('SPHPDB_IBM', 'ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE=**DBNAME**; HOSTNAME=**DBHOST**PROTOCOL=TCPIP;');	// IBM

/**
 * simple_php_db database connect string text replacement identifiers for above connect strings.
 */
define('SPHPDB_HOST_STRING', '**DBHOST**');			// String to replace with database host name.
define('SPHPDB_NAME_STRING', '**DBNAME**');			// String to replace with database name.
define('SPHPDB_PORT_STRING', '**DBPORT**');			// String to replace with database connection port.
define('SPHPDB_PATH_STRING', '**DBPATHFILE**');		// String to replace with database fully qualified path and filename.
define('SPHPDB_USER_STRING', '**DBUSERNAME**');		// String to replace with database username.
