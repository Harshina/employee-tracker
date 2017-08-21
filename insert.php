<?php
include'tracker.php';

session_start();
if(!$_SESSION['login_user'])
{
	header('location:login.php');
}
else
{
	echo"welcome"." ".$_SESSION["login_user"];
}
if(isset($_POST)&&!empty($_POST))
{
	$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$dt1=date("Y-m-d");
$task_regis=$_POST['task_regis'];
$task_action=$_POST['task_action'];
$task_desp=$_POST['task_desp'];
$closed_dt=$_POST['closed_dt'];
$status=$_POST['status'];
$comments=$_POST['comments'];
move_uploaded_file ($file_path,'D:\harshina\task/'.$file_name);


    
	
    
	$sql="INSERT INTO task(task_desp,file,task_regis,task_action,regis_dt,closed_dt,status,comments)VALUES('$task_desp','$file_path','$task_regis','$task_action','$dt1','$closed_dt','$status','$comments')";

	if($task_desp==''||$file==''||$task_regis==''||$task_action==''||$closed_dt==''||$status==''||$comments='')
{
	echo'<span style="color:red">Fill complete information</span>';
}
	 else if(mysqli_query($db,$sql))
	{
	echo'<script type="text/javascript">alert("inserted")</script>';
     
	}
	else
	{
		echo"not inserted";
	}
}
?>
<html>
<head>
<h1>ADD TASK</h1>
</head>
<body>
<div class="col-md-3"></div>
<div class="col-md-6">
<form class="from-vertical" method="post" action="insert.php" enctype="multipart/form-data">
<div class="form-group">


TASK DESCRIPTION:<textarea rows="3" cols="20" class="form-control" name="task_desp"></textarea>
ATTACHMENT:<input type="file" class="form-control" name="file"/>
TASK REGISTERED BY:<input type="text" class="form-control" name="task_regis"/>
TASK ACTIONEE:<input type="text" class="form-control" name="task_action"/>
CLOSED DATE:<input type="date" class="form-control" name="closed_dt"/>
STATUS:<select  name="status" class="form-control">
<option >open</option>
<option >closed</option>
</select>
COMMENTS:<textarea rows="3" cols="20"  class="form-control" name="comments"></textarea>
<input type="submit" value="submit">
</div>
</form>
</div>
<div class="col-md-3">
<a name="logout" value="logout" type="button" href="logout.php" class="btn btn-default">LOGOUT</a></div>
<a name="back" value="main page" type="button" href="userpage.php" class="btn btn-primary">HOME PAGE</a>

</body>
</html>