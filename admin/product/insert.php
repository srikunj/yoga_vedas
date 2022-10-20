<?php
if(isset($_POST['submit'])){

    include 'config.php';

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

// insert product
mysqli_query($myconn,"INSERT INTO `tblproduct`( `pimage`, `pcategory`)
 VALUES ('$image_des','$product_category')");

    header("location:index.php");
    // to show the data on index pages(data table same page pe hi show ho jayega)

}
?>