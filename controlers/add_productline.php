<?php
    include("connection.php");
      $productLine = $_POST['productLine'];
      $textDescription = $_POST['textDescription'];
      if(!empty($productLine) && !empty($textDescription)){
          $query = "INSERT INTO productlines(productLine,textDescription) 
          VALUES('$productLine','$textDescription')";
          $res = mysqli_query($connection,$query);
            print($res);
          if($res){
            echo "";
          }
      }
?>
