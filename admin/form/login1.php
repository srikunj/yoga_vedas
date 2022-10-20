<?php
$myconn=mysqli_connect('localhost','root','','ecommerce');



$a_name=$_POST['username'];
$a_pass=$_POST['userpass'];


$result=mysqli_query($myconn," SELECT * FROM `admin` WHERE username='$a_name' AND userpassword='$a_pass' ");


// session start
// super global variable
session_start();

if(mysqli_num_rows($result)){

    $_SESSION['admin']=$a_name;
    // i have given the variable name admin to session 

    echo "
        <script>
        alert('Login Successfully');
        window.location.href='../mystore.php';
        </script>    
    ";
}
else{

    echo "
        <script>
        alert('Invalid Password');
        window.location.href='login.php';
        </script>    
    ";
}

?>