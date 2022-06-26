<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Document</title> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

  <Header class="title">BOOK WORM</Header>


  <!-- nav bar begins-->
  <div style="display: flex; justify-content : center; border-radius:25px ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item" style="margin-left: 25%;">
              <a class="nav-link active" aria-current="page" href="main.php"><strong>Home</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>Categories</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>Best</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FAQs.html"><strong>FAQs</strong></a>
            </li>
          </ul>
          <div class="logout" style="margin-right: 2%;">
            <form class="d-flex" id="search-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <input class="form-control me-2" style="border-radius : 25px" type="text" name="s" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" style="border-radius : 25px" name="submit" type="submit">Search</button>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item" id="logout">
                <button class="btn btn-outline-success" id="log-out-button"><a href="index.html">Log out</a></button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <br><br><br>
  <!-- nav bar ends -->

  <!-- container for books -->
  <?php include "db_conn.php"; ?>

  <div class="container" id="book_block">
    <div class="row row-cols-4" id="book">
      <?php

      $sql = "SELECT * FROM books ORDER BY id";
      $res = mysqli_query($conn,  $sql);
      if (isset($_POST['submit'])) {
        $s = $_POST['s'];
        //  if($_SERVER["REQUEST_METHOD"] == "post" ){
        $sql = "SELECT * FROM books where book_name = '$s' ";
        $res = mysqli_query($conn,  $sql);
        // }
      }
      if (mysqli_num_rows($res) > 0) {
        while ($images = mysqli_fetch_assoc($res)) {  ?>

          <div class="col">
            <a href="Books/<?= $images['book_url'] ?>.pdf">
              <img src="Books/<?= $images['image_url'] ?>.jpg">
              <p style="color : #EDF5E1; font-size : 16px; margin-top : 10px; text-align: center;
             width: 200px; height : 35px"><?= $images['book_name'] ?></p>
            </a>
          </div>

      <?php }
      } else {
        echo "not found";
      } ?>
    </div>
  </div>

  <?
  ?>

  <style>
    /* body */
    body {
      background-color: #1F2833;
    }

    /* header */
    header {
      margin-top: 2%;
      margin-bottom: 2%;

    }

    .title {
      text-align: center;
      font-size: 70px;
      font-family: 'Times New Roman', Times, serif;
      background-color: #1F2833;
      color: #EDF5E1;

    }

    /* nav bar */
    #nav {
      width: 85%;
      border-radius: 25px;
    }

    /* right side of nav bar */
    .logout {
      display: flex;
    }

    /* spacing between search and log out button */
    .btn-outline-success {
      margin-right: 10px
    }

    /* button link color  */
    a {
      text-decoration: none;
      color: red;
    }

    a:hover {
      /* background-color: rgb(145, 201, 145); */
      color: red;
    }

    #logout:hover {
      color: red;
      /* background-color: rgb(197, 237, 197); */
    }

    #book {
      margin-top: 2%;
      padding: 2%;
      margin-left: 2%;

    }

    .col {
      margin-bottom: 5%;
      /* padding: 5%; */
    }

    #log-out-button {
      border-radius: 25px;
    }
  </style>
  <!-- <link rel="stylesheet" href="main.css"> -->

</body>

</html>
