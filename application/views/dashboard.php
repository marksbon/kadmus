<?php
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width jer 29 10-14-->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/bootstrap/css/bootstrap.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/font-awesome/css/font-awesome.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/theme/css/AdminLTE.css"/>
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/theme/css/skin-green.css"/>
    <!-- Customize -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/theme/added/custom.css"/>

    <style>
       .dashtab {
            border: 4px solid #ffffff; 
            /*width:90%;*/
            height: 130px;
       }
    </style>
  </head>
  
  <body class="skin-green hold-transition sidebar-collapse sidebar-mini fixed skin-green control-sidebar-open">
    <div class="wrapper" style="min-height: 500px !important;">
        <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo" data-toggle="offcanvas" role="button">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>KAD</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>PROJECT KADMUS</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                          <li><!-- start message -->
                            <a href="#">
                              <div class="pull-left">
                                <img src="<?php echo base_url(); ?>resources/theme/img/avatar.png" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                Support Team
                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li><!-- end message -->
                        </ul>
                      </li>
                      <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>resources/theme/img/avatar.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php print @$_SESSION['fullname']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>resources/theme/img/avatar.png" class="img-circle" alt="User Image">
                    <p>
                      <?php print @$_SESSION['jobtitle']; ?> <br />
                      <small><?php print @$_SESSION['department']; ?> </small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="Access/Lockscreen" class="btn btn-default btn-flat">Lock Screen</a>
                    </div>
                    <div class="pull-right">
                      <a href="Access/Logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
    </header>
    
        
            
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper" style="margin-left: 0px !important;min-height: 500px !important;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="pull-left">
            Dashboard
          </h1>
        </section>
        
        <!-- Roles & Priviledges Logic -->
          <?php

            #Exploding 
            #$rows_exploded = $session_array['rows_exploded'];
            $rows_exploded = $_SESSION['rows_exploded'];
            #Setting Counter 
            $site_counter = 0;
            $procurement_counter = 0;
            $stores_counter = 0;
            $account_counter = 0;
            $hum_res_counter = 0;
            $admin_counter = 0;
            $gen_counter = 0;
            #Looping
            foreach($rows_exploded As $rowname) {
              #Retrieving Roles Details
              $roles_details = $this->Model_Access->ret_roles_details($rowname);
              #Extracting ....
              if(!empty($roles_details)) {
                 foreach($roles_details As $role) {
                    #Extracting into Specifics
                    switch($role->type) {
                       #Site
                       case 'Site':
                          #Assigning
                          $Site[$site_counter]['name'] = $role->name;
                          $Site[$site_counter]['link'] = $role->link;
                          $Site[$site_counter]['icon'] = $role->icon;
                          $Site[$site_counter]['comment'] = $role->comment;
                          $Site[$site_counter]['bg'] = $role->bg;
                          $site_counter++;
                          break;
                       
                       #Procurment
                       case 'Procurement':
                          #Assigning
                          $Procurement[$procurement_counter]['name'] = $role->name;
                          $Procurement[$procurement_counter]['link'] = $role->link;
                          $Procurement[$procurement_counter]['icon'] = $role->icon;
                          $Procurement[$procurement_counter]['comment'] = $role->comment;
                          $Procurement[$procurement_counter]['bg'] = $role->bg;
                          $procurement_counter++;
                          break;
                          
                       #Stores
                       case 'Stores':
                          #Assigning
                          $Stores[$stores_counter]['name'] = $role->name;
                          $Stores[$stores_counter]['link'] = $role->link;
                          $Stores[$stores_counter]['icon'] = $role->icon;
                          $Stores[$stores_counter]['comment'] = $role->comment;
                          $Stores[$stores_counter]['bg'] = $role->bg;
                          $stores_counter++;
                          break;
                                                
                       #Accounts
                       case 'Accounts':
                          #Assigning
                          $Accounts[$account_counter]['name'] = $role->name;
                          $Accounts[$account_counter]['link'] = $role->link;
                          $Accounts[$account_counter]['icon'] = $role->icon;
                          $Accounts[$account_counter]['comment'] = $role->comment;
                          $Accounts[$account_counter]['bg'] = $role->bg;
                          $account_counter++;
                          break;
                                                
                       #Human Resource
                       case 'Human-Resource':
                          #Assigning
                          $Human_Resource[$hum_res_counter]['name'] = $role->name;
                          $Human_Resource[$hum_res_counter]['link'] = $role->link;
                          $Human_Resource[$hum_res_counter]['icon'] = $role->icon;
                          $Human_Resource[$hum_res_counter]['comment'] = $role->comment;
                          $Human_Resource[$hum_res_counter]['bg'] = $role->bg;
                          $hum_res_counter++;
                          break;
                                                
                       #Administration
                       case 'Administration':
                          #Assigning
                          $Administration[$admin_counter]['name'] = $role->name;
                          $Administration[$admin_counter]['link'] = $role->link;
                          $Administration[$admin_counter]['icon'] = $role->icon;
                          $Administration[$admin_counter]['comment'] = $role->comment;
                          $Administration[$admin_counter]['bg'] = $role->bg;
                          $admin_counter++;
                          break;
                                                
                       #General
                       case 'General':
                          #Assigning
                          $General[$gen_counter]['name'] = $role->name;
                          $General[$gen_counter]['link'] = $role->link;
                          $General[$gen_counter]['icon'] = $role->icon;
                          $General[$gen_counter]['comment'] = $role->comment;
                          $General[$gen_counter]['bg'] = $role->bg;
                          $gen_counter++;
                          break;
                          
                       #Default
                       default:
                          break;                                         
                    }
                    $tabs_available[] = $role->type;
                 }
              }
            }
          ?>
          <!--------- End of logic -->

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row" style="margin-top:10px;margin-left: 10px;margin-right: 10px;">
            <!-- General -->
            <?php
               if(!empty($General)) {
                  #Looping....
                  for($i = 0; $i < count($General); $i++) {
            ?>
              <div class="col-lg-3 col-sm-6 col-xs-12">
              <!-- small box -->
                <div class="small-box <?= $General[$i]['bg']; ?> dashtab">
                 <a href="<?= $General[$i]['link']; ?>" class="small-box-footer">
                   <div class="inner">
                     <h3><?= $General[$i]['name']; ?></h3>
                   </div>
                   <div class="small-box-footer">
                      <p><?= $General[$i]['comment']; ?></p>
                      <div class="">
                  <i class="<?= $General[$i]['icon']; ?>"></i>
                </div>
                   </div>
                  </a>
                </div>
            </div>
            <?php
                 }
               }
            ?>
            <!-- ./General -->
            
            <!-- Site -->
            <?php
               if(!empty($Site)) {
                  #Looping....
                  for($i = 0; $i < count($Site); $i++) {
            ?>
              <div class="col-lg-3 col-sm-6 col-xs-12">
              <!-- small box -->
                <div class="small-box <?= $Site[$i]['bg']; ?> dashtab">
                 <a href="<?= $Site[$i]['link']; ?>" class="small-box-footer">
                   <div class="inner">
                     <h3><?= $Site[$i]['name']; ?></h3>
                   </div>
                   <div class="small-box-footer">
                      <p><?= $Site[$i]['comment']; ?></p>
                      <div class="">
                  <i class="<?= $Site[$i]['icon']; ?>"></i>
                </div>
                   </div>
                  </a>
                </div>
            </div>
            <?php
                 }
               }
            ?>
            <!-- ./Site -->
            
            <!-- Procurement -->
            <?php
               if(!empty($Procurement)) {
                  #Looping....
                  for($i = 0; $i < count($Procurement); $i++) {
            ?>
              <div class="col-lg-3 col-sm-6 col-xs-12">
              <!-- small box -->
                <div class="small-box <?= $Procurement[$i]['bg']; ?> dashtab">
                 <a href="<?= $Procurement[$i]['link']; ?>" class="small-box-footer">
                   <div class="inner">
                     <h3><?= $Procurement[$i]['name']; ?></h3>
                   </div>
                   <div class="small-box-footer">
                      <p><?= $Procurement[$i]['comment']; ?></p>
                      <div class="">
                  <i class="<?= $Procurement[$i]['icon']; ?>"></i>
                </div>
                   </div>
                  </a>
                </div>
            </div>
            <?php
                 }
               }
            ?>
            <!-- ./Procurement -->
            
            <!-- Stores -->
            <?php
               if(!empty($Stores)) {
                  #Looping....
                  for($i = 0; $i < count($Stores); $i++) {
            ?>
              <div class="col-lg-3 col-sm-6 col-xs-12">
              <!-- small box -->
                <div class="small-box <?= $Stores[$i]['bg']; ?> dashtab">
                 <a href="<?= $Stores[$i]['link']; ?>" class="small-box-footer">
                   <div class="inner">
                     <h3><?= $Stores[$i]['name']; ?></h3>
                   </div>
                   <div class="small-box-footer">
                      <p><?= $Stores[$i]['comment']; ?></p>
                      <div class="">
                  <i class="<?= $Stores[$i]['icon']; ?>"></i>
                </div>
                   </div>
                  </a>
                </div>
            </div>
            <?php
                 }
               }
            ?>
            <!-- ./Stores -->
            
            <!-- Accounts -->
            <?php
               if(!empty($Accounts)) {
                  #Looping....
                  for($i = 0; $i < count($Accounts); $i++) {
            ?>
              <div class="col-lg-3 col-sm-6 col-xs-12">
              <!-- small box -->
                <div class="small-box <?= $Accounts[$i]['bg']; ?> dashtab">
                 <a href="<?= $Accounts[$i]['link']; ?>" class="small-box-footer">
                   <div class="inner">
                     <h3><?= $Accounts[$i]['name']; ?></h3>
                   </div>
                   <div class="small-box-footer">
                      <p><?= $Accounts[$i]['comment']; ?></p>
                      <div class="">
                  <i class="<?= $Accounts[$i]['icon']; ?>"></i>
                </div>
                   </div>
                  </a>
                </div>
            </div>
            <?php
                 }
               }
            ?>
            <!-- ./Accounts -->
            
            <!-- Human Resource -->
            <?php
               if(!empty($Human_Resource)) {
                  #Looping....
                  for($i = 0; $i < count($Human_Resource); $i++) {
            ?>
              <div class="col-lg-3 col-sm-6 col-xs-12">
              <!-- small box -->
                <div class="small-box <?= $Human_Resource[$i]['bg']; ?> dashtab">
                 <a href="<?= $Human_Resource[$i]['link']; ?>" class="small-box-footer">
                   <div class="inner">
                     <h3><?= $Human_Resource[$i]['name']; ?></h3>
                   </div>
                   <div class="small-box-footer">
                      <p><?= $Human_Resource[$i]['comment']; ?></p>
                      <div class="">
                  <i class="<?= $Human_Resource[$i]['icon']; ?>"></i>
                </div>
                   </div>
                  </a>
                </div>
            </div>
            <?php
                 }
               }
            ?>
            <!-- ./Human_Resource -->
            
            <!-- Administration -->
            <?php
               if(!empty($Administration)) {
                  #Looping....
                  for($i = 0; $i < count($Administration); $i++) {
            ?>
              <div class="col-lg-3 col-sm-6 col-xs-12">
              <!-- small box -->
                <div class="small-box <?= $Administration[$i]['bg']; ?> dashtab">
                 <a href="<?= $Administration[$i]['link']; ?>" class="small-box-footer">
                   <div class="inner">
                     <h3><?= $Administration[$i]['name']; ?></h3>
                   </div>
                   <div class="small-box-footer">
                      <p><?= $Administration[$i]['comment']; ?></p>
                      <div class="">
                  <i class="<?= $Administration[$i]['icon']; ?>"></i>
                </div>
                   </div>
                  </a>
                </div>
            </div>
            <?php
                 }
               }
            ?>
            <!-- ./ Administration -->
            
          </div>
          </div>
            

        </section>
            
        <!-- /.content -->
        
      </div><!-- /.content-wrapper -->
      
      <footer class="main-footer" style="margin-left: 0px !important;">
        <div class="pull-right hidden-xs">
          <b style="color: red;">Trial Version </b> 
        </div>
        <strong> &copy; 2014-2015 <a href="http://wisspri.com" target="_blank" >WissPri Technologies Limited</a>.</strong> All rights reserved.
      </footer>


      <!--*********** Notification    *********************-->
      <!-- Notification -->
    
      <script type="text/javascript">
        <?php if(!empty($_SESSION['success'])) : ?>
          /**** Success Notification ****/
          var permanotice, tooltip, _alert;
          $(function () {
            new PNotify({
                title: 'Process Successful',
                text: '<?= $this->session->flashdata("success") ?>',
                type: 'success'
            });
          });
          /**** Success Notification ****/
        <?php elseif (!empty($_SESSION['error'])) : ?>
          /**** Error Notification ****/
          var permanotice, tooltip, _alert;
          $(function () {
            new PNotify({
                title: 'An Error Occurred',
                text: '<?= $this->session->flashdata("error") ?>',
                type: 'error'
            });
          });
          /**** Error Notification ****/
          <?php elseif (validation_errors()) : ?>
          /**** Error Notification ****/
          var permanotice, tooltip, _alert;
          $(function () {
            new PNotify({
                title: 'An Error Occurred',
                text: '<?= validation_errors() ?>',
                type: 'error'
            });
          });
          /**** Error Notification ****/
        <?php endif; ?>
      </script>
      <!-- Warning Notification -->
      
    <!--*********** Notification    *********************-->

     <!-- Control Sidebar -->
     <aside class="control-sidebar control-sidebar-light control-sidebar-open">
        <!-- Create the tabs -->
       
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <h6 style="color:green;"><i class="fa fa fa-institution fa-3x pull-right"></i></h6>
          <h3 class="messag">Mawums LTD</h3>
          <p>Incorporation Date:<br/><strong>23rd Febuary 1899</strong></p>
          <p>Commencement of Business:<br/><strong>23rd Febuary 1899</strong></p>
          <p>TIN:<br/><strong>23736483746738</strong></p>
          <p>Branches :<strong>23</strong></p>
          <hr style="color:red;"></hr>
           <h6 style="color:green;">Vission<i class="fa fa-lightbulb-o fa-3x pull-right"></i></h6>
           <p><strong> To become a major chalange for foreign Contructions to Ghana and Africa</strong></p>
           <hr style="color:red;"></hr>
           <h6 style="color:green;">Mission<i class="fa fa-file-text-o fa-3x pull-right"></i></h6>
           <p><strong> To become a major chalange for foreign Contructions to Ghana and Africa</strong></p>
           <hr style="color:red;"></hr>
            <h6 style="color:green;">Handbook</h6>
            <button class="btn btn-block btn-success">Download</button>
      
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
      
        </div>
      </aside><!-- /.control-sidebar -->

 