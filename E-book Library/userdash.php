<?php 
include 'includes/session.php';
?>
<?php
  if(!isset($_SESSION['user'])){
    header('location: login.php');
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
    <link href="css/Style4.css" rel="stylesheet">
    <link href="css/Style3.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    

</head>


    <?php include 'includes/header.php'; ?>


<body class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">
    <?php include 'includes/footer.php'; ?>
	  <div class="content-wrapper">
		  
	    <div class="container">
			
	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
			<div class="row tm-row">
                <div class="col-12" style="vertical-align: top;">
                    <form method="post" class="form-inline tm-mb-80 tm-search-form" action="search.php">                
                        <input class="form-control tm-search-input" name="keyword" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
	        	<div class="col-sm-9">
                <div class="row tm-row">
            <article class="col-12 col-md-6 tm-post">
                    
                    <a href="http://localhost/itachi/project/product.php?product=C%20Programming%20Language%204th%20Edition" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="img/a2.png" alt="Image" class="img-fluid" width="304" height="236">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">The C++ Programming Language, Fourth Edition</h2>
                    </a>                    
              
                        
                 
                </article>
                <article class="col-12 col-md-6 tm-post">
                    
                    <a href="http://localhost/itachi/project/product.php?product=Data%20Structures%20and%20Algorithms" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="img/a1.png" alt="Image" class="img-fluid">                            
                        </div>
                      
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">C++ Data Structures and Algorithms</h2>
                    </a>                    
              
                        
                </article>
                
                		       		
	        	</div>
	        	
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
</div>


    
</html>
<script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }
        </script>
        <style>


.dropdown-container {
    display: none;
    color: #0CC!important;
    background-color: #0CCe !important;
    padding-left: 8px;
}
        </style>
 