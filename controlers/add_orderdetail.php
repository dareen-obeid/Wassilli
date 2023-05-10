<?php
    include("connection.php");
      $orderNumber = $_POST['orderNumber'];;
      $productCode = $_POST['productCode'];
      $quantityOrdered = $_POST['quantityOrdered'];
      $priceEach = $_POST['priceEach'];
      $orderLineNumber = $_POST['orderLineNumber'];
      if(!empty($orderNumber) && !empty($productCode) && !empty($quantityOrdered) && !empty($priceEach) && !empty($orderLineNumber)){
          $query = "INSERT INTO orderdetails(orderNumber,productCode,quantityOrdered,priceEach,orderLineNumber) 
          VALUES('$orderNumber','$productCode','$quantityOrdered','$priceEach','$orderLineNumber')";
          $res = mysqli_query($connection,$query);
            print($res);
          if($res){
            echo "";
          }
      }
?>
