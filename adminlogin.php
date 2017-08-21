<?php 
include'tracker.php';
session_start();
if(isset($_POST)&&!empty($_POST))
{

	$admin_id=$_POST['admin_id'];
	$admin_pass=$_POST['admin_pass'];
	
	$sql="SELECT * FROM admin WHERE admin_id='$admin_id' AND admin_pass='$admin_pass'";
$result=mysqli_query($db,$sql);

$count=mysqli_num_rows($result);

 
	
	
	if($admin_id==''||$admin_pass=='')
	{
		echo'<span style="color:red">please fill complete information</span>';
	}
	else if($count==1)
	{
	
	

	$_SESSION['admin_id']=$admin_id;
		header('location:adminpage.php');
	}
	else
	{
		echo'<script type="text/javascript">alert("incorrect")</script>';
	}
		
}
if(isset($_GET['logoutadmin'])&&!empty($_GET['logoutadmin']))
{
	session_unregister('admin_id');
}

?>

<html>
<head>
<h1>ADMIN PAGE</h1>
</head>
<body>
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-group">
<form method="post" class="form-vertical" action="adminlogin.php">
ID:<input class="form-control" type="email" name="admin_id"/><br><br>
PASSWORD:<input class="form-control" type="password" name="admin_pass"/><br><br>
<input type="submit" value="login"/>
</div>
</form>
</div>
<div class="col-md-4"></div>
</body>
</html>