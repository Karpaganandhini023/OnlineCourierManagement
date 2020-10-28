<?php


// database connection config
define("DB_SERVER", "localhost:3308");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "courier_db");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$sql=mysqli_connect(DB_SERVER,DB_DATABASE);

/*$dbHost = "localhost:3308";
$dbUser = "root";
$dbPass = " ";
$dbName = "courier_db";
$conn = mysqli_connect("localhost:3308","root","","courier_db")or die("not connected ");*/

if ($conn->connect_error)
	{
die("Connection failed: ");
}
if($sql->connect_error)
{
	die("database not connected:");
}
//$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass)or die ('MySQL connect failed. ' . mysql_error());


function dbQuery($sql)
{
	$result = mysql_query($sql) or die(mysql_error());
	
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	
	return mysql_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	return mysql_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysql_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysql_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysql_free_result($result);
}

function dbNumRows($result)
{
	return mysql_num_rows($result);
}

function dbSelect($dbName)
{
	return mysql_select_db($dbName);
}

function dbInsertId()
{
	return mysql_insert_id();
}
?>