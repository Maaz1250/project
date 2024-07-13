<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}

      if(!$loggedin){
      echo '    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-dark sticky-top p-0">
      <a href="home.php" class="navbar-brand bg-dark d-flex align-items-center px-4 px-lg-5">
          <h2 class="mb-2 text-white" style="background-color: black;">BACKPACKERS</h2>
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="home.php" class="nav-item nav-link active">Home</a>
              <a href="about.html" class="nav-item nav-link">About</a>
              <div class="nav-item dropdown">
                  <a href="pages.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Explore backpackers</a>
                  <div class="dropdown-menu fade-up m-0">
                      <a href="goa.html" class="dropdown-item">GOA</a>
                      <a href="" class="dropdown-item">HIMACHAL PRADESH</a>
                      <a href="" class="dropdown-item">RAJASTHAN</a>
                      <a href="" class="dropdown-item">KERALA</a>
                      <a href="" class="dropdown-item">MEGHALAYA</a>
                      <a href="" class="dropdown-item">UTTAR PRADESH</a>
                  </div>
              </div>
              <a href="hotel.php" class="nav-item nav-link">Hotels</a>
                <a href="login.php" class="nav-item nav-link">Login</a>
              <a href="registration.php" class="nav-item nav-link">Register</a>
          </div>
      </div>
  </nav>';
      }
      if($loggedin){
      echo '        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-dark sticky-top p-0">
      <a href="home.php" class="navbar-brand bg-dark d-flex align-items-center px-4 px-lg-5">
          <h2 class="mb-2 text-white" style="background-color: black;">BACKPACKERS</h2>
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="home.php" class="nav-item nav-link active">Home</a>
              <a href="about.html" class="nav-item nav-link">About</a>
              <div class="nav-item dropdown">
                  <a href="pages.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Explore backpackers</a>
                  <div class="dropdown-menu fade-up m-0">
                      <a href="goa.html" class="dropdown-item">GOA</a>
                      <a href="" class="dropdown-item">HIMACHAL PRADESH</a>
                      <a href="" class="dropdown-item">RAJASTHAN</a>
                      <a href="" class="dropdown-item">KERALA</a>
                      <a href="" class="dropdown-item">MEGHALAYA</a>
                      <a href="" class="dropdown-item">UTTAR PRADESH</a>
                  </div>
              </div>
              <a href="hotel/hotel.php" class="nav-item nav-link">Hotels</a>
                <a href="logout.php" class="nav-item nav-link">Logout</a>

          </div>
      </div>
  </nav>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
</body>
</html>