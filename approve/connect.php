<?php
function connect()
{
	$dbserver ="localhost";
	$dbuser ="root";
	$dbpass ="";
	$dbname ="enrollment_db";
	$link = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("Could not connect");
	return $link;
}

function getData($sql)
{
	$link = connect();
	$result = mysqli_query($link,$sql);
	
	if(mysqli_num_rows($result)>0)
    {
	while($row = mysqli_fetch_assoc($result))
	{
		$rows[]=$row;

	}
	return $rows;
}
}

function getDataRows($sql){
	$link=connect();
	$result=mysqli_query($link,$sql);
	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$rows[]=$row;
	}
	return $rows;
}

function setData ($sql)
{
	$link =connect();
	if(mysqli_query($link,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}
function updateData ($sql)
{
	$link = connect();
	if(mysqli_query($link,$sql))
	{
		return true;
	}
	else
	{
		return false;

	}
}
