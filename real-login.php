<?php 

  include "db_conn.php";
  $email = input($_POST['email']);
  $pass = input($_POST['pass']);
  $query = "select * from login where email = '$email' AND password = '$pass'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
          header("Location: main.php");
          echo"login successfull";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
  // if(mysqli_num_rows($result) != 0) {
  //   header("Location: main.php");
  //   echo"login successfull";
  // }
  // else {
  //   echo $email."<br>".$pass;
  // }
  function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>