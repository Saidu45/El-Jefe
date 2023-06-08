<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HOSPITAL MANAGEMENT INFORMATION SYSTEM</title>
      <link rel="stylesheet" href="./style.css">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <?php
      include 'nav.php';
    ?>
    
    <main>
        <img src="./img/holy_spirit.jpg" width="1200" alt="">
        <h1 class="main-head">
            Mission Of Our Hospital:
        </h1>
        <blockquote class="mission">
            To inspire hope and contribute to health and well-being by providing the best care to every patient through integrated clinical practice, education and research
        </blockquote>
    </main>

    <section>
        <div class="main-title">Important Links</div>
        <ul class="links">
          <a href="./patientlogin.php">
            <li>
              <img src="./img/patient.png" alt="login" width="50" />
              Patient Login
            </li>
          </a>
          <a href="./doctorlogin.php">
            <li>
              <img
                src="./img/doctor.png"
                alt="login"
                width="50"
              />
              Doctor Login
            </li>
          </a>
        </ul>
      </section>

      <div class="footer">   
            &copy; Copyright Holy Spirit Hospital 2023. All Rights Reserved <br>
             Designed by: Saidu T.H Kamara and Mariama M. Kamara <br>
            University of Makeni, Computer Science Department
      </div>
    </footer><!-- End Footer -->
</body>
</html>