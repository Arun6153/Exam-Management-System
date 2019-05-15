<?php include '../process.php';


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="student.css">
</head>
<body>	

<div class="topnav">
  <a href="../endSession.php">STUDENT LOGOUT</a>
  <a href="">ABOUT</a>
  <a href=".\..\home\home.php">HOME</a>
  <div class="base">
	<img src=".\..\Logo\CU_logo.png">
</div>
</div>

<div class="box-body">
	<div class="block small-box1">
		<h3>PROFILE</h3><br>
		<h4>Student Name : <?php print_r($n['student_name']);?></h4><p id="student_name"></p>
		<h4>University ID : <?php echo $user;?></h4><p id="student_id"></p>
	</div>
	<div class="block small-box2">
		<h3>BATCH</h3><br>
		<h4>Batch Year : <?php print_r($bb['batch_b_year']) ?></h4><p id="student_batch"></p>
	</div>
	<div class="block small-box3">
		<h3>COURSE</h3><br>
		<h4>Course 1:  <?php echo $c1;   ?></h4>
		<h4>Course 2:  <?php echo $c2;   ?></h4>
		<h4>Course 3:  <?php echo $c3;   ?></h4>
	</div>
	<div class="block small-box4">
		<h3>STREAM</h3><br>
		<h4>Stream : <?php print_r($ss['stream_stream']); ?></h4><p id="stream"></p>
	</div>
</div>



<footer>
	<div>
		<h4><p>&copy; 2019 ArunJatinExamManagementSystem.com<p></h4>
	</div>
</footer>
</body>
</html>
