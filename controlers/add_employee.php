<?php
    include("connection.php");
      $employeeNumber = rand(10000,800000);
      $lastName = $_POST['lastName'];
      $firstName = $_POST['firstName'];
      $officeCode = $_POST['officeCode'];
      $reportsTo = $_POST['reportsTo'];
      $jobTitle = $_POST['jobTitle'];
      if(!empty($employeeNumber) && !empty($lastName) && !empty($firstName) && !empty($officeCode) && !empty($reportsTo) && !empty($jobTitle)){
          $query = "INSERT INTO employees(employeeNumber,lastName,firstName,officeCode,reportsTo,jobTitle) 
          VALUES('$employeeNumber','$lastName','$firstName','$officeCode','$reportsTo','$jobTitle')";
          $res = mysqli_query($connection,$query);
            print($res);
          if($res){
            echo "";
          }
      }
?>
