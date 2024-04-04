<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>System Settings</h1>
    <ol class="breadcrumb">
      <ol class="breadcrumb">
        <li><a href="../Dashboard"><i class="fa fa-mail-reply"></i> Dashboard</a></li>
        <li class="active"></li>
        <li class="active"></li>
      </ol>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content1">
    <div class="row">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="<?php echo @$_SESSION['company_navtab']; ?>"><a href="#Company_Profile" data-toggle="tab"> Set Company Profile</a></li>
            <li class="<?php echo @$_SESSION['dept_navtab']; ?>"><a href="#Departments" data-toggle="tab">Departments</a></li>
            <li class="<?php echo @$_SESSION['position_navtab']; ?>"><a href="#Positions" data-toggle="tab">Positions</a></li>
            <li class="<?php echo @$_SESSION['priv_navtab']; ?>"><a href="#Priviledges" data-toggle="tab">Set Priviledges</a></li>
            <!--<li><a href="#Criteria" data-toggle="tab">Set Criteria</a></li>
            <li><a href="#Percentage" data-toggle="tab">Set Percentage</a></li>-->
            <li class="<?php echo @$_SESSION['session_navtab']; ?>"><a href="#Session" data-toggle="tab">Create Session</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane <?php echo @$_SESSION['company_tabpane']; ?>" id="Company_Profile">
              <div class="box" style="width:97%; border:0px">
                <div class="box-header"></div><!-- /.box-header -->
                <div class="box-body">
                  <?php echo validation_errors(); ?>
                  <?php $form_link = "Dashboard/".@$_SESSION['form_link']; ?>
                  <?php echo form_open_multipart("{$form_link}"); ?>
                  <div class="row">
                    <?php echo @$error; ?>
                      <div class="col-md-7">
                        <div class="form-group has-success">
                          <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Company Name</label>
                          <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." 
                                         name="comp_name" value=" <?php echo @$_SESSION['compinfo']['name']; ?>" required/>
                        </div>
                        <div class="row">
                        <!-- phone mask -->
                          <div class="form-group has-success col-xs-5">
                            <label>Telephone(1):</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                              </div>
                              <input type="text" class="form-control" data-inputmask='"mask": "(+999) 999-999-999"' 
                                     data-mask name="comp_tel1" value=" <?php echo @$_SESSION['compinfo']['tel1']; ?>"/>
                            </div><!-- /.input group -->
                          </div><!-- /.form group -->
                          <div  class="form-group has-success col-xs-6" style="float:right;">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i>Email:</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-at"></i>
                              </div>
                              <input type="email" class="form-control" name="comp_email" 
                                      value=" <?php echo @$_SESSION['compinfo']['email']; ?>" required/>
                            </div><!-- /.input group -->
                          </div>
                          <!-- phone mask -->
                          <div class="form-group has-success col-xs-5">
                            <label>Telephone(2):</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                              </div>
                              <input type="text" class="form-control" data-inputmask='"mask": "(+999) 999-999-999"' 
                                       data-mask name="comp_tel2" value=" <?php echo @$_SESSION['compinfo']['tel2']; ?>"/>
                            </div><!-- /.input group -->
                          </div><!-- /.form group -->
                          <!-- phone mask -->
                          <div class="form-group has-success col-xs-6" style="float:right;">
                            <label>Fax:</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-fax"></i>
                              </div>
                              <input type="text" class="form-control" data-inputmask='"mask": "(+999) 999-999-999"' 
                                       data-mask name="comp_fax" value=" <?php echo @$_SESSION['compinfo']['fax']; ?>"/>
                            </div><!-- /.input group -->
                          </div><!-- /.form group -->
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Upload Company Logo</label>
                          <input type="file" class="form-control" id="inputWarning" placeholder="Enter ..." 
                                 name="comp_logo" value=" <?php echo @$_SESSION['comp_logo'] = "Pending"; ?>" disabled/>
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Location</label>
                          <!--<textarea type="text" class="form-control" id="inputWarning"  placeholder="Enter ..." 
                                    style="height:124px;" name="comp_address" required/>
                            <?php //echo @$_SESSION['comp_address']; ?>
                            </textarea>-->
                            <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." 
                                 name="comp_address" value=" <?php echo @$_SESSION['compinfo']['address']; ?>" required/>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <?php 
                          if(!empty($companyinfo) && isset($_SESSION['Role']['System Settings'])){
                                        
                            foreach($companyinfo as $company){
                        ?>
                        <img src="<?php echo base_url(); ?>resources/dist/img/logo.png" height="150" width="150" alt="User Image" style="margin-left: 7%;"/>
                        <small class="pull-right" style="font-size:14PX;">
                          <address>
                            <strong><?php echo $company->name; ?></strong><br>
                            <?php echo $company->address; ?><br>
                            Phone: <?php echo $company->tel_1; ?><br/>
                            Phone: <?php echo $company->tel_1; ?><br/>
                            Fax  : <?php echo $company->fax; ?><br/>
                            Email: <?php echo $company->email; ?>
                          </address>
                        </small>
                        <?php  
                            }
                          }
                        ?>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <?php 
                        if($_SESSION['button_name'] == "Edit Info") {
                          echo " 
                            <a href='{$_SESSION['button_link']}'>
                              <button type='button' class='btn btn-success' data-dismiss='modal'>
                                <i class='fa fa-pencil'></i> {$_SESSION['button_name']}
                              </button> 
                            </a> ";   
                        } elseif($_SESSION['button_name'] == "Update Info") {
                            echo " 
                              <button type='submit' class='btn btn-success' data-dismiss='modal'name='{$_SESSION['button_sub_name']}'>
                                <i class='fa fa-check-square-o'></i> {$_SESSION['button_name']}
                              </button> 
                            ";   
                        } else{
                            echo "<button type='submit' class='btn btn-success' data-dismiss='modal' name='Register_Comp'>
                                    <i class='fa fa-building'></i> Register 
                                  </button>";
                        }
                      ?>
                      <a href='../Dashboard'>
                        <button type='button' class='btn btn-danger' data-dismiss='modal'>
                          <i class='fa fa-mail-reply'></i> Exit
                        </button> 
                      </a>
                  </div>
                  </form>
                </div>
              </div>
            </div><!-- /.tab-pane -->
            
            <div class="tab-pane <?php echo @$_SESSION['dept_tabpane']; ?>" id="Departments">
              <div class="box" style="width:97%; border:0px">
                <div class="box-header"></div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-4">
                      <?php echo validation_errors();?>
                      <form action="Add_Department" method="post">
                        <div class="form-group has-success">
                          <label class="control-label" for="inputWarning">
                            <i class="fa fa-th-large0"></i> Name Of Department
                          </label>
                          <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="dept_name" required/>
                        </div>
                        <button type="submit" class="btn btn-success" data-dismiss="modal" name="add_dept">
                          <i class="fa fa-check-square-o"></i>Add
                        </button>
                        <a href="../Dashboard">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">
                              <i class="fa fa-magic"></i>Exit
                          </button>
                        </a>
                      </form>
                    </div>
                    <div class="col-md-8">
                      <table id="example2" class="table table-striped table-hover">
                          <thead>
                            <th> Id # </th>
                            <th> Department(s) </th>
                            <th> Supervisor </th>
                            <th> Action </th>
                            </thead>
                            <tbody>
                              <?php 
                                  if( !empty($dept_info) ){
                                      $counter = 1;
                                      foreach($dept_info as $dept) {
                                          # code...
                                          $Supervisor = $this->user_model->SupervisorName($dept->name);
                                          if (!empty($Supervisor)) {
                                            
                                            foreach ($Supervisor as $hod) {
                                              # code...
                                              $SupervisorName = $hod->fullname;
                                            } 
                                          } else {
                                              $SupervisorName = "No Supervisor Created";
                                          }
                              ?>
                              <tr>
                                <td><?php echo $counter; ?></td>
                                <td><?php echo $dept->name; ?></td>
                                <?php 
                                    if($dept->name == "Executive") {
                                      $SupervisorName = "Board Of Directors";
                                    }
                                ?>
                                <td><?php echo $SupervisorName; ?></td>
                                <?php 
                                    if($dept->name == "Executive") {
                                      $counter++;
                                      echo "<td></td>";
                                      continue;
                                    }
                                ?>
                                <td>
                                    <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#DepartmentEdit<?php echo $counter; ?>" data-dismiss="modal">
                                      <i class="fa fa-pencil"></i> Edit
                                    </a> |
                                    <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DepartmentDel<?php echo $counter; ?>" data-dismiss="modal">
                                      <i class="fa fa-pencil"></i> Delete
                                    </a>
                                </td>
                              </tr>
                                <?php 
                                      $counter++;
                                    }
                                  }
                               ?> 
                            </tbody>
                      </table>
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

            <div class="tab-pane <?php echo @$_SESSION['position_tabpane']; ?>" id="Positions">
               <div class="box" style="width:97%; border:0px">
                 <div class="box-header">
                 </div><!-- /.box-header -->
                 <div class="box-body">
                    <div class="row">
                       <div class="col-md-4">
                         <?php echo validation_errors();?>
                         <form action="Add_Position" method="post">
                           <div class="form-group has-success">
                             <label class="control-label" for="inputWarning">
                               <i class="fa fa-th-large0"></i> Name Of Position
                             </label>
                             <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." 
                                              name="position_name" required/>
                           </div>
                           <button type="submit" class="btn btn-success" data-dismiss="modal" name="add_position">
                               <i class="fa fa-check-square-o"></i>Add
                           </button>
                           <button type="button" class="btn btn-danger" data-dismiss="modal">
                               <i class="fa fa-magic"></i>Exit
                           </button>
                         </form> 
                       </div>
                       <div class="col-md-7">
                         <table id="exampled" class="table table-striped table-responsive table-hover">
                            <thead>
                               <tr>
                                   <th> Id # </th>
                                   <th> Position </th>
                                   <th> Action </th>
                               </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                        if( !empty($position_info) ){
                                            $counter = 1;
                                            foreach($position_info as $position) {
                                    ?>
                                    <tr>
                                      <?php 
                                            //System Admin
                                            if( $_SESSION['position'] == "System Administrator" ) {
                                              //Color System Admin
                                              if($position->name == 'System Administrator') 
                                                echo "
                                                      <td>{$counter}</td>
                                                      <td style='color:red;'>{$position->name}</td>
                                                    ";
                                              //DeColor Others
                                              else
                                                echo "
                                                      <td>{$counter}</td>
                                                      <td>{$position->name}</td>
                                                    ";
                                            }

                                            //User Admin
                                            elseif( $_SESSION['position'] == "Administrator" ) {
                                              //Skip System Admin
                                              if($position->name == 'System Administrator') 
                                                continue;
                                              elseif($position->name == 'Administrator') 
                                                   echo "
                                                      <td>{$counter}</td>
                                                      <td style='color:red;'>{$position->name}</td>
                                                    ";
                                              else
                                                echo "
                                                      <td>{$counter}</td>
                                                      <td>{$position->name}</td>
                                                    ";
                                            }
                                            
                                      ?>
                                      <td>
                                        <?php 
                                              //System Admin
                                          if( $_SESSION['position'] == "System Administrator" ) {
                                            if( $position->name == "System Administrator" ) {
                                              //Skip Edit / Delete View
                                              echo "Not Applicable";
                                              $counter++;
                                              continue;
                                            }
                                            //Other Positions
                                            else {
                                        ?>
                                          <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#PositionEdit<?php echo $counter; ?>" data-dismiss="modal">
                                            <i class="fa fa-pencil"></i> Edit
                                          </a> | 
                                           <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#PositionDel<?php echo $counter; ?>" data-dismiss="modal">
                                            <i class="fa fa-pencil"></i> Delete
                                          </a>
                                        <?php } 
                                            }
                                            //User Admin
                                            elseif( $_SESSION['position'] == "Administrator" ) {
                                              //Skip System Admin
                                              if($position->name == 'System Administrator') {
                                                  $counter++;
                                                  continue;
                                              }
                                              //Skip User Admin
                                              elseif($position->name == 'Administrator') {
                                                  $counter+=2;
                                                  continue;
                                              }
                                              else {
                                        ?>
                                          <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#PositionEdit<?php echo $counter; ?>" data-dismiss="modal">
                                            <i class="fa fa-pencil"></i> Edit
                                          </a> | 
                                           <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#PositionDel<?php echo $counter; ?>" data-dismiss="modal">
                                            <i class="fa fa-pencil"></i> Delete
                                          </a> 
                                        <?php } }?> 
                                      </td>
                                    </tr>
                                    <?php 
                                                $counter++;
                                            }
                                        }
                                    ?> 
                            </tbody>
                          </table>
                       </div>
                    </div>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>

            <div class="tab-pane " id="Criteria">
              <div class="box" style="width:97%; border:0px">
                <div class="box-header">
                  <div class="row">
                    <form action="Grade_Category" method="post">
                      <div class="col-md-3">
                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Criteria Name</label>
                        <input type="text" class="form-control" id="inputSuccess" placeholder="Eg: Productivity" name="grade_category" required/>
                      </div>

                      <div class="col-md-4">
                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Grade By</label>
                        <input type="text" class="form-control" id="inputSuccess" placeholder="Eg: Satisfactory, Unsatisfactory" name="grade_by" required/>
                      </div>

                      <div class="col-md-4">
                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Department</label><br>
                        <select class="form-control chosen-select" multiple tabindex="1" style="width:100%;" name="department[]" data-placeholder="Select Department(s)" required>
                          <option></option>
                          <?php 
                            if( !empty($dept_info) && isset($_SESSION['Role']['System Settings']) ){
                                foreach($dept_info as $dept) {
                          ?>
                          <option><?php echo $dept->name; ?></option>
                          <?php 
                                }
                              }
                          ?>  
                        </select>
                      </div>
                      <div class="col-md-1">
                        <button type="submit" class="btn btn-success" data-dismiss="modal" style="margin-top: 24px;" name="create_grade_category">
                          <i class="fa fa-magic"></i>
                          Create
                        </button>
                      </div>
                    </form>
                  </div>
                  <br>
                  <div class="row">
                    <form action="Questionnaire" method="post">
                      <div class="col-md-5">
                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Questionnaire</label>
                        <textarea class="form-control" id="inputSuccess" placeholder="Type Questionnaire" name="questionnaire_text" required></textarea>
                      </div>
                      
                      <div class="col-md-3">
                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Criteria</label>
                        <select class="form-control chosen-select" single name="major_grade" data-placeholder="Select Criteria" required>
                        <option></option>
                        <?php 
                          if( !empty($grade_category_info) && isset($_SESSION['Role']['System Settings']) ){
                              foreach($grade_category_info as $grade_category) {
                        ?>
                          <option><?php echo $grade_category->grade_category; ?></option>
                        <?php 
                              }
                            }
                        ?>  
                        </select>
                      </div>
                      <div class="col-md-2">
                        <button type="submit" class="btn btn-success" data-dismiss="modal" style="margin-top: 24px;" name="add_questionnaire">
                          <i class="fa fa-magic"></i>
                          Add
                        </button>
                      </div>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box" style="width:100%;">
                      <!-- /.box-header -->
                        <div class="box-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="box box-solid" style="width:95%;">
                                <div class="box-body">
                                  <div class="box-group" id="accordion">
                                  <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                    <?php 
                                      if(!empty($grade_category_info) && isset($_SESSION['Role']['System Settings']) ) {

                                        //Declaring box colors
                                        $box_color[0] = "panel box box-primary";
                                        $box_color[1] = "panel box box-danger";
                                        $box_color[2] = "panel box box-success";
                                        //initial setups
                                        $boxcounter   = 0;
                                        $collapse     = "in";
                                        //loop
                                        foreach($grade_category_info as $Criteria) {
                                          //string replace
                                          $vowels = array(" ", "-");
                                          $id_name = str_replace($vowels, "_", $Criteria->grade_category);

                                          //Retrieving questionnaires
                                          $questionnaires = $this->settings_model->retrieve_Questionnaires($Criteria->grade_category);
                                    ?>
                                    <div class="<?php echo $box_color[$boxcounter]; ?>">
                                      <div class="box-header with-border">
                                        <h4 class="box-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $id_name?>">
                                             <?php echo $Criteria->grade_category; ?>
                                          </a>
                                        </h4>
                                        <small class="pull-right">
                                          <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Criteria<?php echo $Criteria->id; ?>" data-dismiss="modal">
                                            <i class="fa fa-pencil"></i>
                                            Edit
                                          </a> |
                                          <a href="" class="btn btn-danger btn-xs" data-dismiss="modal">
                                              <i class="fa fa-times"></i>
                                              Delete
                                          </a>
                                        </small>
                                      </div>
                                      <div id="<?php echo $id_name; ?>" class="panel-collapse collapse <?php echo $collapse; ?>">
                                        <div class="box-body">
                                          <table class="table table-condensed">
                                            <tr>
                                              <th style="width:40%">Questionnaire</th>
                                              <th>Grade By</th>
                                              <th>Action</th>
                                            </tr>
                                            <?php
                                              if (!empty($questionnaires)) {
                                                  
                                                foreach ($questionnaires as $questions) {
                                                  # code...
                                            ?>
                                            <tr>
                                              <td><?php echo $questions->grade_category; ?></td>
                                               <td><?php echo $Criteria->grade_by; ?></td>
                                              <td><a href="" data-toggle="modal" data-target="#myModal1">Edit/Drop</a></td>
                                            
                                            </tr>
                                            <?php  
                                                    } 
                                                }
                                            ?>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <?php 
                                            $boxcounter++;
                                            $collapse = "";
                                            ($boxcounter == 3) ? $boxcounter = 0 : $boxcounter ;
                                          }
                                        }
                                    ?>
                                  </div>
                                </div><!-- /.box-body -->
                              </div><!-- /.box -->
                            </div><!-- /.col -->
                        <!-- /.row -->
                          </div><!-- /.box -->
                        </div><!-- /.box-body -->
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

            <div class="tab-pane <?php echo @$_SESSION['priv_tabpane']; ?>" id="Priviledges">
              <div class="box" style="width:97%; border:0px">
                <form action="Set_Priviledges" method="post">
                  <div class="box-header">
                    <div  class="col-xs-6 ">
                      <label class="control-label">Select Position</label>
                      <select class="form-control has-success" name="position">
                        <?php 
                          if(!empty($position_info) && isset($_SESSION['Role']['System Settings']) ){
                              foreach($position_info as $position) {
                                if($_SESSION['position'] == "Administrator" && ($position->name == "System Administrator") ) {
                                  #code
                                  continue;
                                }

                                if ($position_selected == $position->name) {
                                  # code...
                                  $rank = "selected";
                                }
                          ?>
                        <option <?php echo @$rank; $rank="";?>><?php echo $position->name; ?></option>
                        <?php } } ?>
                      </select>
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="box-group" id="accordion">
                      
                      <div class="panel box box-success" style="background-color: #EAF8E7;">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#Edit_Roles_Priviledges">
                              Roles & Priviledges
                            </a>
                          </h4>
                        </div>
                        <div id="Edit_Roles_Priviledges" class="panel-collapse collapse" style="overflow:hidden;">
                          <div class="box-body">
                            <table class="table table-condensed table-striped" style="border:1px solid #fff;border-bottom:8px solid #fff">
                              <tr style="color:white;background-color: rgb(85, 171, 127)">
                                <th style="width:7%">id #</th>
                                <th style="width:15%">Position</th>
                                <th style="width:32%">Roles</th>
                                <th style="width:32%">Priviledges</th>
                                <th style="width:15%">Action</th>
                              </tr>
                              <?php 
                                  if(!empty($position_info) && isset($_SESSION['Role']['System Settings']) ){
                                    $counter = 1;
                                    foreach($position_info as $position) {

                                    if ($_SESSION['position'] == "Administrator") {
                                      # code...
                                      if($position->name == "System Administrator") {
                                          continue;
                                        }
                                      }
                              ?>
                              <tr>
                                <td style="indent:40px;"><?php echo $counter; ?></td>
                                <td><?php echo $position->name; ?></td>
                                <td style='indent:40px;'><?php echo substr($position->roles, 0,33); ?> ... </td>
                                <td><?php echo substr($position->priviledges, 0,33); ?> ...</td>
                                <td>
                                  <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Roles_Priv_View<?php echo $counter; ?>" data-dismiss="modal">
                                    <i class="fa fa-pencil"></i> View
                                  </a> 
                                  <?php
                                      if($_SESSION['position'] == "System Administrator") {
                                        #code
                                        if($position->name == "System Administrator") {
                                          $counter++;
                                          continue;
                                        }
                                      }
                                      elseif ($_SESSION['position'] == "Administrator") {
                                        # code...
                                        if($position->name == "System Administrator") {
                                          $counter++;
                                          continue;
                                        }
                                        elseif($position->name == "Administrator") {
                                          $counter++;
                                          continue;
                                        }
                                      }
                                  ?> |
                                  <a href="" class="btn btn-success btn-xs" data-toggle="modal" data-target="#Roles_Priv_Edit<?php echo $counter; ?>" data-dismiss="modal">
                                    <i class="fa fa-pencil"></i> Edit
                                  </a> 
                                </td>
                              </tr>
                              <?php $counter++; }  } ?>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="panel box box-primary" style="background-color: #ECF2F7;">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#Roles">
                               Roles (Tabs to be displayed on the dashboard)
                            </a>
                          </h4>
                        </div>
                        <div id="Roles" class="panel-collapse collapse <?php echo @$_SESSION['Collpase_Roles'];$_SESSION['Collpase_Roles']='';?>" style="overflow:hidden;">
                          <div class="box-body">
                            <table class="table table-condensed table-striped" style="border:1px solid #fff;border-bottom:8px solid #fff">
                              <tr style="color:white;background-color: rgb(85, 171, 127)">
                                <th style="width:7%">Select</th>
                                <th style="width:30%">Tabs</th>
                                <th style="width:7%">Select</th>
                                <th style="width:30%">Tabs</th>
                              </tr>
                              <?php 
                                if (!empty($tab)) {
                                  # code...
                                  for ($i=0; $i < count($tab); $i++) { 
                                    # code...
                                    if(!empty($Priv_Selected)) {
                                      foreach ($Priv_Selected as $Priv_Checked) {
                                        # code...
                                        $option[$Priv_Checked] = "Checked";
                                      }
                                    }
                                    $tab_name = $tab[$i];
                              ?>
                              <tr>
                                <td style="indent:40px;"><input type='checkbox' name="Roles[]" value="<?php echo $tab_name; ?>" <?php echo @$option[$tab_name];?> ></td>
                                <th><?php echo $tab_name; ?></th>
                                  <?php 
                                      $i++;
                                      if($i == count($tab)){ 
                                        echo "<td></td><th></th>";
                                        continue;
                                      }
                                      else
                                      $tab_name = $tab[$i]; 
                                  ?>
                                <td style='indent:40px;'><input type='checkbox' name="Roles[]" value="<?php echo $tab_name; ?>" <?php echo @$option[$tab_name];?> ></td>
                                <th><?php echo $tab_name; ?></th>
                              </tr>
                              <?php
                                  }
                                }
                              ?>
                            </table>
                            <button type="submit" class="btn btn-primary pull-right" style="overflow:hidden;margin-top:5px;" name="set_priv_submit">Set Priviledges <i class="fa fa-arrow-circle-o-right"></i></button>
                          </div>
                        </div>
                      </div>
                      
                      <div class="panel box box-danger" style="background-color: #F7F2F2;">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#Priviledges">
                              Priviledges (Actions User Can Perform Under Roles)
                            </a>
                          </h4>
                        </div>
                        <div id="Priviledges" class="panel-collapse collapse <?php echo @$_SESSION['Collpase_Priv'];?>">
                          <div class="row">
                            <?php
                              if(!empty($Priv_Selected)) {
                                foreach ($Priv_Selected as $Priv_Checked) {
                                  # code...
                             
                            ?>
                            <div class="col-md-4">
                                <div class="box box-success with-border">
                                  <div class="box-header" >
                                    <h3 class="box-title"><?php echo $Priv_Checked; ?></h3>
                                  </div><!-- /.box-header -->
                                  <div class="box-body no-padding">
                                    <table class="table table-condensed table-striped">
                                      <tr style="color:white;background-color: rgb(85, 171, 127)">
                                        <th style="width: 10px;">Select</th>
                                        <th>Options</th>
                                      </tr>
                                      <?php
                                            //calling model function for priviledges  
                                          $Priv_from_DB = $this->settings_model->retrieve_priviledges($Priv_Checked);

                                          foreach ($Priv_from_DB as $Priv_from_DB_Result) {
                                            # code...
                                            $Priv_from_DB_Exploded = explode("|", $Priv_from_DB_Result->priviledges);

                                            foreach ($Priv_from_DB_Exploded as $Priviledges) {
                                              # code...
                                            if(!empty($Priviledges)) {
                                      ?>
                                      <tr>
                                        <td><input type="checkbox" name="Priviledges[]" value="<?php echo $Priv_Checked."-".$Priviledges; ?>"></td>
                                        <td><?php echo $Priviledges; ?></td>
                                      </tr>
                                      <?php 
                                            } else 
                                                echo "<td></td><td>No Initial Priviledge(s) Set</td>"; 
                                          } 
                                        }
                                      ?>
                                    </table>
                                  </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>
                            <?php } }?>
                          </div><!--./row ..-->
                        </div>
                      </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="Save_All" class="btn btn-success pull-right" style="background-color: rgb(67, 145, 105);margin-right:3%"><i class="fa fa-check-square-o"></i> Apply</button>
                        <a href="../Dashboard" class="btn btn-primary pull-left"><i class="fa fa-arrow-circle-o-left"></i> Exit</a>
                    </div>
                  </div><!-- /.box-body -->
                </form>
              </div><!-- /.box -->
            </div>

            <div class="tab-pane <?php echo @$_SESSION['session_tabpane']; ?>" id="Session">
               <div class="box" style="width:97%; border:0px">
                 <div class="box-header">
                 </div><!-- /.box-header -->
                 <div class="box-body">
                    <div class="row">
                       <div class="col-md-4">
                         <?php echo validation_errors();?>
                         <form action="Create_Session" method="post">
                           <div class="form-group has-success">
                             <label class="control-label " for="inputSuccess"><i class="fa fa-check"></i>New Session Date</label>
                                <input type="text" class="form-control has-success" id="popupDatepicker" name="session_date" value="<?php echo gmdate("l F j, Y"); ?>" required/>
                           </div>
                           <input type="hidden" name="employee_id" value="<?php echo $_SESSION['employee_id']; ?>">
                           <button type="submit" class="btn btn-success" name="create_session">
                               <i class="fa fa-check-square-o"></i>Create
                           </button>
                           <a href="../Dashboard"class="btn btn-danger" data-dismiss="modal">
                               <i class="fa fa-magic"></i>Exit
                           </a>
                         </form> 
                       </div>
                       <div class="col-md-8">
                         
                       </div>
                    </div>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>

          </div><!-- /.tab-content -->
        </div>
      </div>
      
      <!--Modals ---------------------------------------------------------------------------- -->         
      <div class="modal-footer">
              <!-- Position Modal -->
              <!-- Edit Model -->
              <?php 
                if(!empty($position_info) && isset($_SESSION['Role']['System Settings']) ) {
                  $counter = 1;
                  foreach($position_info as $position) {
              ?>
              <div class="modal fade" id="PositionEdit<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="PositionLabel" aria-hidden="true">
                <div class="modal-dialog1">
                  <div class="modal-content1">
                    <div class="modal-header1">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="PositionLabel"><i class="fa fa-th-large"></i> Edit Position </h4>
                    </div>
                    <form action="Update_Position" method="post">
                      <div class="modal-body">
                        <div class="form-group has-success">
                          <label class="control-label" for="inputWarning">
                            <i class="fa fa-th-large0"></i> Position Name
                          </label>
                          <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." 
                                 name="position_name" value="<?php echo $position->name; ?>" required/>
                          <input type="hidden" name="position_id" value="<?php echo $position->id; ?>">
                        </div>      
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="Update_Position"><i class="fa fa-check-square-o"></i> Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--Delete Modal -->
              <div class="modal fade" id="PositionDel<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog1">
                    <div class="modal-content1">
                      <div class="modal-header1">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                      </div>
                      <div class='color-palette'>
                        <form action="Delete_Position" method="post">
                          <input type="hidden" name="positionid" value="<?php echo $position->id; ?>">
                          <div class="modal-body">
                            Do You Want To Really Delete <?php echo "<strong><em>".$position->name."</em></strong>"; ?>....
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" name="delete_pos"><i class="fa fa-times"></i> Delete</button> 
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-mail-reply"></i> Cancel</button>
                          </div>
                        </form>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
            <?php 
                  $counter++;
                }
              }
            ?>
            <!--End of Position Modal -->
            
            <!-- Department Modal -->
            <!--Department Edit -->
              <?php 
                if(!empty($dept_info) && isset($_SESSION['Role']['System Settings']) ) {
                  $counter = 1;
                  foreach($dept_info as $dept) {
              ?>
              <div class="modal fade" id="DepartmentEdit<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="DepartmentLabel" aria-hidden="true">
                <div class="modal-dialog1">
                  <div class="modal-content1">
                    <div class="modal-header1">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="DepartmentLabel"><i class="fa fa-th-large"></i> Edit Department </h4>
                    </div>
                    <form action="Update_Department" method="post">
                      <div class="modal-body">
                        <div class="form-group has-success">
                          <label class="control-label" for="inputWarning">
                            <i class="fa fa-th-large0"></i> Name of Department
                          </label>
                          <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." 
                                 name="dept_name" value="<?php echo $dept->name; ?>" required/>
                          <input type="hidden" name="dept_id" value="<?php echo $dept->id; ?>">
                        </div>      
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="Update_Dept"><i class="fa fa-check-square-o"></i> Update</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-mail-reply"></i> Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!--Delete Modal -->
              <div class="modal fade" id="DepartmentDel<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog1">
                    <div class="modal-content1">
                      <div class="modal-header1">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                       </div>
                        <div class='color-palette'>
                          <form action="Delete_Department" method="post">
                            <input type="hidden" name="departmentid" value="<?php echo $dept->id; ?>">
                            <div class="modal-body">
                              Do You Want To Really Delete <?php echo "<strong><em>".$dept->name."</em></strong>"; ?> ....
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-danger" name="delete_dept"><i class="fa fa-times"></i> Delete</button> 
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-mail-reply"></i> Cancel</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <?php 
                  $counter++;
                }
              }
            ?>
            <!--End of Department Modal -->

             <!-- Criteria Modal -->
              <?php 
                if(!empty($grade_category_info) && isset($_SESSION['Role']['System Settings']) ) {
                  
                  foreach($grade_category_info as $Criteria) {
                    //string replace
                    $vowels = array(" ", "-");
                    $id = str_replace($vowels, "_", $Criteria->grade_category);
                    //recieving departments
                    $department = explode(",", $Criteria->department);
                    
              ?>
              <div class="modal fade" id="Criteria<?php echo $Criteria->id; ?>" tabindex="-1" role="dialog" aria-labelledby="CriteriaLabel" aria-hidden="true">
                <div class="modal-dialog2">
                  <div class="modal-content2">
                    <div class="modal-header2">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="CriteriaLabel"><i class="fa fa-th-large"></i> Edit Criteria </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                          <?php echo validation_errors(); ?>
                            <form action="Update_Category" method="post">
                              <div class="col-md-3">
                                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Criteria Name</label>
                                <input type="text" class="form-control" id="inputSuccess" placeholder="Eg: Productivity" name="update_grade_category_name" required 
                                value="<?php echo $Criteria->grade_category; ?>" />
                              </div>
                              <div class="col-md-4">
                                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Grade By</label>
                                <input type="text" class="form-control" id="inputSuccess" placeholder="Eg: Satisfactory, Unsatisfactory" name="update_grade_by" required value="<?php echo $Criteria->grade_by; ?>" />
                              </div>
                              <div class="col-md-4">
                                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Department</label><br>
                                <select class="form-control chosen-select" multiple tabindex="1" style="width:100%;" name="update_grade_department[]" data-placeholder="Department(s)" required>
                                  <option></option>
                                <?php 
                                    foreach($department as $dept) {
                                      echo "<option selected>$dept</option>";
                                     }
                                ?>  
                                </select>
                              </div>
                              <div class="col-md-1" style="margin-left:-20px;">
                                <button type="submit" class="btn btn-success" style="margin-top: 24px;" name="update_grade_category_button">
                                  <i class="fa fa-magic"></i>
                                  Update
                                </button>
                              </div>
                              <input type="hidden" name="update_grade_id" value="<?php echo $Criteria->id  ; ?>">
                            </form>
                          </div>      
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <?php 
                 
                }
              }
            ?>
          <!-- End of Criteria Modal -->

          <!-- Roles Priviledges Modal -->
              
              <?php 
                if(!empty($position_info) && isset($_SESSION['Role']['System Settings']) ) {
                  $counter = 1;
                  foreach($position_info as $position) {
                    if ($_SESSION['position'] == "Administrator") {
                      # code...
                      if($position->name == "System Administrator") {
                        continue;
                      }
                      
                    }
              ?>
              <!-- View Model -->
              <div class="modal fade" id="Roles_Priv_View<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="PositionLabel" aria-hidden="true">
                <div class="modal-dialog1">
                  <div class="modal-content1">
                    <div class="modal-header1">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="PositionLabel"><i class="fa fa-th-large"></i> <?php echo $position->name; ?> </h4>
                    </div>
                    <div class="modal-header1">
                      <h4 class="modal-title" id="PositionLabel"> Roles</h4>
                    </div>
                    <table class="table table-condensed table-striped" style="border:1px solid #fff;border-bottom:8px solid #fff">
                      <tr style="color:white;background-color: rgb(85, 171, 127)">
                        <th style="width:7%">Select</th>
                        <th style="width:30%">Tabs</th>
                        <th style="width:7%">Select</th>
                        <th style="width:30%">Tabs</th>
                      </tr>
                      <?php 
                        $Roles_Exploded = explode("|",$position->roles );

                        if (!empty($Roles_Exploded) ) {
                          # code...
                          for($i=0; $i < count($Roles_Exploded); $i++) {
                            # code...
                            $tab_name = $Roles_Exploded[$i];
                            $option[$tab_name] = "Checked";
                            if($tab_name != "") {
                      ?>
                      <tr>
                        <td style="indent:40px;"><input type='checkbox' name="Roles[]" value="<?php echo $tab_name; ?>" <?php echo @$option[$tab_name];?> disabled></td>
                        <td><?php echo $tab_name; ?></td>
                          <?php
                                }
                              $i++;
                              if($i < sizeof($Roles_Exploded)) {
                                $tab_name = $Roles_Exploded[$i];
                                $option[$tab_name] = "Checked"; 
                          ?>
                        <td style='indent:40px;'><input type='checkbox' name="Roles[]" value="<?php echo $tab_name; ?>" <?php echo @$option[$tab_name];?> disabled></td>
                        <td><?php echo $tab_name; ?></td>
                      </tr>
                      <?php
                            }
                          }
                        }
                      ?>
                    </table>
                    <!-- Priviledges -->
                    <div class="modal-header1">
                      <h4 class="modal-title" id="PositionLabel"> Priviledges</h4>
                    </div>
                    <table class="table table-condensed table-striped" style="border:1px solid #fff;border-bottom:8px solid #fff">
                      <tr style="color:white;background-color: rgb(85, 171, 127)">
                        <th style="width:7%">Select</th>
                        <th style="width:30%">Tabs</th>
                        <th style="width:7%">Select</th>
                        <th style="width:30%">Tabs</th>
                      </tr>
                      <?php 
                        $Priviledges_Exploded = explode("|",$position->priviledges );

                        if (!empty($Priviledges_Exploded) ) {
                          # code...
                          for($i=0; $i < count($Priviledges_Exploded); $i++) {
                            # code...
                            $tab_name = str_replace("-", " =>", $Priviledges_Exploded[$i]);
                            $option[$tab_name] = "Checked";
                            if($tab_name != "") {
                      ?>
                      <tr>
                        <td style="indent:40px;"><input type='checkbox' name="Roles[]" value="<?php echo $tab_name; ?>" <?php echo @$option[$tab_name];?> disabled></td>
                        <td><?php echo $tab_name; ?></td>
                          <?php
                                }
                              $i++;
                              if($i < sizeof($Priviledges_Exploded)) {
                                $tab_name = str_replace("-", " =>", $Priviledges_Exploded[$i]);
                                $option[$tab_name] = "Checked"; 
                          ?>
                        <td style='indent:40px;'><input type='checkbox' name="Roles[]" value="<?php echo $tab_name; ?>" <?php echo @$option[$tab_name];?> disabled></td>
                        <td><?php echo $tab_name; ?></td>
                      </tr>
                      <?php
                            }
                          }
                        }
                      ?>
                    </table>
                    <!-- End of Priviledges -->
                    <div class="modal-footer">
                      <a type="submit" class="btn btn-success" data-toggle="modal" data-target="#Roles_Priv_Edit<?php echo $counter; ?>"><i class="fa fa-check-square-o"></i> Edit</a>
                      <a type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Edit Model -->
              <div class="modal fade" id="Roles_Priv_Edit<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="PositionLabel" aria-hidden="true">
                <div class="modal-dialog1">
                  <div class="modal-content1">
                    <div class="modal-header1">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="PositionLabel"><i class="fa fa-th-large"></i> <?php echo $position->name; ?> </h4>
                    </div>
                      <div class="modal-body">
                        Please Re-Select the Position from the Drop-Down and Set New Roles & Priviledges      
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-mail-reply"></i> Back</button>
                      </div>
                  </div>
                </div>
              </div>

            </div>
            <?php 
                  $counter++;
                }
              }
            ?>
            <!--End of Position Modal -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
<?php unset($_SESSION['compinfo']); ?>