
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-page</title>


  <!-- Bootstrap 5 cdn flie -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- bootstrap icon cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-md-6 mt-4 m-auto bg-white shadow border border-info">
                <p class="fs-3 text-primary fw-bold text-center my-3">User Login</p>
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <label for="uname">UserName:</label>
                        <input type="text" placeholder="Enter User Name" id="uname" class="form-control" name="name" required >
                    </div>

                    <div class="mb-3">
                        <label for="upass">Password:</label>
                        <input type="password" placeholder="Enter Password" id="upass" class="form-control"  name="password" required >
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-warning w-100 fs-4 fw-bold" name="register">Login</button>
                    </div>
                    
                    <div class="text-center"><p><a href="register.php" class="">Not registered?</a></p></div>
                </form>
            </div>
        </div>
    </div>



</body>
</html>