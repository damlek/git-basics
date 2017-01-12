<?php

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','citygate');

$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);