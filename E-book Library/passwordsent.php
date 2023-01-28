<?php
  if(isset($_SESSION['user'])){
    header('location: userdash.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-BOOK</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Style5.css" rel="stylesheet">
    <link href="css/Style3.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-book"></i></div>            
                <h1 class="text-center">E-BOOK</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item"><a href="index.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Home page
                    </a></li>
                    <li class="tm-nav-item"><a href="admin.php" class="tm-nav-link">
                        <i class="fas fa-user-shield"></i>
                        Admin login
                    </a></li>
                    <li class="tm-nav-item"><a href="login.php" class="tm-nav-link">
                        <i class="fas fa-sign-in-alt"></i>
                        login or sign
                    </a></li>
                   
                    <li class="tm-nav-item"><a href="contact.php" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Contact Us
                    </a></li>
                    <li class="tm-nav-item"><a href="#" class="tm-nav-link">
                        <i class="fas fa-address-card"></i>
                        about us
                    </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            
          
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
        
        <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;"> </td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                          <a href="https://pakainfo.com" title="logo" target="_blank" rel="noopener">
                          </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;"> </td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;"> </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h2 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">You have
                                            requested to reset your password</h2>
                                        <span
                                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
check your email for message                                        </p>
                                           
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;"> </td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style="height:20px;"> </td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;"> </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>        
     
    </div>
    <script src="js/navtemp.js"></script>
</body>
</html>