<?php
    include("connection.php");
      $officeCode = rand(20,2000);
      $city = $_POST['city'];
      $state = $_POST['state'];
      $country = $_POST['country'];

      if(!empty($officeCode) && !empty($city) && !empty($state) && !empty($country)){
        $query = "INSERT INTO offices(officeCode,city,state,country) 
        VALUES('$officeCode','$city','$state','$country')";
          $res = mysqli_query($connection,$query);
            print($res);
          if($res){
            echo "";
          }

      }
?>
