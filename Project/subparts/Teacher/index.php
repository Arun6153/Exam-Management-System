<?php 
include 'process2.php';


 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
        <div class="profile-card-img" style="background-image:url(&quot;iceland.jpg&quot;);height:150px;background-size:cover;"></div>
        <div><img class="rounded-circle" src="..\..\Logo\user.png" height="150px" style="margin-top:-70px;">
            <h3><?php echo $n['teacher_name']; ?></h3>
        </div>
        <div class="row" style="padding:0;padding-bottom:10px;padding-top:20px;">
            <div class="col-md-6">
                <p class="text-right">Name: </p>
                <p class="text-right">University ID:</p>
                <p class="text-right">Department:</p>
                <p class="text-right">Working at:</p>
            </div>
            <div class="col-md-6 move">
                <p class="text-left"><?php echo $n['teacher_name']; ?></p>
                <p class="text-left"><?php echo $user; ?> </p>
                <p class="text-left"><?php echo $de['department']; ?></p>
                <p class="text-left">Chitkara University</p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>