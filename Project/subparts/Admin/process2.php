<?php 
 session_start();
 // $user = $_SESSION['userid'];
  $conn=mysql_connect('localhost','root','','db_ems');
  
  $n= "Its Reacging here";
extract($_POST);

if(isset($_POST['readrecord'])){

$data = '<table class="table table-bordered table-striped">
           <tr>
                    <th>No.</th>
                    <th>Teacher Name.</th>
                    <th>Teacher ID</th>
                    <th>Departmet</th>
                    <th>Temp Password</th>
            </tr>';
  $displayquery ="SELECT * from 'teacher' ";
  $result = mysql_query($conn,$displayquery);

  if(mysqli_num_rows($result)>0){
  	$number= 1;
  	while($row =mysql_fetch_array($result)){
  		$data .='<tr>
  		<td>'.$number.'</td>
  		<td>'.$row['tname'].'</td>
  		<td>'.$row['t_id'].'</td>
  		<td>'.$row['t_depart'].'</td>
  		<td>'.$row['tpass'].'</td>
  		<td><button onclick="GetUserDetails('.$row['t_id'].')"class="btn sbtn-warning">EDIT</button></td>
  		<td><button onclick="GetUserDetails('.$row['t_id'].')"class="btn sbtn-warning">Delete</button></td>
  		</tr>';
  		$number++;
  		
  	}
  }
$data .='</table>';
echo $data;

}


   if(isset($_POST['t_id'] && $_POST['t_depart'] && $_POST['tpass'] && $_POST['tname']))
   {
   	  $query = "INSERT INTO teacher(teacher_id,teacher_name,department,password) VALUES ('$t_id','$tname','$t_depart','$tpass') ";
   	  mysql_query($query);
   }



///////delete
   if(isset($_POST['deleteid'])){
   	$userid = $_POST['deleteid'];
   	$deletequery ="delete from teacher where teacher_id = $'userid'"; 
   	mysql_query($deleteid);
   }



?>