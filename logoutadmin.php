<?php

session_start();
session_destroy();
header('location:adminlogin.php?logout=you are successfully logged out');




?>