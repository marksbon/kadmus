<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>

        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url(); ?>resources/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>resources/Assets/css/Page-Layout.css" rel="stylesheet" type="text/css" />
        
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <style> 
            .well {background-color: #FBFBFB;}
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-12 center login-header">
                        <h2>Welcome to <b>PAMS</b></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="well col-md-5 center login-box">
                    
						
						<?php if(validation_errors()): ?>
						  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
						<?php elseif(isset($invalid)): ?>
						   <div class='alert alert-danger'>Invalid Username and Password Combination<br> Authorized Personnel Only</div>
						<?php else:?>
						  <div class='alert alert-info bold'>Please login with your Username and Password.<br> Authorized Personnel Only</div>
						<?php endif;?>

                        <?php echo form_open('Access/login_validation','class="form-horizontal"'); ?>
                            <fieldset>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                                    <input type="text" class="form-control" placeholder="Username"  name="username" required>
                                </div>
                                <div class="clearfix"></div><br>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" name="passwd" required>
                                </div>
                                <div class="clearfix"></div>

                                <div class="clearfix"></div>

                                <p class="center col-md-5">
                                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div><!--/row-->
            </div><!--/fluid-row-->
        </div><!--/.fluid-container-->
    </body>
</html>
