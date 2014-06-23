<?php

 $dbhost = "localhost";
 $dbname = "chrome";
 $dbuser = "root";
 $dbpass = "123456";

$link = mysql_connect($dbhost, $dbuser, $dbpass)
    or die('Could not connect: ' . mysql_error());
mysql_select_db($dbname) or die('Could not select database');

$log = array(0 => 'domain', 1 => 'minute', 2 => 'percent');

$raw = json_decode($_GET['data']);

foreach($raw as $row) {
	$result = array();
	foreach($row as $index => $re) {			
		$$log[$index] = $re;
	}
  mysql_query("insert into log (domain,minute,percent) values('$domain','$minute','$percent')");				
	
}


