<?php
   
   if($_SERVER["REQUEST_METHOD"]=="POST"){

    $recipe = $_POST['remove-recipe'];
    $conn = new mysqli("localhost","root","sdcweb","canteen");
    $sql="delete from foodie where recipe='$recipe';";
    if($conn->query($sql)){
        echo "Remove Successfully";
    }
   }

?>