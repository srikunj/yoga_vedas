<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>

    <!-- Bootstrap 5 cdn flie -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body class="bg-secondary ">
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3 shadow bg-white p-3 font-monospace">

        <form action="login1.php" method="POST" >

<div class="mb-3">
 <p class="text-center fs-4 fw-bold text-primary">Login:</p>
</div>

<div class="mb-3">
  <label for="name" class="form-label">Name:</label>
  <input type="text" class="form-control" id="name" placeholder="Enter username" name="username">
</div>

<div class="mb-3">
  <label for="pass" class="form-label">Password:</label>
  <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="userpass">
</div>


<button class="bg-info fs-4 fw-bold my-3 form-control text-white" name="login">Login</button>
</form>

        </div>
    </div>
</div>
</body>
</html>