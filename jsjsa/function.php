<?php
function db_query($query) {
    $connection = mysqli_connect("127.0.0.1:3306","u306725765_nech","Argento07","u306725765_nech");
    $result = mysqli_query($connection,$query);

    return $result;
}

function delete($tblname,$field_id,$id){

	$sql = "delete from ".$tblname." where ".$field_id."=".$id."";
	
	return db_query($sql);
}

function select_id($tblname,$field_name,$field_id){
	$sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);

	return $sql;

}
?>