
<?php
    $id=$_GET['IDs'];


    include 'config.php';
    $record=mysqli_query($myconn,"DELETE FROM ecommerce.tblproduct WHERE id = $id ");

    header("location:index.php");

?>