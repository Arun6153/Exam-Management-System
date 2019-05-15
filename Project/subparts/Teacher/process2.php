<?php 
 session_start();
  $user = $_SESSION['userid'];
  $con=mysql_connect('localhost','root','');
    $db=mysql_select_db('db_ems',$con);
  
  ///// Student Name
  $name=mysql_query("SELECT teacher_name FROM teacher WHERE teacher_id='$user'"); 
  $n=mysql_fetch_array($name);
  
  ///// student stream
  $stream=mysql_query("SELECT department FROM teacher WHERE teacher_id='$user'");
  $de =mysql_fetch_array($stream);
  
?>