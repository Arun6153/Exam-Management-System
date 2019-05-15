<?php 
	session_start();
	$usr = $_SESSION['userid'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>	

<div class="topnav">
  <a href="../endSession.php">STUDENT LOGOUT</a>
  <a href="">ABOUT</a>
  <a href=".\home.php">HOME</a>
  <div class="base">
	<img src=".\..\Logo\CU_logo.png">
</div>
</div>

<div class="box-body">
	<div class="block small-box1">
		<h3 style="text-align: center;"><a href=".\..\subparts\student.php">STUDENT INFO</a></h3>
		<p>(Profile , Batch , Courses  and Stream)</p>
		<i class="fa fa-user"></i>
	</div>

	<div class="block small-box2">
		<h3 style="text-align: center;"><a href=".\..\subparts\admit_card.php">ADMIT CARD</a></h3>
		<p>Admit card for Sessional:- 1,2 and 3</p>
		<i class="fa fa-address-card"></i>
	</div>

	<div class="block small-box3">
		<h3 style="text-align: center;"><a href=".\..\subparts\date_sheet.php">DATE SHEET</a></h3>
		<p>It has dates and timings on which your Exam will going to happen.</p>
		<i class="fa fa-calendar-check-o"></i>
	</div>

	<div class="block small-box4">
		<h3 style="text-align: center;"><a href=".\..\subparts\attendance.php">ATTENDANCE</a></h3>
		<p>It gives information of Present/Absent of Student in Exam.</p>
		<i class="fa fa-list-alt"></i>
	</div>

	<div class="block small-box5">
		<h3 style="text-align: center;"><a href=".\..\subparts\result.php">RESULT</a></h3>
		<p>This column has information regarding the result of the Student.</p>
		<i class="fa fa-list-ol"></i>
	</div>
</div>



<footer>
	<div>
		<h4><p>&copy; 2019 ArunJatinExamManagementSystem.com<p></h4>
	</div>
</footer>
</body>
</html>
