<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-page</title>

    <!-- Bootstrap 5 cdn flie -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

     <!-- bootstrap icon cdn -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>

<?php

        // include 'mystore.php';
        $myconn=mysqli_connect('localhost','root','','ecommerce');

        $record= mysqli_query($myconn,"SELECT * FROM ecommerce.tbluser ");

        $user_count=mysqli_num_rows($record);


?>



<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            
        <h1 class="text-center mb-3 fw-bold text-danger fs-1 ">User Information</h1>
   
    <table class="table table-secondary table-bordered">
        <thead class="text-center">
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Delete</th>
        </thead>

        <tbody class="text-center text-primary">
            <?php

                $i=0;
              while( $row = mysqli_fetch_array($record)) {
                echo "
                <tr>
                    <td> ";?> <?php echo ++$i; ?> <?php echo " </td>
                    <td>$row[userName]</td>
                    <td>$row[Email]</td>
                    <td>$row[Number]</td>
                    <td><a href='delete_user.php? id=$row[id]' class='btn btn-outline-danger'>Delete</a></td>
                </tr>
                ";
               }
            ?>
        </tbody>
    </table>
    </div>
<br>
    <div class="col-md-10 mt-5 pr-5 text-center">
        <h3 class="text-dark text-decoration-underline" >Total User's<h3>
        <h1 class="bg-dark text-white"><?php echo $user_count ?></h1>
    </div>

    </div>
</div>    
</body>
</html>

