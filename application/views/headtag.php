<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title><?=  $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/bootstrap/css/bootstrap.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/font-awesome/css/font-awesome.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/theme/css/AdminLTE.css"/>
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/theme/css/animate.min.css"/>
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/theme/css/skin-green.css"/>
    <!-- Customize -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/theme/added/custom.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/theme/added/smart_wizard_theme_arrows.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/theme/added/smart_wizard.css"/>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/iCheck/all.css"/>
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/select2/select2.css"/>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/datatables/dataTables.bootstrap.css"/>
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/datepicker/daterangepicker.css"/>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Ajax Functions -->
    <script type="text/javascript">
      function fetch_item(val)
      {
        return $.ajax({
          type: 'POST',
          url: 'Ajax_Load_ITM_Name',
          data: {cat_id: val},
          success: function(response)
          {
            if(response)
            {
              document.getElementById('stock').innerHTML=response;
            }
          }   
        });
      }
    </script>
    <!-- Ajax Functions -->
    <style type="text/css">
      .form-group {
        margin-bottom: 0px;
      }
    </style>
    <<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="hold-transition sidebar-collapse sidebar-mini fixed skin-green">
    <div class="pageloader"></div>
    <div class="wrapper">
      
