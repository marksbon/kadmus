<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Admin Area</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/bootstrap/css/bootstrap.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/reserved/login/css/form-elements.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/reserved/login/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>resources/reserved/login/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>resources/reserved/login/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>resources/reserved/login/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>resources/reserved/login/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>resources/reserved/login/ico/apple-touch-icon-57-precomposed.png">

  </head>

  <body>
    <!-- Top content -->
    <div class="top-content">
      <div class="inner-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text">
              <h1><strong>Cheetah Corporation</strong></h1>
              <!--<div class="description">
                <p>
                  This is a free responsive login form made with Bootstrap. 
                </p>
              </div>-->
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
              <div class="form-top">
                <div class="form-top-left">
                  <h3>Login to System </h3>
                    <?php 

                      if($this->session->flashdata('error'))
                        print "<h3 class='label label-warning' style='color:red'>".@$this->session->flashdata('error')."</h3>";

                      elseif($this->session->flashdata('attemptleft') > 0)
                        print "<h3 class='label label-warning' style='color:red'>Invalid Login Credentials. <b>Login Attempt Left: ".@$this->session->flashdata('attemptleft').".</b></h3>";
                      
                      else
                        print "<h3 class='label label-warning' style='color:red'>Authorized Personnels Only</h3>";

                    ?>
                    <!--<p>Enter your username and password to log on:</p>-->
                </div>
                <div class="form-top-right">
                  <i class="fa fa-lock"></i>
                </div>
              </div>
              <div class="form-bottom">
                <form action="SysLogin_Validation" method="post" class="login-form">
                  <div class="form-group">
                    <label class="sr-only" for="form-username">Username</label>
                    <input type="text" name="username" placeholder="Username..." class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-password">Password</label>
                    <input type="password" name="passwd" placeholder="Password..." class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-password">Secret Code</label>
                    <input type="password" name="secretcode" placeholder="Secret Code..." class="form-control" required>
                  </div>
                  <button type="submit" class="btn" name="loginbtn">Log In!</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Javascript -->
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>resources/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>resources/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/reserved/login/js/jquery.backstretch.min.js"></script>
    <script type="text/Javascript">
      $(document).ready(function() {
        $.backstretch("<?php echo base_url(); ?>resources/reserved/login/img/backgrounds/1.jpg");
      });

    </script>
        
    <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
    <![endif]-->
  </body>
</html>