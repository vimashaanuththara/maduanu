<?php session_start() ?>

<?php

  $connection=mysqli_connect('localhost','root','root','projects');
  if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($connection,$_POST['username']);
     $Password=mysqli_real_escape_string($connection,$_POST['password']);
     // prepare database query
     $query = "SELECT * FROM user WHERE username= '{$username}' AND password ='{$password}'LIMIT 1";
     $result_set = mysqli_query($connection, $query);
     if($result_set){
      if(mysqli_num_rows($result_set)==1){
        $user=mysqli_fetch_assoc($result_set);
        $_SESSION['id']=$user['id'];

        
        $_SESSION['username']=$user['username'];
        
        

      }
     }
     
     header('Location:web01.php');

  }
?>



<!DOCTYPE html>
<html>

<head>
  <title> login page </title>
<style>

 body{
 background-image: url('login.jpg');
 background-repeat:no-repeat;
 background-size:99% 99%;
 background-attachment: fixed;
}

.loginbox{
  width:320px;
  height:400px;
  background:#000;
  color:#fff;
  top:50%;
  left:50%;
  position:absolute;
  transform:translate(-50%,-50%);
  box-sizing:border-box;
  padding:70px 30px;}
  
.avatar{
width:100px;
height:100px;
border-radius:50%;
position:absolute;
top:-50px;
left:calc(50% - 50px);}

h1{
margin:0;
padding:0 0 20px;
text-align:center;
font-size:22px;}

.loginbox p{
margin:0;
padding:0;
font-weight:bold;}

.loginbox input{
width:100%;
margin-bottom:20px;}

.loginbox input[type="text"], input[type="password"]
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:16px;}

.loginbox input[type="submit"]
{
 border:none;
 outline:none;
 height:40px;
 background:#fb2525;
 color:#fff;
 font-size:18px;
 border-radius:20px;}
 
 .loginbox input[type="submit"]:hover
{
cursor:pointer;
background:#ffc107;
color:#000;}

.loginbox a{
text-decoration:none;
font-size:12px;
line-height:20px;
color:darkgrey;}

.loginbox a:hover{
color:#ffc107;}


</style>
</head>
<body>
 <div class="loginbox">
 <img src="view.png" class="view">
 <h1>Login Here</h1>
 <form action="login.php" method="post">
 <p> User Name <p>
 <input type="text" name="username" placeholder="Enter Username">
 <p>Password</p>
 <input type="password" name="Password" placeholder="Enter Password">
 <input type="submit" name="submit" class="button"  value="Login">
 
 
 
 <a href="web055.html"> Lost your password? </a><br>
 <a href="web006.html">Don't have an account </a>
 </form>
  
 
 </div>

</body>
</html>