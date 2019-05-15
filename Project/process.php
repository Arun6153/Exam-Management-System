<?php 
 session_start();
  $user = $_SESSION['userid'];
  $con=mysql_connect('localhost','root','');
    $db=mysql_select_db('db_ems',$con);
  
  ///// Student Name
  $name=mysql_query("SELECT student_name FROM student WHERE student_id='$user'"); 
  $n = mysql_fetch_array($name);
  
  ///// student stream
  $stream=mysql_query("SELECT stream_stream from student WHERE student_id='$user'");
  $ss =mysql_fetch_array($stream);
  
  ///// batch of student
  $batchb=mysql_query("SELECT batch_b_year from student WHERE student_id='$user'"); 
  $bb = mysql_fetch_array($batchb);

  $courses=mysql_query("SELECT * from student_has_course WHERE student_student_id='$user'");
  $i=0;
  $c1="None";
  $c2="None";
  $c3="None";
  While($cc = mysql_fetch_array($courses))
  { 
     $cid = $cc['1'];
     $course=mysql_query("SELECT course_name from course WHERE course_id='$cid'");
     $cn=mysql_fetch_array($course);
     if($i==0)
     {
      $c1=$cn[0];
     }
    else if($i==1)
     {
      $c2=$cn[0];
     }
    else if($i==2)
     {
      $c3=$cn[0];
     }
     $i++;
  }

  $result=mysql_query("SELECT course_course_id , sgpa , cgpa FROM result WHERE student_student_id='$user'");
  $res = mysql_fetch_array($result);
  

?>