<?php

session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
//read fro the database
$user_id = random_num(20);
$query = "select * from users where user_name =  '$user_name' limit 1";
  //to save we do this
  $result = mysqli_query($con, $query);
  if($result)
  {
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0)
    {

        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password'] == $password){

            $_SESSION['user_id'] = $user_data['user_id'];
        header("Location:index.php");
        die;
    }
      }
      
  }
  echo "wrong user name or password";

}else{
        echo " please enter some valid information";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <style type="text/css">
    
    #text{
        height:25px;
        border-radius:5px;
        padding:4px;
        border:solid thin #aaa;
        width:100%;
    }
    #button{
        padding:10px;
        width:100px;
        color:white;
        background-color:lightblue;
        border:none;
        
    }
    
    #box{
        
        background-color:grey;
        margin:auto;
        width:300px;
        padding:20px;
    }
    </style>

    <div id="box">
    <form  method="post">
    <div style="font-size:20px; margin:10px;color:white;">Login</div>
    <input id="text" type="text" name="user_name"> <br><br>
    <input id="text" type="passdwor" name="password"><br><br>
    <input id="button" type="submit" value="login"><br><br>
    <a href="siginup.php" style="color:white; font-size:24px; text-decoration:none;"> Click to Signup</a><br><br>
    </form>
    
    </div>
</body>
</html>