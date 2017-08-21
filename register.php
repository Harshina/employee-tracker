<?php
include'tracker.php';



if(isset($_POST)&&!empty($_POST))
{
	
	$emp_no=$_POST['emp_no'];
    $emp_name=$_POST['emp_name'];
	$emp_id=$_POST['emp_id'];
	
    $sql="INSERT INTO login(emp_no,emp_name,emp_id)VALUES('$emp_no','$emp_name','$emp_id')";
	

if(mysqli_query($db,$sql))
{
	echo'<script type="text/javascript">alert("inserted")</script>';
   header('location:login.php');
}
  



	//if($emp_no==''||$emp_name==''||$emp_id=='')
	//{
	//	echo'<span style=color:red>Fill Complete Information<span>';
	//}
	
	else
	{
		echo"not inserted";
	}
}
?>

<html>
<head>
<h1>REGISTER HERE</h1>
</head>
<body>
<div class="col-md-4"></div>
<div class="col-md-4">
<form method="post" action="register.php" class="form-vertical">
<div class="form-group">
EMPLOYEE NO:<input class="form-control" type="text" name="emp_no"/><br><br>
EMPLOYEE NAME<input class="form-control" type="text" name="emp_name"/><br><br>
EMPLOYEE ID:<input class="form-control" type="email" name="emp_id"/><br><br>
</div>
<input type="submit" name="register"/>
</form>
</div>
<div class="col-md-4"></div>
</body>
</html>