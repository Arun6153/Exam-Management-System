<?php 
    $Error="";
$h="hello World";
    session_start();
    $_SESSION['userid'] = "";
     if(isset($_POST['submit']))
     {
     $user = $_POST['id']; $_SESSION['userid'] = $user;
     $pass = $_POST['password'];

     $user = stripcslashes($user);
     $pass = stripcslashes($pass);

     $user = mysql_real_escape_string($user);
     $pass = mysql_real_escape_string($pass);

       $con=mysql_connect('localhost','root','');
         $db=mysql_select_db('db_ems',$con);
         $type = $_POST['login_option'];
         if($type=="student")
         {
          $select = mysql_query("SELECT * FROM student");
            while ($data = mysql_fetch_array($select)) 
            {
              if($user == $data['student_id'] && $pass == $data['password'])
              {
  
                  header("Location:home/home.php");
              }
            }
            $Error="Id or Password is incorrect";
          }
          if($type=="teacher")
          {
             $select = mysql_query("SELECT * FROM teacher");
          $Error="";
            while ($data = mysql_fetch_array($select)) 
            { 
              if($user == $data['teacher_id'])
              { 
                  header("Location:subparts/Teacher/teacher.php");
              }
            }
            $Error="Id or Password is incorrect";
          }
          if($type=="admin")
          {

              if($user == "1149"&&$pass=="kunal" )
              { 
                  header("Location:subparts/Admin/admin.php");
              }
            
            $Error="Id or Password is incorrect";
          }
        
      }

    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div style="position: absolute;margin-left:37.5%; font-size: 2em; margin-top: -12%;">
        <marquee direction="left" style="position:absolute; margin-top: 37px; font-size:25px;">EXAM MANAGEMENT SYSTEM
        </marquee>
        <b>CHITKARA</b> UNIVERSITY
    </div>
    <div class="log">
        <h2>Login</h2>
    </div>

    <div class="login-dark">
        <form action="index.php" method="POST">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-contact-outline"></i></div>
            <div class="form-group"><input class="form-control" type="number"  name="id" placeholder="University ID">
            </div>
            <div class="form-group"><input class="form-control" type="password"  name="password" placeholder="Password">
            </div>
            <div>
              <select name="login_option">
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <span style="color: red;"><?php echo $Error; ?></span>
            <div class="form-group"><button class="btn btn-primary btn-block"  type="submit" name="submit">Login</button></div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>
    <script type="text/javascript">
    </script>
</body>
</html>


