
<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","test");
$sql = "SELECT user FROM users";
$user = $_SESSION['username'];






?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Peterinarian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <!-- CSS here -->
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
    <link rel="stylesheet" href="css/search.css">
  <link rel="stylesheet" href="style.css">
  <style>
        .mainpadding{
          padding-top: 40px;
         
          padding-bottom: 20px;
        
          font-size: 20px;
        }
        .img-thumbnail{
          height: 200px;
           width: 200px;
           border-radius: 50%;
        }


 
  
 
  .container-fluid {
    padding: 60px 50px;
  }



 
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #ffffff !important;
    background-color: #f4511e;
    padding: 5px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }

  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }


 

    </style>
</head>
<body>
<header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
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
                <div class="container">
                
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
                                        <!-- <li><a  href="#">home</a></li> -->
                                        <li><a href="logout.php">Sign Out</a></li>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="q.php">DSS</a></li>
                                        <li><a href="#">Manage User <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="deactivateUser.php">Deactivate User</a></li>
                                                <li><a href="activateUser.php">activate User</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Manage Pet <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="homeCopy.php">View Pet</a></li>
                                                <li><a href="add.php">Add Pet</a></li>
                                                <li><a href="update.php">Update Pet details</a></li>
                                                <li><a href="disable1.php">Disable Pet</a></li>
                                                <li><a href="delete.php">Delete Pet</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
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


    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>    Welcome <?php echo $user; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->



<?php
  // $sql = "SELECT Pname, Pdob, Psex, Pweight FROM pets";
  // $result = $db->query($sql);

  //   if ($result->num_rows > 0) {

  //       while($row = $result->fetch_assoc()) {
  //           echo "<br> Name: ". $row["Pname"]. " - Date of Birth: ". $row["Pdob"]. " sex: " . $row["Psex"]." Weight: " . $row["Pweight"]. "<br>";
  //       }
  //   } else {
  //       echo "0 results";
  //   }
?>







<main class="main-content">
 
<?php
    // if(isset($_SESSION['message']))
    // {
    //      echo "<div id='error_msg'>".$_SESSION['message']."</div>";
    //      unset($_SESSION['message']);
    // }
?>


<div class="containe">
  <div class="mainpadding">
    
    <!-- implementing search engine        -->
        <div id="wrapper">
            <div id="search_box">
            <form method="post"action="homeCopy.php" onsubmit="return do_search();">
            <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
            <input type="text" id="search_term"  class="search_input" name="search_term" placeholder="Please enter the user name or the pet name" onkeyup="do_search();">   
         
            <button  type="submit" class ="search_icon"  name="search"> <i class="fas fa-search"></i></button>
           
            </div>
            </div>
            </div>
            </form>
            </div>

            <div id="result_div"></div>
        </div>




    

    <!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
         <div class="text-center" style = "padding-top: 40px; padding-bottom: 20px; font-size: 20px;">
        <h3>list of Pets:</h3>
        <h4></h4><hr>
        </div>
    <div class="row slideanim">
        <?php 
           if(isset($_POST['search']))
           {
             
            $search_val = mysqli_real_escape_string($db,$_POST['search_term']);

            $get_result = "SELECT * FROM pets WHERE  (user LIKE ('%$search_val%') OR  Pname LIKE ('%$search_val%')) AND Pdisable = '0'";
           
            $result = mysqli_query($db,$get_result) or die( mysqli_error($db));
            
            while($row = mysqli_fetch_array($result) ){
                //   $u = $row['user'];
                $id = $row['Pid'];
                $username = $row['Pname'];
                $name = $row['Pdob'];
                $gender = $row['Psex'];
                $email = $row['Pweight'];
                $img = $row['img'];
                $image_src = "imagesuploadedf/".$img;
                $Ptype = $row['Ptype'];
                $husbandry = $row['husbandry'];
                $ownerName = $row['user'];
            ?> 
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                
                <div class="panel-heading">
                    <h1><?= $username ?></h1>
                </div>
                <div class="panel-body">
                    <img class="img-thumbnail" alt="Responsive image" src='<?php echo $image_src;  ?>' >
                    <h4><strong>Date of Birth:</strong> <?= $name ?></h4>
                    <p><strong>           Sex:</strong><?= $gender ?></p>
                    <p><strong>        Weight:</strong> <?= $email ?></p>
                    <p><strong>      Pet type:</strong> <?= $Ptype ?></p>
                    <p><strong>     husbandry:</strong> <?= $husbandry ?></p>
                    <form method="GET" action="vaccineReport.php">
                        <input type="hidden" name="Pname" value='<?= $username ?>'> 
                        <input type="hidden" name="user" value='<?= $ownerName ?>'>
                        <input class="btn btn-lg" type="submit" value = "Vaccine Report">
                    </form>
                </div>
                <div class="panel-footer">
                    <h3><?= $ownerName ?></h3>
                    <h4>Owner Name</h4>
                    <form method="GET" action="adminReminder.php">
                        <input type="hidden" name="PetType" value='<?= $Ptype ?>'>
                        <input type="hidden" name="Pname" value='<?= $username ?>'>
                        <input type="hidden" name="Pdob" value='<?= $name ?>'>  
                        <input type="hidden" name="user" value='<?= $ownerName ?>'>
                        <input class="btn btn-lg" type="submit" value = "Add Remainder">
                    </form>
                </div>
            </div>
        </div>
        <?php
      }
    }
   
      ?>
    </div>
</div>    


    <div class="container">
  <div class="mainpadding"><hr>
    <h3 align="center"> Your deleted Pets: </h3>
  <table class="table table-borderless"  style="margin-top:1rem; opacity:60%; filter: alpha(opacity=50); -moz-opacity: 0.2; -khtml-opacity: 0.2;">
        <tr style='background: whitesmoke;'>
          <th></th>
          <th>Pet Name </th>
          <th>Date of Birth</th>
          <th>Sex</th>
          <th>Weight</th>
          <th>Type</th>
          <th>Owner name</th>
          

          <!-- <th>&nbsp;</th> -->
      </tr>

      <?php 
      $query = "SELECT Pid, Pname, Pdob, Psex, Pweight,img, Ptype, husbandry, user, Pdisable FROM pets WHERE  Pdisable = '1' ";
      $result1 = mysqli_query($db,$query);
      
      while($row = mysqli_fetch_array($result1) ){
        //   $u = $row['user'];
          $id = $row['Pid'];
          $username = $row['Pname'];
          $name = $row['Pdob'];
          $gender = $row['Psex'];
          $email = $row['Pweight'];
          $img = $row['img'];
          $image_src = "imagesuploadedf/".$img;
          $Ptype = $row['Ptype'];
          $user = $row['user'];
      ?>
      <tr id='tr_<?= $id ?>'>
         <td><img class="img-thumbnail" alt="Responsive image" src='<?php echo $image_src;  ?>' ></td>
          <td><?= $username ?></td>
          <td><?= $name ?></td>
          <td><?= $gender ?></td>
          <td><?= $email ?></td>
          <td><?=  $Ptype ?></td>
          <td><?= $user ?></td>
          

      </tr>
      <?php
      }
      exit();
      ?>
    </table>
    </div>
    </div>
</main>
</div>
<footer class="footer">
            <div class="footer_top">
                <div class="container">
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
        <script type="text/javascript">
            function do_search()
            {
                var search_term=$("#search_term").val();
                $.ajax
                ({
                type:'post',
                url:'homeCopy.php',
                data:{
                search:"search",
                search_term:search_term
                },
                success:function(response) 
                {
                document.getElementById("result_div").innerHTML=response;
                }
                });
            
            return false;
            }
        </script>      

</body>
</html>
