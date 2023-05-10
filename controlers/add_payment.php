<?php
    include("connection.php");
    $customerNumber = $_POST['customerNumber'];
    $checkNumber = rand(20000,30000);
      $paymentDate = $_POST['paymentDate'];
      $amount = $_POST['amount'];

      if(!empty($customerNumber) && !empty($checkNumber) && !empty($paymentDate) && !empty($amount) ){
          $query = "INSERT INTO payments(customerNumber,checkNumber,paymentDate,amount) 
          VALUES('$customerNumber','$checkNumber','$paymentDate','$amount')";
          $res = mysqli_query($connection,$query);
            print($res);
          if($res){
            echo "";
          }

      }
?>
