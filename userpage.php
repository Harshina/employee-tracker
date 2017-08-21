<?php
include'tracker.php';
session_start();
if(!$_SESSION['emp_no'])
{
	header('location:login.php');
	
	
}
else
{
	echo"welcome"." ".$_SESSION['emp_no'];
	
}


$sql2="SELECT * FROM task WHERE status='open' AND emp_no='".$_SESSION["emp_no"]."'";
$result2=mysqli_query($db,$sql2);
?>
<html>
<head>
<h1>
Employees page</h1></head>
<body>
<div class="col-md-3"></div>
<div class="col-md-6">
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
<?php while($fetch=mysqli_fetch_assoc($result2)):?>
<tbody>
<td><?php echo $fetch['task_no'];?></td>
<td><?php echo $fetch['task_desp'];?></td>
<td><a href="download.php?filename=<?php echo $fetch['file'];?>"><?php echo $fetch['file'];?></a></td>
<td><?php echo $fetch['task_regis'];?></td>
<td><?php echo $fetch['task_action'];?></td>
<td><?php echo $fetch['regis_dt'];?></td>
<td><?php echo $fetch['closed_dt'];?></td>
<td><?php echo $fetch['status'];?></td>
<td><?php echo $fetch['comments'];?></td>
</tbody>
<?php endwhile;?>
</table>
</div>

<div class="col-md-3">
<a href="login.php?action=logout" class="btn btn-success">LOGOUT</a></div>






</html>