<?php
include'tracker.php';


$emp_no=$_POST['emp_no'];
if($emp_no=='')
{
	echo"Enter a valid number";
}
else
{
$sql="SELECT * FROM task WHERE emp_no='$emp_no'";
$result=mysqli_query($db,$sql);
}

if(isset($_GET)&&!empty($_GET))
{

$id=$_GET['id'];
$sql2="UPDATE task SET status='closed' WHERE task_no=$id";

$result2 =mysqli_query($db,$sql2);
	
}
?>
