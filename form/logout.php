<?php
    session_start();
    session_destroy();
    // header("location:./index1.php");
    echo "
    <script>
       
        window.location.href='../index.php';
    </script>
";

?>