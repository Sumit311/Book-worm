<?php 

  include "db_conn.php";
  $email = input($_POST['email']);
  $pass = input($_POST['pass']);
  $query = "insert into login(email, password) values('$email', '$pass')";
  if(mysqli_query($conn, $query)) {
    echo"insertion successfull";
  }


function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit']) && isset($_FILES['my_image'])) { 
  // echo "<pre>";
  // print_r($_FILES['my_image']);
  // echo "</pre>";

  $img_name = $_FILES['my_image']['name'];
  $img_size = $_FILES['my_image']['size'];
  $tmp_name = $_FILES['my_image']['tmp_name'];
  $error = $_FILES['my_image']['error'];
  $toset = $_POST['email'];

  // print_r($toset); 

  if ($error === 0) {
    if ($img_size > 1250000000000000000000000000) {
      $em = "Sorry, your file is too large.";
        header("Location: index.php?error=$em");
    }else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = $toset.'.'.$img_ex_lc;
        $img_upload_path = 'students/'.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
        
        header("Location: real-login.html");
         echo'signed up successfully';
        exit();
        // Insert into Database
        // $sql = "INSERT INTO images(image_url) 
        //         VALUES('$new_img_name')";
        // mysqli_query($conn, $sql);
        // header("Location: view.php");
      }else {
        $em = "You can't upload files of this type";
            header("Location: index.php?error=$em");
      }
    }
  }else {
    $em = "unknown error occurred!";
    header("Location: index.php?error=$em");
  }

}else {
  header("Location: index.php");
}