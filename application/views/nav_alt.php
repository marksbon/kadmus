<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>resources/theme/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $_SESSION['fullname'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
          
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
        
        #Looping
        if(!empty($rows_exploded)) 
        {
          foreach($rows_exploded As $rowname) 
          {
            $roles_details = $this->Model_Access->ret_roles_details($rowname);

            if(!empty($roles_details)) 
            {
              foreach($roles_details As $role) 
              {
                switch($role->type) 
                {
                  #Site
                  case 'Site':
                    $Site[$site_counter]['name'] = $role->name;
                    $Site[$site_counter]['link'] = $role->link;
                    $Site[$site_counter]['icon'] = $role->icon;
                    $site_counter++;
                    break;
                    
                  #Procurment
                  case 'Procurement':
                    $Procurement[$procurement_counter]['name'] = $role->name;
                    $Procurement[$procurement_counter]['link'] = $role->link;
                    $Procurement[$procurement_counter]['icon'] = $role->icon;
                    $procurement_counter++;
                    break;
                              
                  #Stores
                  case 'Stores':
                    $Stores[$stores_counter]['name'] = $role->name;
                    $Stores[$stores_counter]['link'] = $role->link;
                    $Stores[$stores_counter]['icon'] = $role->icon;
                    $stores_counter++;
                    break;
                  
                  #Accounts
                  case 'Accounts':
                    $Accounts[$account_counter]['name'] = $role->name;
                    $Accounts[$account_counter]['link'] = $role->link;
                    $Accounts[$account_counter]['icon'] = $role->icon;
                    $account_counter++;
                    break;
                              
                  #Human Resource
                  case 'Human-Resource':
                    $Human_Resource[$hum_res_counter]['name'] = $role->name;
                    $Human_Resource[$hum_res_counter]['link'] = $role->link;
                    $Human_Resource[$hum_res_counter]['icon'] = $role->icon;
                    $hum_res_counter++;
                    break;
                              
                  #Administration
                  case 'Administration':
                    #Assigning
                    $Administration[$admin_counter]['name'] = $role->name;
                    $Administration[$admin_counter]['link'] = $role->link;
                    $Administration[$admin_counter]['icon'] = $role->icon;
                    $admin_counter++;
                    break;
                              
                  #General
                  case 'General':
                    $General[$gen_counter]['name'] = $role->name;
                    $General[$gen_counter]['link'] = $role->link;
                    $General[$gen_counter]['icon'] = $role->icon;
                    $gen_counter++;
                    break;
                                
                  #Default - No Priviledges Loaded
                  default:
                    break;                                         
                }
                
                $tabs_available[] = $role->type;
              }
            }
          }
        }
      ?>
      <!--------- End of logic -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="../../Dashboard">
                <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
            </li>
            <!----- Roles Display Logic -->
            
            <!----- General ------->
            <?php 
                if(in_array('General',$tabs_available)) {
            ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o text-green"></i>
                <span>General</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <?php
                if(!empty($General)) {
                    #Looping....
                    for($i = 0; $i < count($General); $i++) {
              ?>
                <li><a href="../../<?php print $General[$i]['link']; ?>"><i class="fa <?php print $General[$i]['icon']; ?>"></i> <?php print $General[$i]['name']; ?></a></li>
              <?php
                        }
                    }
              ?>
              
              </ul>
            </li>
            <?php } ?>
            <!------ General --->
            
            <!----- Site ------->
            <?php 
                if(in_array('Site',$tabs_available)) {
            ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench text-yellow"></i>
                <span>Site</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <?php
                if(!empty($Site)) {
                    #Looping....
                    for($i = 0; $i < count($Site); $i++) {
              ?>
                <li><a href="../../<?php print $Site[$i]['link']; ?>"><i class="fa <?php print $Site[$i]['icon']; ?>"></i> <?php print $Site[$i]['name']; ?></a></li>
              <?php
                        }
                    }
              ?>
              
              </ul>
            </li>
            <?php } ?>
            <!------ Site --->
            
            <!----- Procurement ------->
            <?php 
                if(in_array('Procurement',$tabs_available)) {
            ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calculator text-aqua"></i>
                <span>Procurement</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <?php
                if(!empty($Procurement)) {
                    #Looping....
                    for($i = 0; $i < count($Procurement); $i++) {
              ?>
                <li><a href="../../<?php print $Procurement[$i]['link']; ?>"><i class="fa <?php print $Procurement[$i]['icon']; ?>"></i> <?php print $Procurement[$i]['name']; ?></a></li>
              <?php
                        }
                    }
              ?>
              
              </ul>
            </li>
            <?php } ?>
            <!------ Procurement --->
            
            <!----- Stores ------->
            <?php 
                if(in_array('Stores',$tabs_available)) {
            ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-truck text-green"></i>
                <span>Stores</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <?php
                if(!empty($Stores)) {
                    #Looping....
                    for($i = 0; $i < count($Stores); $i++) {
              ?>
                <li><a href="../../<?php print $Stores[$i]['link']; ?>"><i class="fa <?php print $Stores[$i]['icon']; ?>"></i> <?php print $Stores[$i]['name']; ?></a></li>
              <?php
                        }
                    }
              ?>
              
              </ul>
            </li>
            <?php } ?>
            <!------ Stores --->
            
            <!----- Accounts ------->
            <?php 
                if(in_array('Accounts',$tabs_available)) {
            ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-money text-aqua"></i>
                <span>Accounts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <?php
                if(!empty($Accounts)) {
                    #Looping....
                    for($i = 0; $i < count($Accounts); $i++) {
              ?>
                <li><a href="../../<?php print $Accounts[$i]['link']; ?>"><i class="fa <?php print $Accounts[$i]['icon']; ?>"></i> <?php print $Accounts[$i]['name']; ?></a></li>
              <?php
                        }
                    }
              ?>
              
              </ul>
            </li>
            <?php } ?>
            <!------ Accounts --->
            
            <!----- Human-Resource ------->
            <?php 
                if(in_array('Human-Resource',$tabs_available)) {
            ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users text-yellow"></i>
                <span>Human-Resource</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <?php
                if(!empty($Human_Resource)) {
                    #Looping....
                    for($i = 0; $i < count($Human_Resource); $i++) {
              ?>
                <li><a href="../../<?php print $Human_Resource[$i]['link']; ?>"><i class="fa <?php print $Human_Resource[$i]['icon']; ?>"></i> <?php print $Human_Resource[$i]['name']; ?></a></li>
              <?php
                        }
                    }
              ?>
              
              </ul>
            </li>
            <?php } ?>
            <!------ Human-Resource --->
            
            <!----- Administration ------->
            <?php 
                if(in_array('Administration',$tabs_available)) {
            ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs text-red"></i>
                <span>Administration</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <?php
                if(!empty($Administration)) {
                    #Looping....
                    for($i = 0; $i < count($Administration); $i++) {
              ?>
                <li><a href="../../<?php print $Administration[$i]['link']; ?>"><i class="fa <?php print $Administration[$i]['icon']; ?>"></i> <?php print $Administration[$i]['name']; ?></a></li>
              <?php
                        }
                    }
              ?>
              
              </ul>
            </li>
            <?php } ?>
            <!------ Administration --->
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>