<?php
session_start(); 
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 60*60,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
unset($_SESSION['login']);
session_destroy(); // destroy session
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
                        login or sign up
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
        
           
            <div class="row tm-row">
                <article class="col-12 col-md-6 tm-post">
                    
                    <a href="post.php" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="img/a2.png" alt="Image" class="img-fluid" width="304" height="236">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">The C++ Programming Language, Fourth Edition</h2>
                    </a>                    
              
                        
                 
                </article>
                <article class="col-12 col-md-6 tm-post">
                    
                    <a href="post2.PHP" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="img/a1.png" alt="Image" class="img-fluid">                            
                        </div>
                      
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">C++ Data Structures and Algorithms</h2>
                    </a>                    
              
                        
                </article>
                
           
     
    </div>
    <script src="js/navtemp.js"></script>
</body>
</html>