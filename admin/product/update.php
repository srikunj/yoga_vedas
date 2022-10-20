<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>

    
    <!-- Bootstrap 5 cdn flie -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- font awesome downloaded file -->
    <link rel="stylesheet" href="./fontawesome/css/all.css">

</head>
<body>

<?php
    $id=$_GET['IDs'];
    include 'config.php';
    // echo $id;
    $record=mysqli_query($myconn,"SELECT * FROM tblproduct WHERE id = $id");

    $data=mysqli_fetch_array($record);



?>
    
<!-- product form start -->
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">

        <form action="update.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
 <p class="text-center fs-4 fw-bold text-warning">Update Image</p>
</div>

<!-- <div class="mb-3">
  <label for="name" class="form-label">Product Name:</label>
  <input type="text" class="form-control" id="name" placeholder="Enter product Name" value="" name="pname">
</div> -->

<!-- <div class="mb-3">
  <label for="price" class="form-label">Product Price:</label>
  <input type="text" class="form-control" id="price" placeholder="Enter product Price" value="" name="pprice">
</div> -->

<div class="mb-3">
  <label for="img" class="form-label">Add Image:</label>
  <input type="file" class="form-control" id="img" placeholder="Add product Image"  name="pimage"><br>
  <img src="<?php echo $data['pimage']?>" alt="" height="100px">
</div>

<div class="mb-3">
  <label for="category" class="form-label">Select page category</label>
  <select class="form-select" aria-label="Default select example" name="pcategory">
  <option value="gallery" >Gallery</option>
  <option value="home" disabled>Home</option>
  <option value="fishtank" disabled>Services</option>
  <option value="decoration" disabled>Pricing</option>
  <!-- <option value="home">Home</option> -->
  <!-- <option value="fishtank">Fish Tank</option>
  <option value="fishes">Fishes</option>
  <option value="fishfood">Food&Accessories</option>
  <option value="birds">Birds</option>
  <option value="decoration">Decoration Item</option> -->
</select>
  <!-- <input type="files" class="form-control" id="name" placeholder="Enter product Image" name="pimage"> -->
</div>
<input type="hidden" value="<?php echo $data['id']?>" name="id">
<button class="bg-warning fs-4 fw-bold my-3 form-control text-white" name="update">Update</button>
</form>

        </div>
    </div>
</div>
<!-- product form end -->

<!-- Update query -->
<?php
    if (isset($_POST['update'])) {
        $id=$_POST['id'];
        // $product_name=$_POST['pname'];
        // $product_price=$_POST['pprice'];
        $product_image=$_FILES['pimage'];
    
        // print_r($product_image);
        $image_loc=$_FILES['pimage']['tmp_name'];
        // image ki location
        $image_name=$_FILES['pimage']['name'];
        // image ki name
    
        $image_des="uploadimage/".$image_name;
        move_uploaded_file($image_loc,"uploadimage/".$image_name);
        
        
        $product_category=$_POST['pcategory'];

        include 'config.php';
        mysqli_query($myconn,"UPDATE `tblproduct` SET `pimage`='$image_des',`pcategory`='$product_category' WHERE id = $id ");

        header("location:index.php");
    }
?>



<!--  -->

















