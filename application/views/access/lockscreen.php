<!DOCTYPE html>
<html>
  <head>
        <!-- Title -->
        <title><?php echo $title; ?></title>

        <!-- The fav icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>resources/img/favicon.ico">

        <!-- meta data -->
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="School Management System">
        <meta name="author" content="Mordreds">

        <!-- Styles -->
        <link href="<?php echo base_url(); ?>resources/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resources/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>resources/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Material Files -->
        <link href="<?php echo base_url(); ?>resources/dist/css/material.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resources/dist/css/material-fullpalette.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resources/dist/css/ripples.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resources/dist/css/roboto.css" rel="stylesheet">

    </head>
  <body class="lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
      <div class="lockscreen-logo">
        <b style="color:#009688;"> KADMUS</b>
      </div>
      <!-- User name -->
      <div class="lockscreen-name"><?php print $_SESSION['fullname']; ?></div>

      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
          <img src="<?php echo base_url(); ?>resources/img/user1-128x128.jpg" alt="user image"/>
        </div>
        <!-- /.lockscreen-image -->

        <!-- lockscreen credentials (contains the form) -->
        <?php echo form_open('Access/Password_Verify','class="lockscreen-credentials"'); ?>
          <div class="input-group">
            <input type="hidden" name="username" value="<?php print $_SESSION['username']; ?>"/>
            <input type="password" class="form-control" placeholder="password" name="passwd" required style="height:36px;"/>
            <div class="input-group-btn">
              <button class="btn" type="submit" name="passwd_verify"><i class="fa fa-arrow-right text-muted"></i></button>
            </div>
          </div>
        </form><!-- /.lockscreen credentials -->

      </div><!-- /.lockscreen-item -->
      <div class="help-block text-center">
        <?php 
            if(!empty($_SESSION['error'])) {
                print "<a style='color:red;font-weight:500'>".$_SESSION['error']."</a>";
                unset($_SESSION['error']);
            }
            else
                print "Enter your password to retrieve your session";
        ?>
      </div>
      <div class='text-center'>
        OR <br />
        <a href="Logout"> Log Out </a>
      </div>
      <div class='lockscreen-footer text-center'>
        Copyright &copy; 2014.<br /> <b><a href="#" class='text-black'>All rights reserved</a></b><br>
        
      </div>
    </div><!-- /.center -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url(); ?>resources/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>resources/js/bootstrap.js" type="text/javascript"></script>
    
    <!-- Bootstrap Mat -->
        <script src="<?php echo base_url(); ?>resources/dist/js/ripples.min.js"></script>
        <script src="<?php echo base_url(); ?>resources/dist/js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>

  </body>
</html>