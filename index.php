<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss Project</title>
    <?php include('./client/commonFiles.php')?>
</head>
<body>
<?php 
    session_start();
    
    // Handle logout
    if(isset($_GET['logout'])){
        session_destroy();
        header("Location: index.php");
        exit();
    }
    
    include('./client/header.php');

    $user = $_SESSION['user'] ?? null;
    $username = $user['username'] ?? null;

    if(isset($_GET['signup']) && !$username){
        include('./client/signup.php');
    }
    else if (isset($_GET['login']) && !$username){
        include('./client/login.php');
    }
    else if(isset($_GET['ask'])){
        include('./client/ask.php');
    }
     else if(isset($_GET['q-id'])){
        $qid=$_GET['q-id'];
        include('./client/questions-details.php');
    }
    else if(isset($_GET['c-id'])){
        $cid=$_GET['c-id'];
        include('./client/questions.php');
    }
    else if(isset($_GET['u-id'])){
        $uid=$_GET['u-id'];
        include('./client/questions.php');
    }
    else if(isset($_GET['latest'])){
        include('./client/questions.php');
    }
    else if(isset($_GET['search'])){ 
        $search =$_GET['search'];
        include('./client/questions.php');
    }

    else{
        include('./client/questions.php');
    }
 ?>
</body>
</html>