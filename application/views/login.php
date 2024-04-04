<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Title -->
    <title><?php echo $title; ?></title>
    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>resources/img/favicon.ico"/>
    <!-- meta data -->
    <meta charset="UTF-8"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
    <meta name="description" content="Enterpise Infomation System"/>
    <meta name="author" content="WissPri Technologies Limited"/>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>resources/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <!-- Theme -->
    <link href="<?php echo base_url(); ?>resources/theme/login/css_login.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>resources/theme/login/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>resources/theme/login/style-responsive.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>resources/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  </head>
  <body style="background: #182121;">
    <div class="container">
      <!--<aside class="main-header">
        <div id="sidebar" class="nav-collapse ">
         sidebar menu start
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
              <a href="profile.html">
                <img src="<?php echo base_url(); ?>resources/theme/img/avatar.png" class="img-circle" width="100">
              </a>
            </p>
            <h4 class="centered">WissPri Technologies </h4>
            <h3 class="centered">Our Systems</h3>
            <li>
              <a class="active">
              <i class="fa fa-dashboard text-danger"></i>
              <span>Enterprise Information Manager</span>
              </a>
            </li>
            <li>
              <a>
                <i class=" fa fa-desktop text-danger"></i>
                <span>Stock Management System</span>
              </a>
            </li>
            <li>
              <a>
                <i class="fa fa-stethoscope text-danger"></i>
                <span>Hospital Management System</span>
              </a>
            </li>
            <li>
              <a>
                <i class=" fa fa-thumbs-up text-danger"></i>
                <span>Electronic Voting</span>
              </a>
            </li>
            <li>
              <a href="http://wisspri.com" target="_blank" class="link">
                <i class=" fa fa-users text-danger"></i>
                <span>About Us</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!--sidebar end-->
      <div class="row">
        <div class="row"><div class="col-md-12 center wiss login-header"></div></div><!--/row-->
        <div class="row">
          <div class="col-xs-8 col-md-6 center login-box" style="margin-left: 20px;">                    
            <div></div>
            <div class="card">
              <h1 class="title">Project Kadmus</h1>
              <?php
                 
                 $invalid = $this->session->flashdata('error');
                 
                 if( isset($_SESSION['attemptleft']) ) 
                 {
                   # Attempt Left Check
                   if( $_SESSION['attemptleft'] == 0) 
                   {
                     print "<h4 class='report' style='color:red'>Your Account Has Been Deactivated.<br>Contact Administrator</h4>";
                     $invalid = 0;
                     $_SESSION['error'] = "";
                   }
                   elseif( $_SESSION['attemptleft'] == 2)
                   { 
                     print "<h4 class='report' style='color:red'>Login Attempt Left: {$_SESSION['attemptleft']}";
                     $warning[1] = "<br><em><b>Your Account Would Be Deactivated upon next 2 Wrong Attempts.</b></em></h4>"; 
                   }
                   else
                     print "<h4 class='report' style='color:red'>Login Attempt Left: {$_SESSION['attemptleft']}</h4>";
                 }
                 
                 if(!isset($invalid)) 
                 {
              ?>
                   <h4 class="report">Authorized Personnels Only</h4>
                   <?php 
                      }   
                      else 
                      {    
                   ?>
                        <h4 class="report" style="color: red;text-transform: initial; font-weight:500">
                        <?php 
                            print $_SESSION['error']; 
                            # If attempt is left with 2
                            print @$warning[1]; 
                        ?>
                        </h4>
                   <?php 
                      } 
                      #Unsetting Variable
                      unset($_SESSION['error']);
                      unset($_SESSION['attemptleft']);
                   ?>
                      <form action="Login_validation" method="Post">
                        <div class="input-Lcontainer">
                          <input type="text" id="Username" name="username" required="required"/>
                          <label for="Username">Username</label>
                          <div class="bar"></div>
                        </div>
                        <div class="input-Lcontainer">
                          <input type="password" id="Password" name="passwd" required="required"/>
                          <label for="Password">Password</label>
                          <div class="bar"></div>
                        </div>
                        <div class="button-Lcontainer">
                          <button type="submit" name="login"><span>Login</span></button>
                        </div>
                      </form>
                   </div>
                   <div class="card alt">
                     <div class="toggle"></div>  
                   </div>
                 </div>
                 <!--/span-->
              </div><!--/row-->
            </div><!--/fluid-row-->
        </div>
        
        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>resources/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>resources/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- Ripples -->
        <script src="<?php echo base_url(); ?>resources/theme/js/ripples.min.js"></script>
        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/theme/js/jquery.backstretch.min.js"></script>
        <script>
            $.backstretch("<?php echo base_url(); ?>resources/dashboard.jpg", {speed: 200});
        </script>
    </body>
</html>
