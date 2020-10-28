<?php
$con = mysqli_connect('localhost:3308','root','');
$dbName = 'courier_db';
if(!$con)
{
	echo "Not connected to server";
}
if(!mysqli_select_db($con,$dbName))
{
	echo "Not selected database";
}

function dbQuery($sql)
{
	$result = mysqli_query($con,$sql) or die(mysqli_error());
	
	return $result;
}
$dbName = 'courier_db';
function dbAffectedRows()
{
	global $con;
	
	return mysql_affected_rows($$con);
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