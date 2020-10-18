<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","test");
if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);  
    $query = "SELECT * FROM users WHERE user = '$username'";
    $result=mysqli_query($db,$query);
      if($result)
      {
   
        if( mysqli_num_rows($result) > 0)
        {
            $_SESSION['status']="Username already exists";
            $_SESSION['status_code'] = "warning" ;
            header("location:register.php");  //redirect home page
            die();
                // echo '<script language="javascript">';
                // echo 'alert("Username already exists")';
                // echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                $password=md5($password); //hash password before storing for security purposes
                $sql="INSERT INTO users(user,  pass , email) VALUES('$username','$password', '$email' )"; 
                mysqli_query($db,$sql);  
                // $_SESSION['status']="You are now logged in"; 
                // $_SESSION['status_code'] = "success" ;
                $_SESSION['username']=$username;
                header("location:home.php");  //redirect home page
                die();
            }
            else
            {
                $_SESSION['status']="The two password do not match";
                $_SESSION['status_code'] = "warning" ; 
                header("location:register.php");  //redirect home page
                die();  
            }
          }
      }
      
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>peterinarian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/style1.css">
</head>
<body>
<header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class = "container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"><i class="fa fa-phone"></i> 1300 WILD VET (1300 9453 838)</a></li>
                                    <!-- <li><a href="#">Mon - Sat 10:00 am - 7:00 am</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 ">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class = "container">
                  <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="start.html">
                                    <img src="img/logoSmall.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                              <nav>
                                  <ul id="navigation">
                                        <li><a  href="start.html">home</a></li>
                                        <li><a href="login.php">Sign in</a></li>
                                        <li><a href="about.html">About us</a></li>
                                        <!-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="service.html">services</a></li> -->
                                        <li><a href="contact.html">Contact</a></li>
                                  </ul>
                              </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
    </header>
    <div class="heading">
  <div class="bradcam_area breadcam_bg">        
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Sign up</h3>
                    </div>
                </div>
        </div>
  </div>
</div>
<!-- <div class="container">
  <hgroup>
    <h1 class="site-title" style="text-align: center; color: green;">Peterinarian</h1><br>
  </hgroup>

<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav center">
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>

    </div>
  </div>
</nav> -->


<main class="main">

 <!-- <div class="col-md-6 col-md-offset-2"> -->

<?php
      if(isset($_SESSION['status']) && $_SESSION['status'] != '' ){
            
   ?>
      <script>

         swal({
             title: '<?= $_SESSION['status'] ?>',
            //  text: "You clicked the button!",
             icon: '<?= $_SESSION['status_code'] ?>',
            button: "ok!",
         });
    
      </script>
   <?php
      unset($_SESSION['status']);
      }
   ?>  
<section class="signup">
                <div class="container-sm">
                  <div class="signin-content">
                    <div class="signin-form">
                      <form method="post" action="register.php" id="register-form">
                      <h2 class="form-title">Sign up</h2>  
                      <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>     
                               <input type="text" name="username" class="textInput" id="name" placeholder="Your Name">
                      </div>

                      <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>    
                                 <input type="email" name="email" class="textInput" id="email" placeholder="Your Email">
                      </div>     
                      <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>   
                               <input type="password" name="password" class="textInput" id="pass" placeholder="Password">
                       </div>     
                       <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>           
                                 <input type="password" name="password2" class="textInput" id="re_pass" placeholder="Repeat your password">
                        </div>    
                        <div class="form-group form-button">
                                <input type="submit"name="register_btn" id="signup" class="form-submit" value="Register"/>
                        </div>     

                      </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                  </div>
               </div>
          
</section>      


</main>
  </div>
<div class="contact_anipat anipat_bg_1">
        <div class = ".container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact_text text-center">
                        <div class="section_title text-center">
                            <h3>Why go with Peterinarian?</h3>
                            <p>The moment you enter our clinic, your pet will be treated as a member of our extended family.</p>
                        </div>
                        <div class="contact_btn d-flex align-items-center justify-content-center">
                            <a href="contact.html" class="boxed-btn4">Contact Us</a>
                            <p>Or <a href="#"><i class="fa fa-phone"></i> 1300 WILD VET (1300 9453 838)</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <footer class="footer">
        <div class="footer_top">
            <div class= "container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact Us
                            </h3>
                            <ul class="address_line">
                                <li><i class="fa fa-envelope"></i> admin@thewildvet.com.au</li>
                                <li><a href="#"><i class="fa fa-phone"></i> 1300 WILD VET (1300 9453 838)</a></li>
                                <li>22a Bridge Road, Glebe, NSW, 2037 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Our Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pet Health Checks</a></li>
                                <li><a href="#">Pet Vaccinations </a></li>
                                <li><a href="#">Pet Nail Clipping</a></li>
                                <li><a href="#">Microchipping</a></li>
                                <!-- <li><a href="#">Dog Insurance</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Quick Link
                            </h3>
                            <ul class="links">
                                <li><a href="#">About Us</a></li>
                                <!-- <li><a href="#"></a></li> -->
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Login info</a></li>
                                <!-- <li><a href="#">Knowledge Base</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-5 col-lg-2 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logoSmall.png" alt="">
                                </a>
                            </div>
                            <p class="address_text"> 22a Bridge Road, Glebe, NSW, 2037 
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

           <!-- JS here -->
           <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>
    
        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
    
        <script src="js/main.js"></script>
        <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
        </script>

</body>
</html>




