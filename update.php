<?php
include'adminpage.php';
include'Tracker.php';
$id=$_GET['id'];
$sql="UPDATE task SET status='closed' WHERE task_no='$id'";

$result = mysql_query($sql);


header("Location:adminpage.php");
?>