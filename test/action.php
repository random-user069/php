<?php
$servername="localhost";
$username="root";
$password="";
$dbname="umesh";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection Failed: ".$conn->connect_error);
}
if(isset($_POST['username']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $query="SELECT*FROM users where username='".$user."' and password='".$pass."'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        echo"Login Successful";
        header('Location:welcome.php');
    }
    else{
        echo"Username or Password Not Matched";
    }
}
?>