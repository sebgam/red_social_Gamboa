<?php
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author			natio
 * @package 		PhpFox
 * @version 		$Id: server.sett.php.new 4602 2012-08-18 18:48:02Z Raymond_Benc $
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 * Database Driver
 * Support: mysql, mysqli, mssql, postgres or sqlite
 * 
 * @example mysql
 */
$_CONF['db']['driver'] = 'mysql';
$_CONF['db']['host'] = 'localhost'; 
$_CONF['db']['user'] = 'root';
$_CONF['db']['pass'] = 'clave.123';
$_CONF['db']['name'] = 'red_social';
$_CONF['db']['prefix'] = 'redSocial_';
$_CONF['db']['port'] = '';

$_CONF['db']['slave'] = false;
$_CONF['db']['slave_servers'] = array();

$_CONF['balancer']['enabled'] = false;
$_CONF['balancer']['servers'] = array();

$_CONF['core.host'] = 'localhost';

$_CONF['core.folder'] = '/Todakar.PHPFox3.5/script/';

$_CONF['core.url_rewrite'] = '2';

$_CONF['core.salt'] = '69ab92e733a2ed94fd6f6f0bb11f094d';

// Storage Engine (file, memcache)
$_CONF['core.cache_storage'] = 'file';

// Add salt
$_CONF['core.cache_add_salt'] = false;

// Cache suffix (file only)
$_CONF['core.cache_suffix'] = '.php';

// Memcache Hosts
$_CONF['core.memcache_hosts'] = array();

// Memcahe persistent
$_CONF['core.memcache_persistent'] = false;

// Should we skip the cache check and display live content
$_CONF['core.cache_skip'] = false;

// Check we run to find out if the script has been installed
$_CONF['core.is_installed'] = true;

// Check we run when the database tables have been installed
$_CONF['core.db_table_installed'] = false;

// AdminCP time out in minutes
$_CONF['core.admincp_timeout'] = '60';

// Define if AdminCP should have a time out
$_CONF['core.admincp_do_timeout'] = false;

$_CONF['core.is_auto_hosted'] = false;

?>