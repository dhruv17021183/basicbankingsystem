<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>TSF Bank</title>
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.jpg" alt="logo" style="width:40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services"> Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" name ="search" type="search">Search</button>
          
        </form>
      </div>
    </div>
  </nav>
<?php
 include 'config.php';
  if(isset($_POST['submit']))
  {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $balance=$_POST['balance'];
      $contact=$_POST['contact'];
      $Acn=$_POST['Acno'];
      $sql = "INSERT INTO users (acno,name,email,contactno,balance) VALUES ('{$Acn}','{$name}','{$email}','{$contact}','{$balance}')";
      $result = mysqli_query($conn,$sql);

      if($result)
      {
          echo "<script> alert('Customer Added Successfully!');
          </script>";
      }
  }
 

?>
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="text" class="form-control" name ="name" id="exampleInputName1" aria-describedby="nameHelp" Required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email:</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1" Required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Balance:</label>
    <input type="number" class="form-control" name="balance" id="exampleInputPassword1" Required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contact:</label>
    <input type="number" class="form-control" name="contact" id="exampleInputPassword1" Required>
    <div id="passwordHelpBlock" class="form-text">
  Your Contact Number must be 10 number long, contain  numbers only, and must not contain spaces, special characters, or emoji.
</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ac No:</label>
    <input type="number" class="form-control" name="Acno" id="exampleInputPassword1" Required>
    <div id="passwordHelpBlock" class="form-text">
  Your Account Number must be 8 number long, contain  numbers, and must not contain spaces, special characters, or emoji.
</div>
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="CREATE"></input>
  <input type="reset" class="btn btn-primary" name="reset"value="RESET"></input>
  

</form>
</div>
</body>
</html>



        


