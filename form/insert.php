

<?php
    $conn=mysqli_connect('localhost','root','','ecommerce');
    // $myconn=mysqli_connect('localhost','root','Thispc@123','ecommerce');
    if (isset($_POST['register'])) {
        $Name=$_POST['uname'];
        $Email=$_POST['uemail'];
        $Number=$_POST['unumber'];
        $Password=$_POST['upass'];


        

        $dup_email=mysqli_query($conn,"SELECT * FROM ecommerce.tbluser WHERE Email = '$Email' ");
        $dup_uname=mysqli_query($conn,"SELECT * FROM ecommerce.tbluser WHERE userName = '$Name' ");
        
        if (mysqli_num_rows( $dup_email )) {
            echo "
                <script>
                    alert('This Email is already taken');
                    window.location.href='register.php';
                </script>
            ";
        }
        if (mysqli_num_rows( $dup_uname )) {
            echo "
                <script>
                    alert('This UserName is already taken');
                    window.location.href='register.php';
                </script>
            ";
        }
        else{
            mysqli_query($conn,"INSERT INTO `tbluser`(`userName`, `Email`, `Number`, `Password`)
            VALUES ('$Name','$Email','$Number','$Password')");

                echo "
                <script>
                    alert('Registered Successfully');
                    window.location.href='login.php';
                </script>
                ";
        }
        
    }
?>

