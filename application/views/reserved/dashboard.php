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

    <style>
       .dashtab {
            border: 4px solid #ffffff; 
            /*width:90%;*/
            height: 130px;
       }
    </style>
  </head>
  
  <body class="skin-green">
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
          <?php 
            if(isset($_SESSION['success']) && !empty($_SESSION['success'])) {
          ?>
          <div class="pull-right">
            <div class="alert alert-success alert-dismissable gh">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    <i class="fa fa-times"></i>
                </button>
                 <?= "<em>".$_SESSION['success']."</em>"; unset($_SESSION['success']); ?>
            </div>
          </div>
          <?php 
                }
            if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
          ?>
          <div class="pull-right">
            <div class="alert alert-danger alert-dismissable gh">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    <i class="fa fa-times"></i>
                </button>
                <?php 
                    if(validation_errors())
                        print "<em>".validation_errors()."</em>";
                    else {
                        print "<em>".$_SESSION['error']."</em>";
                        unset($_SESSION['error']);
                        }
                ?>
            </div>
          </div>
          <?php
                }
          ?>
        </section>
        
        <!-- Roles & Priviledges Logic -->
          <?php
            #Exploding 
            $rows_exploded = $_SESSION['rows_exploded'];
            #Setting Counter 
            $site_counter = 0;
            $procurement_counter = 0;
            $stores_counter = 0;
            $account_counter = 0;
            $hum_res_counter = 0;
            $admin_counter = 0;
            $gen_counter = 0;
            $sys_counter = 0;
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

                        #System
                       case 'Reserved':
                          #Assigning
                          $System[$sys_counter]['name'] = $role->name;
                          $System[$sys_counter]['link'] = $role->link;
                          $System[$sys_counter]['icon'] = $role->icon;
                          $System[$sys_counter]['comment'] = $role->comment;
                          $System[$sys_counter]['bg'] = $role->bg;
                          $sys_counter++;
                          break;
                          
                       #Default
                       default:
                          #No Priviledges Loaded
                          $_SESSION['error'] = "No Role(s) Set. Please Contact The Administrator.";
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
  <!-- Info boxes -->
  <!-- /.row -->
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
            <ul class="nav nav-tabs pull-left" style="margin-left: 20%;border-radius:5px">
                <!----- Roles Display Logic -->
                <?php
                    #General
                    if(in_array('General',$tabs_available)) {
                        #Activate General Tab
                        print "<li class='active'><a href='#General' data-toggle='tab'>General</a></li>";
                        $_SESSION['active'] = "General";
                        $gen_tab_content = "active in";
                    }
                    #General
                            
                    #Sites
                    if(in_array('Site',$tabs_available)) {
                        #Disabling Activate
                        if(isset($_SESSION['active']) && ($_SESSION['active'] == "General") ) 
                            $active = "";
                        #Activate Class 
                        else {
                            $active = "active";
                            $sites_tab_content = "active in";
                        }
                        print "<li class='$active'><a href='#Sites' data-toggle='tab'>Site</a></li>";
                        $_SESSION['active'] = "Site";
                        
                    }
                    #Sites
                    
                    #Procurement
                    if(in_array('Procurement',$tabs_available)) {
                        #Disabling Activate
                        if(isset($_SESSION['active']) && $_SESSION['active'] == "Site") 
                            $active = "";
                        #Activate Class 
                        else {
                            $active = "active";
                            $pro_tab_content = "active in";
                        }
                        #Activate Procurement Tab
                        print "<li class='$active'><a href='#Procurement' data-toggle='tab'>Procurement</a></li>";
                        $_SESSION['active'] = "Procurement";
                    }
                    #Procurement
                    
                    #Stores
                    if(in_array('Stores',$tabs_available)) {
                        #Disabling Activate
                        if(isset($_SESSION['active']) && ($_SESSION['active'] == "Site") || $_SESSION['active'] =="Procurement") 
                            $active = "";
                        #Activate Class 
                        else {
                            $active = "active";
                            $stores_tab_content = "active in";
                        }
                        #Activate Stores Tab
                        print "<li class='$active'><a href='#Store' data-toggle='tab'>Stores</a></li>";
                        $_SESSION['active'] = "Stores";
                    }
                    #Stores
                    
                    #Accounts
                    if(in_array('Accounts',$tabs_available)) {
                        #Disabling Activate
                        if(isset($_SESSION['active']) && ($_SESSION['active'] == "Site") || $_SESSION['active'] =="Procurement" || $_SESSION['active'] == "Stores") 
                            $active = "";
                        #Activate Class 
                        else {
                            $active = "active";
                            $accounts_tab_content = "active in";
                        }
                        #Activate Accounts Tab
                        print "<li class='$active'><a href='#Finance' data-toggle='tab'>Finance & Accounts</a></li>";
                        $_SESSION['active'] = "Accounts";
                    }
                    #Accounts
                    
                    #Human-Resource
                    if(in_array('Human-Resource',$tabs_available)) {
                        #Disabling Activate
                        if(isset($_SESSION['active']) && ($_SESSION['active'] == "Site") || $_SESSION['active'] =="Procurement" || $_SESSION['active'] == "Stores" || $_SESSION['active'] == "Accounts") 
                            $active = "";
                        #Activate Class 
                        else {
                            $active = "active";
                            $hum_res_tab_content = "active in";
                        }
                        #Activate Human-Resource Tab
                        print "<li class='$active'><a href='#HR' data-toggle='tab'>Human Resource</a></li>";
                        $_SESSION['active'] = "Human-Resource";
                    }
                    #Human-Resource
                    
                    #administration
                    if(in_array('Administration',$tabs_available)) {
                        #Disabling Activate
                        if(isset($_SESSION['active']) && ($_SESSION['active'] == "Site") || $_SESSION['active'] =="Procurement" || $_SESSION['active'] == "Stores" || $_SESSION['active'] == "Accounts" || $_SESSION['active'] == "Human-Resource" ) 
                            $active = "";
                        #Activate Class 
                        else {
                            $active = "active";
                            $admin_tab_content = "active in";
                        }
                        #Activate administration Tab
                        print "<li class='$active'><a href='#Admin' data-toggle='tab' style='color:red !important'>Administration</a></li>";
                        $_SESSION['active'] = "administration";
                    }
                    #administration

                    #system
                    if(in_array('Reserved',$tabs_available)) {
                        #Disabling Activate
                        if(isset($_SESSION['active']) && ($_SESSION['active'] == "General" || $_SESSION['active'] == "Site") || $_SESSION['active'] =="Procurement" || $_SESSION['active'] == "Stores" || $_SESSION['active'] == "Accounts" || $_SESSION['active'] == "Human-Resource" || $_SESSION['active'] == "Administration") 
                            $active = "";
                        #Activate Class 
                        else {
                            $active = "active";
                            $system_tab_content = "active in";
                        }
                        #Activate administration Tab
                        print "<li class='$active'><a href='#System' data-toggle='tab' style='color:red !important'>System</a></li>";
                        $_SESSION['active'] = "system";
                    }
                    #system
                    
                ?>
                <!-----/ Roles Display Logic -->
                        
                  </ul>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="panel-body">
                         <!-- Nav tabs -->

                          <!-- Tab panes -->
                          <div class="tab-content">
                              <!---------- General Roles Display ------>
                              <div class="tab-pane fade <?php print @$gen_tab_content; ?>" id="General">
                                 <div class="row">
                                    <?php
                                       if(!empty($General)) {
                                          #Looping....
                                          for($i = 0; $i < count($General); $i++) {
                                    ?>
                                    
                                    <div class="col-lg-3 col-xs-6">
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
                                 </div>
                              </div>
                              <!---------- General Roles Display ------>
                              
                                <!---------- Site Roles Display ------>
                                <div class="tab-pane fade <?php print @$sites_tab_content; ?>" id="Sites">
                                  <div class="row">
                                            <?php
                                                if(!empty($Site)) {
                                                    #Looping....
                                                    for($i = 0; $i < count($Site); $i++) {
                                                        //print_r($pro_tab['name']);
                                            ?>
                                        <div class="col-lg-3 col-xs-6">
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
                                                #No Tabs Registered
                                                else {
                                                    print "<div style='text-align:center;padding:30px;font-size:25px;color:#DD4B39;'>No Role(s) Assigned </div>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <!---------- Site Roles Display ------>
                                    
                                    <!---------- Procurement Roles Display ------>
                                  <div class="tab-pane fade <?php print @$pro_tab_content; ?>" id="Procurement">
                                      <div class="row">
                                            <?php
                                                if(!empty($Procurement)) {
                                                    #Looping....
                                                    for($i = 0; $i < count($Procurement); $i++) {
                                                        //print_r($pro_tab['name']);
                                            ?>
                                        <div class="col-lg-3 col-xs-6">
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
                                        </div>
                                  </div>
                                    <!---------- Procurement Roles Display ------>
                                    
                                    <!---------- Stores Roles Display ------>
                                    <div class="tab-pane fade <?php print @$stores_tab_content; ?>" id="Store">
                                      <div class="row">
                                            <?php
                                                if(!empty($Stores)) {
                                                    #Looping....
                                                    for($i = 0; $i < count($Stores); $i++) {
                                                        //print_r($pro_tab['name']);
                                            ?>
                                        <div class="col-lg-3 col-xs-6">
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
                                        </div>
                                  </div>
                                    <!---------- Stores Roles Display ------>
                                    
                                    <!---------- Accounts Roles Display ------>
                                  <div class="tab-pane fade <?php print @$accounts_tab_content; ?>" id="Finance">
                                      <div class="row">
                                            <?php
                                                if(!empty($Accounts)) {
                                                    #Looping....
                                                    for($i = 0; $i < count($Accounts); $i++) {
                                                        //print_r($pro_tab['name']);
                                            ?>
                                        <div class="col-lg-3 col-xs-6">
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
                                        </div>
                                  </div>
                                    <!---------- Accounts Roles Display ------>
                                    
                                    <!---------- Human Resource Roles Display ------>
                                  <div class="tab-pane fade <?php print @$hum_res_tab_content; ?>" id="HR">
                                      <div class="row">
                                            <?php
                                                if(!empty($Human_Resource)) {
                                                    #Looping....
                                                    for($i = 0; $i < count($Human_Resource); $i++) {
                                                        //print_r($pro_tab['name']);
                                            ?>
                                        <div class="col-lg-3 col-xs-6">
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
                                        </div>
                                  </div>
                                    <!---------- Accounts Roles Display ------>
                                    
                                    <!---------- Administration Roles Display ------>
                                    <div class="tab-pane fade <?php print @$admin_tab_content; ?>" id="Admin">
                                      <div class="row">
                                            <?php
                                                if(!empty($Administration)) {
                                                    #Looping....
                                                    for($i = 0; $i < count($Administration); $i++) {
                                                        //print_r($pro_tab['name']);
                                            ?>
                                        <div class="col-lg-3 col-xs-6">
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
                                        </div>
                                  </div>
                                    <!---------- Administration Roles Display ------>

                                  <!---------- System Roles Display ------>
                                    <div class="tab-pane fade <?php print @$system_tab_content; ?>" id="System">
                                      <div class="row">
                                            <?php
                                                if(!empty($System)) {
                                                    #Looping....
                                                    for($i = 0; $i < count($System); $i++) {
                                                        //print_r($pro_tab['name']);
                                            ?>
                                        <div class="col-lg-3 col-xs-6">
                                              <!-- small box -->
                                                <div class="small-box <?= $System[$i]['bg']; ?> dashtab">
                                                 <a href="<?= $System[$i]['link']; ?>" class="small-box-footer">
                                                   <div class="inner">
                                                     <h3><?= $System[$i]['name']; ?></h3>
                                                   </div>
                                                   <div class="small-box-footer">
                                                      <p><?= $System[$i]['comment']; ?></p>
                                                      <div class="">
                                                  <i class="<?= $System[$i]['icon']; ?>"></i>
                                                </div>
                                                   </div>
                                                  </a>
                                                </div>
                                            </div>
                                            <?php
                                                
                                                    }
                                                }
                                            ?>
                                        </div>
                                  </div>
                                    <!---------- Administration Roles Display ------>

                              </div>
                          </div>
                          <!-- /.panel-body -->
                    <!-- /.panel -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->

                  <!-- /.row -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <div class="panel" style="background-color: #EEE;">
                              <a href="#">
                                 <div class="panel-heading">
                                    <div class="row text-center"><i class="fa fa-mobile-phone fa-5x black-icon"></i></div>
                                 </div>
                                 <div class="panel-footer">
                                    <span class="pull-left">Internal Messaging</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right text-default"></i></span>
                                    <div class="clearfix"></div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="panel" style="background-color: #EEE;">
                              <a href="#">
                                 <div class="panel-heading">
                                    <div class="row text-center"><i class="fa fa-envelope fa-5x black-icon"></i></div>
                                 </div>
                                 <div class="panel-footer">
                                    <span class="pull-left">SMS Alert</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right text-default"></i></span>
                                    <div class="clearfix"></div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     <div class="col-md-3">
                          <div class="panel ">
                              <div class="panel-heading">
                                  <div class="row text-center">
                                      <i class="fa fa-users fa-5x"></i>
                                  </div>
                              </div>
                              <a href="#">
                                  <div class="panel-footer">
                                      <span class="pull-left">Pending</span>
                                      <span class="pull-right"><i class="fa fa-arrow-circle-right text-default"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                              </a>
                          </div>
                     </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>

        </section>
        
      </div><!-- /.content-wrapper -->
      
      <footer class="main-footer" style="margin-left: 0px !important;">
        <div class="pull-right hidden-xs">
          <b style="color: red;">Trial Version </b> 
        </div>
        <strong> &copy; 2014-2015 <a href="http://wisspri.com" target="_blank" >WissPri Technologies Limited</a>.</strong> All rights reserved.
      </footer>

 