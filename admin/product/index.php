<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>

    
    <!-- Bootstrap 5 cdn flie -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- font awesome downloaded file -->
    <link rel="stylesheet" href="./fontawesome/css/all.css">

</head>
<body>
    
<!-- product form start -->
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">

        <form action="insert.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
 <p class="text-center fs-4 fw-bold text-primary">Image Details</p>
</div>

<!-- <div class="mb-3">
  <label for="name" class="form-label">Product Name:</label>
  <input type="text" class="form-control" id="name" placeholder="Enter product Name" name="pname">
</div>

<div class="mb-3">
  <label for="price" class="form-label">Product Price:</label>
  <input type="text" class="form-control" id="price" placeholder="Enter product Price" name="pprice">
</div> -->

<div class="mb-3">
  <label for="img" class="form-label">Add Image:</label>
  <input type="file" class="form-control" id="img" placeholder="Add product Image" name="pimage">
</div>

<div class="mb-3">
  <label for="category" class="form-label">Select page category</label>
  <select class="form-select" aria-label="Default select example" name="pcategory">
  <option value="gallery" >Gallery</option>
  <option value="home" disabled>Home</option>
  <option value="fishtank" disabled>Services</option>
  <option value="decoration" disabled>Pricing</option>
</select>
  <!-- <input type="files" class="form-control" id="name" placeholder="Enter product Image" name="pimage"> -->
</div>

<button class="bg-secondary fs-4 fw-bold my-3 form-control text-white" name="submit">Upload</button>
</form>

        </div>
    </div>
</div>
<!-- product form end -->

<!-- fetch data from db (table start) -->

<div class="container ">
  <div class="row">
    <div class="col-md-8 m-auto">

   
<table class="table border border-danger table-hover border my-5">


<thead class="bg-dark text-white fs-5 font-monospace text-center">
    <th>Id</th>
   
    <th>Image</th>
    <th>Category</th>
    <th>Delete</th>
    <th>Update</th>
</thead>

<tbody class="text-center">

<?php

include 'config.php';
$record =mysqli_query($myconn, "select * from ecommerce.tblproduct");


while ($row=mysqli_fetch_array($record)) {
  echo "
  <tr>
  <td>$row[id]</td>
  <td><img src='$row[pimage]' height='90px' width='200px' ></td>
  <td>$row[pcategory]</td>
  <td><a href='delete.php? IDs=$row[id]' class='btn btn-danger'>Delete</a></td>
  <td><a href='update.php? IDs=$row[id]' class='btn btn-warning'>Update</a></td>
</tr>
  ";
}

// while();
// $row=mysqli_fetch_array($record);

?>

</tbody>

</table>
</div>
  </div>
</div>

<!-- table end -->

</body>
</html>