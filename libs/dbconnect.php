<?php
define("EZSQL_DB_USER", 'root');
define("EZSQL_DB_PASSWORD", 'admin');
define("EZSQL_DB_NAME", 'pligg_demo');
define("EZSQL_DB_HOST", 'localhost');
if (!function_exists('gettext')) {
	function _($s) {return $s;}
}
?>