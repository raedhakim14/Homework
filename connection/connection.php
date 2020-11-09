<?php

include_once 'config.php'; 

function Connect(){
	
	$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(CONNECTION_FAILED.": ".mysqli_connect_error());
	mysqli_set_charset($conn, UTF8);
	return $conn;
}

function Disconnect( $link ){
	if(mysqli_close($link))
		return true;
	return false;
}

function Exists( $sqlquery, $conn ){
	$result = mysqli_query ( $conn, $sqlquery ) or die(EXISTS_QUERY_WRONG);
	$affectedRows =  mysqli_affected_rows($conn);
	if($affectedRows >= 1){
		return true;
	}
	return false;
}
/* Executs an Query to the Database
   Return: mysql_query if succeed, else Boolean 'False' */
function Query( $sqlquery, $conn ) {
	$result = mysqli_query ( $conn, $sqlquery ) or die(SELECT_QUERY_WRONG);
	$resArr = array(); //create the result array
	while($row = mysqli_fetch_assoc($result)) { //loop the rows returned from db
		$resArr[] = $row; //add row to array
	}
	return $resArr;
}

function InsertQuery( $sqlquery, $conn ) {
	$result = mysqli_query ( $conn, $sqlquery ) or die(INSERT_QUERY_WRONG);
	if($result){
		return true;
	}
	return false;
}

function DeleteQuery( $sqlquery, $conn ) {
		$result = mysqli_query ( $conn, $sqlquery ) or die(DELETE_QUERY_WRONG);
		if($result){
			return true;
		} 
		return false;
}

function UpdateQuery( $sqlquery, $conn ) {
		$result = mysqli_query ( $conn, $sqlquery ) or die(UPDATE_QUERY_WRONG);
		if($result){
			return true;
		}
		return false;
}
?>
