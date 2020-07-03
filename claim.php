<?php include_once("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
<link rel="stylesheet" href="css/style.css">




</head>
<body>
  <div>
    <nav class="navbar navbar-expand-md bg- cyan darken-3 navbar-dark">
  <a class="navbar-brand" href="#">Lost & Found</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lost.php">Lost</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="found.php">Found</a>
      </li> 

      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">Contact Us</a>
      </li> 

    </ul>
  </div>  
</nav>
<br>
<br>

<?php
      if ($_SERVER['REQUEST_METHOD']=='POST') 
      {
        $prno=$_POST['prno'];
        $rety=$_POST['rety'];
        $dd=$_POST['dd'];
        $place=$_POST['place'];
        $adds=$_POST['adds'];
        $fname=$_POST['fname'];
        $phone=$_POST['phone'];
        $pin=$_POST['pin'];
        $post=$_POST['post'];
        $email=$_POST['email'];
        $desp=$_POST['desp'];


        {
          $data="INSERT INTO claim(prno,rety,dd,place,adds,fname,phone,pin,post,email,desp) VALUES ('$prno', '$rety', '$dd','$place', '$adds', '$fname', '$phone', '$pin', '$post', '$email' , '$desp')";
          $result=$link->query($data);
          if ($result)
          {
            echo "<div class='alert alert-success'>
          succesfull;
          </div>" ;

            
          }
        }
        
      }


       ?>
       <div align="center">
         <h3 class="font-weight-bold text-reset">-Lost & found-</h3>
       </div>

       


       <div class=" container">
         <p>This application is for providing Lost and Found Information to L&f. Information reported under this application is not a subject matter of enquiry/investigation. False report to L&F is a punishable offence. Reporting person shall be solely responsible for any false information. Dial 100, if there is any emergency.</p>
       </div>






       <div class="container">
         <!-- Material form contact -->
<div class="card">

    <h5 class="card-header cyan darken-color white-text text-center py-4">
        <strong>Detail</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="" method="POST">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" name="prno" class="form-control">
                <label for="materialContactFormName">Product No.</label>
            </div>
            <div class="md-form mt-3">
                <input type="text" name="rety" class="form-control">
                <label for="materialContactFormName">Report Type</label>
            </div>
            <div class="md-form mt-3">
                <input type="text" name="dd" class="form-control">
                <label for="materialContactFormName">Lost / Found Date & Time</label>
            </div>
            <div class="md-form mt-3">
                <input type="text" name="place" class="form-control">
                <label for="materialContactFormName">Place of Lost / Found and Other Details (If Any)</label>
            </div>
            <div class="md-form mt-3">
                <input type="text" name="adds" class="form-control">
                <label for="materialContactFormName">Address</label>
            </div>
            <div class="md-form mt-3">
                <input type="text" name="fname" class="form-control">
                <label for="materialContactFormName">Full Name</label>
            </div>
            <div class="md-form mt-3">
                <input type="text" name="phone" class="form-control">
                <label for="materialContactFormName">Contact Number</label>
            </div>
            <div class="md-form mt-3">
                <input type="text" name="pin" class="form-control">
                <label for="materialContactFormName">Pin code</label>
            </div>
            <div class="md-form mt-3">
                <input type="text" name="post" class="form-control">
                <label for="materialContactFormName">Police Station</label>
            </div>


            <!-- E-mail -->
            <div class="md-form">
                <input type="email" name="email" class="form-control">
                <label for="materialContactFormEmail">E-mail</label>
            </div>


            <!--Message-->
            <div class="md-form">
                <textarea name="desp" class="form-control md-textarea" rows="3"></textarea>
                <label for="materialContactFormMessage">Article Description </label>
            </div>

            <!-- Copy -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialContactFormCopy">
                <label class="form-check-label" for="materialContactFormCopy">I certify that the information provided by me in above form is accurate and correct as per best of my knowledge. I understand that withholding of information or giving false information is a criminal offense and may result in disciplinary legal action against me</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="submit">Send</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form contact -->
       </div>
<br>
<br>



























 
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