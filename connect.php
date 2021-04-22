<?php

$servername= "localhost";
$username= "root";
$password= "";
$database ="web";

$conn = mysqli_connect($servername,$username,$password,$database);


    if (isset($_POST['save'])){
		$name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $department = $_POST['dept'];
       

        $sql = "INSERT INTO `form` (`name`,`email`,`phoneno`,`Department`) VALUES ('$name','$email','$phoneno','$department')";
	    	$result = mysqli_query($conn,$sql);

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Details has been submitted successfully!</strong> 
    
      </div>';
    
    }
    
    if (isset($_POST['delete'])){
           $name = $_POST['name'];
           $email = $_POST['email'];
           $phoneno = $_POST['phoneno'];
           $department = $_POST['dept'];
         
  
          $sql = "DELETE FROM `form` WHERE name='$name'";
          $result = mysqli_query($conn,$sql);
  
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Details has been deleted successfully!</strong> 
      
        </div>';
      
      }

    

?>