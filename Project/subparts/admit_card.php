<?php include '../process.php';


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="admit_card.css">
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
		<h3>Sessional 1</h3>
		<div style="position: relative; width: 50%;line-height: 25px;right: 50px;">
		   <h6>Name:</h6>
		   <h6>Id:</h6>
		   <h6>Batch:</h6>
		   <h6>Stream</h6>
		   <div style="width: 50%;line-height: 25px;float: right;margin-top: -16vh;">
        	<h6><?php print_r($n['student_name']);?></h6>
        	<h6><?php echo $user;?></h6>
        	<h6><?php print_r($bb['batch_b_year']) ?></h6>
        	<h6><?php print_r($ss['stream_stream']); ?></h6>
        </div>
        <div style="position:relative; width: 50%;line-height: 25px;float: right;margin-top: -16vh;left:200px;">
        	<h6>Course 1:</h6>
        	<h6>Course 2:</h6>
        	<h6>Course 3:</h6>
        	<h6 style="margin-right: 35px;">Invigilator Sign:</h6>
        	<div style="margin-left:100%;margin-top: -16vh;">
        		<h6> <?php echo $c1;   ?></h6>
        		<h6> <?php echo $c2;   ?></h6>
        		<h6> <?php echo $c3;   ?></h6>
        		<h6>sign</h6>
        	</div>
        </div>
        </div>
	</div>
	<div class="block small-box2">
		<h3>Sessional 2</h3>
		<div style="position: relative; width: 50%;line-height: 25px;right: 50px;">
		   <h6>Name:</h6>
		   <h6>Id:</h6>
		   <h6>Batch:</h6>
		   <h6>Stream:</h6>
		   <div style="width: 50%;line-height: 25px;float: right;margin-top: -16vh;">
        	<h6><?php print_r($n['student_name']);?></h6>
        	<h6><?php echo $user;?></h6>
        	<h6><?php print_r($bb['batch_b_year']) ?></h6>
        	<h6><?php print_r($ss['stream_stream']); ?></h6>
        </div>
        <div style="position:relative; width: 50%;line-height: 25px;float: right;margin-top: -16vh;left:200px;">
        	<h6>Course 1:</h6>
        	<h6>Course 2:</h6>
        	<h6>Course 3:</h6>
        	<h6 style="margin-right: 35px;">Invigilator Sign:</h6>
        	<div style="margin-left:100%;margin-top: -16vh;">
        		<h6> <?php echo $c1;   ?></h6>
                <h6> <?php echo $c2;   ?></h6>
                <h6> <?php echo $c3;   ?></h6>
        		<h6>sign</h6>
        	</div>
        </div>
        </div>
	</div>
	<div class="block small-box3">
		<h3>Sessional 3</h3>
		<div style="position: relative; width: 50%;line-height: 25px;right: 50px;">
		   <h6>Name:</h6>
		   <h6>Id:</h6>
		   <h6>Batch:</h6>
		   <h6>Stream:</h6>
		   <div style="width: 50%;line-height: 25px;float: right;margin-top: -16vh;">
        	<h6><?php print_r($n['student_name']);?></h6>
        	<h6><?php echo $user;?></h6>
        	<h6><?php print_r($bb['batch_b_year']) ?></h6>
        	<h6><?php print_r($ss['stream_stream']); ?></h6>
        </div>
        <div style="position:relative; width: 50%;line-height: 25px;float: right;margin-top: -16vh;left:200px;">
        	<h6>Course 1:</h6>
        	<h6>Course 2:</h6>
        	<h6>Course 3:</h6>
        	<h6 style="margin-right: 35px;">Invigilator Sign:</h6>
        	<div style="margin-left:100%;margin-top: -16vh;">
        		<h6> <?php echo $c1;   ?></h6>
                <h6> <?php echo $c2;   ?></h6>
                <h6> <?php echo $c3;   ?></h6>
        		<h6>sign</h6>
        	</div>
        </div>
        </div>
	</div>
	<div class="block small-box4">
		<h3>End Term</h3>
		<div style="position: relative;line-height: 25px;float: left;">
		   <h6>Name: </h6>
		   <h6>Id:</h6>
		   <h6 style="left:2px;">Batch:</h6>
		   <h6>Stream:</h6>
		   <div style="position: relative; line-height: 25px;float:right; left: 60%; margin-top: -16.5vh;">
        	<h6><?php print_r($n['student_name']);?></h6>
        	<h6><?php echo $user;?></h6>
        	<h6><?php print_r($bb['batch_b_year']) ?></h6>
        	<h6><?php print_r($ss['stream_stream']); ?></h6>
        </div>
        <div style="position:relative;line-height: 25px;float:left;margin-left: 15%; margin-top:30%;">
        	<h6>Course 1:</h6>
        	<h6>Course 2:</h6>
        	<h6>Course 3:</h6>
        	<h6 style="margin-right: 35px;">Invigilator Sign:</h6>
        	<div style="position: relative; float: right;left: 100%; margin-top: -16vh;">
        		<h6> <?php echo $c1;   ?></h6>
                <h6> <?php echo $c2;   ?></h6>
                <h6> <?php echo $c3;   ?></h6>
        		<h6>sign</h6>
        	</div>
        </div>
        </div>
	</div>
</div>



<footer>
	<div>
		<h4><p>&copy; 2019 ArunJatinExamManagementSystem.com<p></h4>
	</div>
</footer>
</body>
</html>
