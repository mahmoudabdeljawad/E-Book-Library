   <header class="tm-header" id="tm-header">
       
       <div class="tm-header-wrapper">
     
           <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
               <i class="fas fa-bars"></i>
           </button>
           <div class="tm-site-header">
               <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-book"></i></div>            
               <h1 class="text-center">E-book</h1>
           </div>
           <nav class="tm-nav" id="tm-nav">      
                     
               <ul>
               <li class="tm-nav-item"><a href="userdash.php" class="tm-nav-link" style="font-size: 28px;
">
                       
                         home page
                   </a></li>
                     <div class="dropdown-container">
                
                     </div>
                     <li class="tm-nav-item">     
                       
                         <?php

                        $conn = $pdo->open();
                        try{
                        $stmt = $conn->prepare("SELECT * FROM category");
                           $stmt->execute();
                           
                           echo "<button class='dropdown-btn' style='font-size: 27px;'>&nbsp;&nbsp;categories 
                            <i class='fa fa-caret-down'></i></button>". "<div class='dropdown-container'>";
                            foreach($stmt as $row){
                            echo    "<a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a><br>
                            ";
                               }
                               echo " </div></li>";
                               }
                            catch(PDOException $e){
                           echo "There is some problem in connection: " . $e->getMessage();
                            }

             $pdo->close();

           ?>
                   </a></li>
                         <li class="tm-nav-item"><a href="#" class="tm-nav-link" style="font-size: 28px;">
                       
                       Contact Us
                   </a></li>
                   <li class="tm-nav-item"><a href="#" class="tm-nav-link" style="font-size: 28px;">
                       
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

        