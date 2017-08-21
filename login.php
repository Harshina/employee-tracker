

<?php 
include'tracker.php';

session_start();
		
	
if(isset($_POST)&&!empty($_POST))
{

	$emp_no=$_POST['emp_no'];
	$emp_id=$_POST['emp_id'];
    $emp_name=$_POST['emp_name'];
	
	$sql="SELECT * FROM login WHERE emp_no='$emp_no' AND emp_id='$emp_id' AND emp_name='$emp_name' ";
$result=mysqli_query($db,$sql);
$count=mysqli_num_rows($result);
	
	if($emp_no==''||$emp_id==''||$emp_name=='')
	{
		echo'<span style="color:red">please fill complete information</span>';
	}
	else if($count==1)
	{
		
		$_SESSION['emp_no']=$emp_no;
		header('location:userpage.php');
	}
	else
	{
		echo'<script type="text/javascript">alert("incorrect")</script>';
	}
		
}
if(isset($_GET['logout'])&&!empty($_GET['logout']))
{
	session_unregister('emp_no');
}

?>

<html>
<head>
<h1>LOGIN</h1>
</head>
<body>
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="form-group">
<form method="post" class="form-vertical" action="login.php">
EMPLOYEE NO.:<input class="form-control" type="text" name="emp_no"/><br><br>
EMPLOYEE ID:<input class="form-control" type="text" name="emp_id"/><br><br>
EMPLOYEE NAME:<input class="form-control" type="text" name="emp_name"/><br><br>
<input type="submit" value="login"/>
</div>
</form>
</div>
<div class="col-md-4"></div>
</body>
</html>