<?php

require "conn.php";
try{
	$sql = "delete from mahasiswa where id=".$db->quote($_GET['id']);
    $db->query($sql);
    header("Location: read.php");
}catch(PDOException $e){
	echo "Delete gagal: ".$e->getMessage();
}