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
                                print "<li class='$active'><a href='#System' data-toggle='tab' style='color:red !important'>Administration</a></li>";
                                $_SESSION['active'] = "administration";
                            }
                            #administration
                            
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
                                    <div class="tab-pane fade <?php print @$admin_tab_content; ?>" id="System">
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