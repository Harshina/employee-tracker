<?php

include'Tracker.php';

session_start();
if(!$_SESSION["admin_id"])
{
	header('location:adminlogin.php');
}

if(isset($_POST)&&!empty($_POST))
{

	$emp_no=$_POST['emp_no'];
	if($emp_no=='')
	{
		echo"enter employee number";
	}
	else{
		
	$sql1="SELECT emp_no from login WHERE emp_no=$emp_no";
	$result1=mysqli_query($db,$sql1);
$count=mysqli_num_rows($result1);
	}
	$task_desp=$_POST['task_desp'];
	$name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
 
  move_uploaded_file($temp,"files/".$name);
	$regis_dt=date("Y-m-d");
	$task_regis=$_POST['task_regis'];
	$task_action=$_POST['task_action'];
	$closed_dt=$_POST['closed_dt'];
	$status=$_POST['status'];
	$comments=$_POST['comments'];

	if($emp_no==''||$task_desp==''||$name==''||$task_regis==''||$task_action==''||$closed_dt==''||$status==''||$comments=='')
	{
	echo'<span style="color:red"><h2>Fill Complete Information</h2></span>';
	}
	elseif(!$count)
	{
		echo "employee doesnt exists";
	}
else
	{
		
	$sql="INSERT INTO task(emp_no,task_desp,file,task_regis,task_action,regis_dt,closed_dt,status,comments)VALUES('$emp_no','$task_desp','$name','$task_regis','$task_action','$regis_dt','$closed_dt','$status','$comments')";
	$result=mysqli_query($db,$sql);
	}
	
	
}

?>
<html>
<body>
<div class="col-md-3"></div>
<div class="col-md-6">
<form method="post" class="form-vertical" action="taskassign.php" enctype="multipart/form-data">
<legend style="color:blue">Task Assign</legend>
emp no:<input type="text" class="form-control" name="emp_no"/>
Task description:<input type="text"  class="form-control" name="task_desp"/>

File<input type="file" class="form-control" name="file"/>
Task Registered By:<input type="text" class="form-control" name="task_regis"/>
Task actionee<input type="text" class="form-control" name="task_action"/>
Closed date<input type="date" class="form-control" name="closed_dt"/>
Status<input class="form-control" type="text" name="status" value="open"/>
Comments<input  type="text" class="form-control"  name="comments"/>
<br>
<input type="submit" value="submit"/>
</form>
</div>
<div class="col-md-3"></div>
</body>
</html>
<a href="adminpage.php" class="btn btn-primary">Back</a>