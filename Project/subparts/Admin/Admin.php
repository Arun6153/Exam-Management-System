<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>



<body>	

<div class="topnav">
  <a style="text-decoration: none;" href="../../endSession.php">ADMIN LOGOUT</a>
  <a style="text-decoration: none;" href="">ABOUT</a>
  <a style="text-decoration: none;" href="Admin.php">HOME</a>
  <div class="base">
	<img src=".\..\..\Logo\CU_logo.png">
</div>
</div>

<div class="teacher-part">
	<center>
		<h3 style="line-height: 7vh; border:1px solid grey; justify-content: center; border-radius: 10px; height: 50px; width: 80%;margin-top: 60px;">Teachers Details Panel</h3>
	</center>
	<div class="container" >
	<div class="d-flex justify-content-end">
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Add Teacher</button>
	</div>
	
	<h2 class="text-danger">Records</h2>
	<div id="records_contant ">
		
	</div>

	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Teacher Info...</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<label for="tname"> Teacher Name :</label>
        	<input type="text" name="tname" id="tname" class="form-control" placeholder="Name">
        </div>
         <div class="form-group">
        	<label for="t_id"> Teavher ID :</label>
        	<input type="text" name="t_id" id="t_id" class="form-control" placeholder="University ID">
        </div>
         <div class="form-group">
        	<label for="t_depart"> Teavher Department:</label>
        	<input type="text" name="t_depart" id="t_depart"class="form-control" placeholder="Department">
        </div>
         <div class="form-group">
        	<label for="tpass">Temporary Password:</label>
        	<input type="text" name="tpass" id="tpass" class="form-control" placeholder="Temp Password">
        </div>
      </div>
      <div class="modal-footer">
      	 <button type="button" name="new_t" class="btn btn-default" data-dismiss="modal" onclick="addRecords()">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
   <!-- ////////////////update Modal  -->

   <div class="modal-content" id="update_user_modal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update  Info...</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<label for="utname"> Teacher Name :</label>
        	<input type="text" name="tname" id="utname" class="form-control" placeholder="Name">
        </div>
         <div class="form-group">
        	<label for="ut_id"> Teavher ID :</label>
        	<input type="text" name="t_id" id="ut_id" class="form-control" placeholder="University ID">
        </div>
         <div class="form-group">
        	<label for="ut_depart"> Teavher Department:</label>
        	<input type="text" name="t_depart" id="ut_depart"class="form-control" placeholder="Department">
        </div>
         <div class="form-group">
        	<label for="utpass">Temporary Password:</label>
        	<input type="text" name="tpass" id="utpass" class="form-control" placeholder="Temp Password">
        </div>
      </div>
      <div class="modal-footer">
      	 <button type="button" name="new_t" class="btn btn-default" data-dismiss="modal" onclick="updateuserdetail()">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="hidden" name="" id ="hidden_user_id">
      </div>
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
<script>
</script>
</body>
</html>
