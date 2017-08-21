<?php

include'Tracker.php';

session_start();
if(!$_SESSION['admin_id'])
{
	header('location:adminlogin.php');

 }
else
{
	echo "welcome"." ".$_SESSION['admin_id'];
}
if(isset($_POST)&&!empty($_POST))
{
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
}

if(isset($_GET)&&!empty($_GET))
{

$id=$_GET['id'];
$sql2="UPDATE task SET status='closed' WHERE task_no=$id";

$result2 =mysqli_query($db,$sql2);

	
}

?>
<html>
<body>
<div class="col-md-3">
<form method="post" action="adminpage.php">
ENTER EMPLOYEE NUMBER:<input type="text" name="emp_no" />
<input type="submit" class="btn btn-success" value="view" name="view"/>
</form>
<a href="taskassign.php" class="btn btn-primary">ASSIGN TASK</a>
</div>
<div class="col-md-3">
<?php if(isset($_POST)&&!empty($_POST)):?>
<table class="table table-bordered table-striped table-condensed">
<thead>
<th>
Task no.
</th>
<th>
Task Description
</th>
<th>
File
</th>
<th>
Task Registered by
</th>
<th>
Task Actionee
</th>
<th>
Registeration date
</th>
<th>
Closed date
</th>
<th>
Status
</th>
<th>
Comments
</th>
</thead>
<?php while($fetch=mysqli_fetch_assoc($result)):?>
<tbody>
<td><?php echo $fetch['task_no'];?></td>
<td><?php echo $fetch['task_desp'];?></td>
<td><a href="download.php?filename=<?php echo $fetch['file'];?>"><?php echo $fetch['file'];?></a></td>
<td><?php echo $fetch['task_regis'];?></td>
<td><?php echo $fetch['task_action'];?></td>
<td><?php echo $fetch['regis_dt'];?></td>
<td><?php echo $fetch['closed_dt'];?></td>
<td><?php echo $fetch['status'];?><a class="glyphicon glyphicon-pencil" href="?id=<?php echo$fetch['task_no'];?>"></a></td>
<td><?php echo $fetch['comments'];?></td>
</tbody>
<?php endwhile;?>
</table>
<?php endif; ?>
 </div>
 
<a href="adminlogin.php?action=logoutadmin" class="btn btn-default">LOGOUT</a>
</body>
</html>