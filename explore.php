<?php include_once("connection.php"); ?>

<?php
// Initialize the session
session_start();

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div>
        <nav class="navbar navbar-expand-md bg- cyan darken-3 navbar-dark">
  <a class="navbar-brand" href="welcome.php">Lost & Found</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="lost.php">Lost</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="found.php">found</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">Contact Us</a>
      </li> 
     

    </ul>
  </div>  
</nav>
    </div>
    <br>

    <div>
      <div class="container">
        <h1 class="text center text-white bg- cyan darken-3" align="center"> All Lost & Found Product </h1>
        <br>
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead bg-dark>
              <th> Product No. </th>
              <th> Product </th>
              <th> Description </th>
              <th> Photo </th>
              <th> Claim </th>
            </thead>
            <tbody>
              <?php 
      $host = "localhost";
      $username = "root";
      $pass = "";
      $link = mysqli_connect($host, $username, $pass, "lostandfound");
      $res = mysqli_query($link, "SELECT * FROM image");
      while($row=mysqli_fetch_array($res))
      { 
        ?>
        <tr> 
        <td> <?php echo $row['id'];?> </td>
        <td> <?php echo $row['subject'];?> </td>
        <td> <?php echo $row['desp'];?> </td>
        <td> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="100" height="100">' ;  ?> </td>
        <td> <a href="claim.php" class="btn btn-primary btn active" role="button" aria-pressed="true">Claim This </a> </td>
        </tr>
        <?php

      }


       ?>





              
            </tbody>



            </table>
          </div>
        </div>


      
       <a href="lost.php" class="btn btn-primary btn active " role="button" aria-pressed="true" >Go Back</a>



    </div>

























    <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

  <!-- Footer Elements -->
  <div class="container">
    

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-3">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>



        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->
  <div align="center">
       <li>
           <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
      </li>
  </div>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Ashwani Chaudhary</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
        








</body>
</html>