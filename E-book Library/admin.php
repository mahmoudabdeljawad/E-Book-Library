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
    <link href="css/Style5.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

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
                
                
                    <li class="tm-nav-item"><a href="login.php" class="tm-nav-link">
                        <i class="fas fa-sign-in-alt"></i>
                        login or signup
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
            <h2></h2>
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form action="verify.php" method="POST">
                        <h1>admin login</h1>
                  
                        <span></span>
                        <input type="email" placeholder="Email" name='email' />
                        <input type="password" placeholder="Password"name='password' />
                        <a href="forgetpass.php">Forgot your password?</a>
                        <button type="submit" name="login">Sign In</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Welcome</h1>
                            <p>Only admin can authoriz this page</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <footer>
                <p>
                   created <i class="fa fa-heart"></i> by
                    <a target="_blank" href="https://florin-pop.com">aabu team</a>
                   
                   
                </p>
            </footer>
           </main>>
    </div>

    <script src="js/navtemp.js"></script>
</body>
</html>

