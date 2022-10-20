<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-Page</title>

    <!-- Bootstrap 5 cdn flie -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

     <!-- bootstrap icon cdn -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- font awesome downloaded file -->
    <link rel="stylesheet" href="./fontawesome/css/all.css">

</head>
<?php
session_start();
if (!$_SESSION['admin']) {
  header("location:form/login.php");

  // agar session ko admin nhi milta tho vo login ke page pe hi redirect hoga]
}
?>

<body>

    <!-- navbar starting -->
    <nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>My-Yoga-Center</h1></a>

<span>

<i class="bi bi-person-circle"></i>      
Hello,<?php
echo $_SESSION['admin'];
?>
|
<!-- <i class="bi bi-box-arrow-right"></i> -->
<i class="bi bi-box-arrow-right"></i>

<a href="form/logout.php" class="text-decoration-none text-white">Logout</a>
|
<a href="../user/home.php" class="text-decoration-none text-white">UserPanel</a>

</span>   
  </div>
</nav>
    <!-- navbar ending -->

    <!-- dash start -->

    <div>
      <h2 class="text-center my-4">Dashboard</h2>
    </div>
 
    <div class="col-md-8 bg-primary text-center m-auto my-3">
      <a href="product/index.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Add Images</a>
      <a href="user.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Manage Users</a>
      <a href="#" class="text-decoration-none text-white fs-4 fw-bold px-5">Manage Orders</a>
    </div>
    <!-- dash end -->
</body>
</html>