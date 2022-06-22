<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel=" stylesheet" href="signup.css">
</head>

<body>
<?php if (isset($_GET['error'])): ?>
  <p><?php echo $_GET['error']; ?></p>
  <?php endif ?> 
  <header><strong> SIGN UP</strong></header>
  <!-- FORM -->
  <div class="signup-form-outer">
    <div class="signup-form-inner">
      <form  action="upload.php" method="post" enctype="multipart/form-data" class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail4" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="text" class="form-control" name = "pass"id="inputPassword4" maxlength="12" minlength = "8"required>
        </div>
        <div class="col-md-2">
          <label for="inputState" class="form-label">Gender</label>
          <select id="inputState" class="form-select" required>
            <option value="">Choose...</option>
            <option require>male</option>
            <option>female</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="inputZip" minlength="10" maxlength="10">
        </div>
        <div class="col-md-6">
          <label for="inputZip" class="form-label">Upload Image</label>
          <input type="file" name = "my_image"class="form-control" id="inputZip" accept=".jpg" required>
        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              I agree that details provided are true.
            </label>
          </div>
          <div class="col-4" id="sign-up">
            <button type="submit" name="submit" id="to_submit" class="btn btn-primary">Sign up</button>
          </div>
          <div class="have-account">
            <p class="go-to-login">Already have an account? <strong><a href="real-login.html">Log in</a></strong></p>
          </div>
      </form>
    </div>
  </div>
  <!-- FORM ENDS -->
  <script>
document.getElementById("to_submit").addEventListener("click", function(){
  alert("signup successfully");
})
  </script>
</body>

</html>