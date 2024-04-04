<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>User Management </h1>
        <ol class="breadcrumb">
            <ol class="breadcrumb">
                <li>
                    <a href="../Dashboard">
                        <i class="fa fa-mail-reply"></i> 
                        Dashboard
                    </a>
                </li>
                <li class="active"></li>
            </ol>
        </ol>
    </section>
        
    <!-- Main content -->
    <section class="content1">
        <div class="row">
            <div class="col-xs-12"> 
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_2" data-toggle="tab">
                                All Employees List
                            </a>
                        </li>
                        <li>
                            <a href="#tab_1" data-toggle="tab">
                                Add New Employee
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="tab_1">
                            <?php echo validation_errors(); ?>
                            <form action="../Access/Register_user" method="post">  
                                <div class="form-group has-success">
                                    <div class="row">
                                        <!-- Column Left -->
                                        <div class="col-md-4">
                                            <div class="col">
                                                    <label class="control-label" for="inputSuccess">
                                                        <i class="fa fa-user"></i> 
                                                         Employee ID 
                                                    </label>
                                                    <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="employee_id" value="<?php echo $id; ?>" readonly />
                                            </div>
                                            <div class="col">
                                                    <label class="control-label" for="inputSuccess">
                                                        <i class="fa fa-user"></i> 
                                                         Surname 
                                                    </label>
                                                    <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="surname" value="<?php echo set_value('surname'); ?>" required />
                                            </div>
                                            <div class="col">
                                                    <label class="control-label" for="inputSuccess">
                                                        <i class="fa fa-user"></i> 
                                                        Other Name(s)
                                                    </label>
                                                    <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="othernames" value="<?php echo set_value('othernames'); ?>" required/>
                                            </div>
                                            <div class="col">
                                                    <label>
                                                        <i class="fa fa-building"></i>        
                                                        Department
                                                    </label>
                                                    <select class="form-control" tabindex="1" style="width:100%;" name="department" data-placeholder="Select Department(s)" required>
                                                      <option label="select one"></option>
                                                        <?php 
                                                          if( !empty($dept_info) ){
                                                              foreach($dept_info as $dept) {
                                                        ?>
                                                          <option><?php echo $dept->name; ?></option>
                                                        <?php 
                                                              }
                                                            }
                                                        ?>  
                                                    </select>
                                            </div>
                                        </div>

                                        <!-- Column Middle -->
                                        <div class="col-md-4">
                                            
                                            <div class="col">
                                                <img id="profile" src="<?php echo base_url(); ?>resources/dist/img/user.png" class="img-circle" alt="User Image" style="margin-left:30%;"/>
                                                <input type="hidden" name="imgpath" style="bordrer:none" value="<?php echo set_value('imgpath'); ?>" />
                                            </div>
                                        </div>
                                        <!-- Column Right-->
                                        <div class="col-md-4">
                                            <div class="col">
                                                <label>Job Title</label>
                                                <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="jobtitle" required />
                                            </div>
                                                <div class="col">
                                                    <label>Position</label>
                                                    <select class="form-control" single tabindex="1" style="width:100%;" name="position" data-placeholder="Select Department(s)" required>
                                                        <option label="select one"></option>
                                                        <?php 
                                                            if( !empty($position_info) ){
                                                                foreach($position_info as $position) {
                                                        ?>
                                                            <option><?php echo $position->name; ?></option>
                                                        <?php 
                                                                }
                                                            }
                                                        ?>  
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label class="control-label" for="inputSuccess">
                                                        <i class="fa fa-bell-o"></i> 
                                                        Username
                                                    </label>
                                                    <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="username" value="<?php echo set_value('username'); ?>" required/>
                                                </div>
                                                <div class="col">
                                                    <label class="control-label" for="inputSuccess">
                                                        <i class="fa fa-bell-o"></i> 
                                                        Password
                                                    </label>
                                                    <input type="password" class="form-control" id="inputWarning" placeholder="Enter ..." name="passwd" value="ChangeMe" readonly />
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" data-dismiss="modal" name="Register">
                                        Register <i class="fa fa-user"></i>
                                    </button>
                                    <a href="../Dashboard">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                                            <i class="fa fa-magic"></i>Exit
                                        </button></a>
                                </div>
                            </form>  
                        </div><!-- /.tab-pane -->

                        <div class="tab-pane active" id="tab_2">
                            <div class="box">
                                <div class="box-header">
                                    <!-- type Here -->  
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <table id="example1" class="table table-bordered table-striped table-responsive">
                                    <thead style="background-color: rgb(85, 171, 127);">
                                        <tr style="color:#fff">
                                            <th style="width:8%">Staff No #</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th style="width:18%">Position</th>
                                            <th style="width:22%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $counter = 1;
                                            foreach ($allmembers as $value) {
                                              # code...
                                                //Retrieving Dept / Pos Name using ID
                                                $dept_name_ret = $this->user_model->ret_dept_pos_name('departments',$value->department_id);
                                                $pos_name_ret  = $this->user_model->ret_dept_pos_name('position'  ,$value->position_id);

                                                if( !empty($dept_name_ret) ) {
                                                    foreach ($dept_name_ret as $dept_name_loop) {
                                                        # code...
                                                        $dept_name = $dept_name_loop->name;
                                                    }
                                                }
                                                else
                                                    $dept_name = "";

                                                if( !empty($pos_name_ret) ) {
                                                    foreach ($pos_name_ret as $pos_name_loop) {
                                                        # code...
                                                        $pos_name = $pos_name_loop->name;
                                                    }
                                                }
                                                else
                                                    $pos_name = "";

                                                //System Admin View
                                                if ($_SESSION['position'] == "System Administrator") {
                                                    if($pos_name == "System Administrator") {
                                                        $color = "label label-danger";
                                                        $delete_button = "";
                                                    }
                                                    else {
                                                        $color = "";
                                                        $delete_button = "
                                                                        <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#UserDelete{$counter}' style='padding: 1px 6px;'>
                                                                        <i class='fa fa-times'> Delete</i></button>";
                                                    }
                                                }
                                                //User Admin
                                                if ($_SESSION['position'] == "Administrator") {
                                                    if($pos_name == "System Administrator") {
                                                        $delete_button = "";
                                                        $counter = 2;
                                                        continue;
                                                    }
                                                    elseif($pos_name == "Administrator") {
                                                        $delete_button = "";
                                                        $color = "label label-danger";
                                                    }
                                                    else {
                                                        $color = "";
                                                        $delete_button = "
                                                                            <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#UserDelete{$counter}' style='padding: 1px 6px;'>
                                                                            <i class='fa fa-times'> Delete</i></button>";
                                                    }
                                                }  
                                                    $display = 
                                                        "<tr'>
                                                            <form action='' method='post'>
                                                            <td>{$value->employee_id}</td>
                                                            <td>$value->fullname</td>
                                                            <td>$dept_name</td>
                                                            <td style='text-indent:10px;'><span class='{$color}' style='font-size:14px;font-weight:100;'>{$pos_name}</span></td>
                                                            <td> 
                                                                <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#UserView{$counter}' style='padding: 1px 6px;'>
                                                                    <i class='fa fa-user'> Details</i></button>
                                                                <button type='button' class='btn btn-success' data-toggle='modal' data-target='#UserEdit{$counter}' style='padding: 1px 6px;'>
                                                                    <i class='fa fa-pencil'> Edit</i></button>
                                                                {$delete_button}
                                                            </td>
                                                            <input type='hidden' value='{$value->employee_id}'>
                                                            </form>
                                                        </tr>"  ;
                                                    print $display;
                                                    $counter++;
                                                }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width:8%">Staff No</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Job Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                  </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div>
                    </div>
                
                <!-- User view Modal box -->
                <?php 
                    if( isset($allmembers) && isset($_SESSION['Role']['Users']) ) {
                        $counter = 1;
                      foreach($allmembers as $value){
                        if ($_SESSION['position'] == "Administrator" && ($value->position_id == "PAMS/POS/1")) {
                            # code...
                            continue;
                        }
                ?>
                <div class="modal fade" id="UserView<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Employee Info </h4>
                            </div>
                                <div class="modal-body">
                                    <div class="box-header"></div><!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <div class="row invoice-info">
                                            <div class="form-group has-success">
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-10 table-responsive">
                                                        
                                                    <?php 
                                                        //Retrieving Dept / Pos Name using ID
                                                        $dept_name_ret = $this->user_model->ret_dept_pos_name('departments',$value->department_id);
                                                        $pos_name_ret  = $this->user_model->ret_dept_pos_name('position'  ,$value->position_id);
                                                        if( !empty($dept_name_ret) ) {
                                                            foreach ($dept_name_ret as $dept_name_loop) {
                                                                # code...
                                                                $dept_name = $dept_name_loop->name;
                                                            }
                                                        }
                                                        else
                                                            $dept_name = "";

                                                        if( !empty($pos_name_ret) ) {
                                                            foreach ($pos_name_ret as $pos_name_loop) {
                                                                # code...
                                                                $pos_name = $pos_name_loop->name;
                                                            }
                                                        }
                                                        else
                                                            $pos_name = "";
                                                    ?>
                                                        <table class="table table-bordered table-hover  table-centered">
                                                            <tr>
                                                                <td><label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-user"></i> 
                                                                     Employee Id 
                                                                </label></td>
                                                                <td><?php echo $value->employee_id; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-user"></i> 
                                                                     Fullname 
                                                                </label></td>
                                                                <td><?php echo $value->fullname; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-user"></i> 
                                                                     Department 
                                                                </label></td>
                                                                <td><?php echo $dept_name; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-user"></i> 
                                                                     Job Title 
                                                                </label></td>
                                                                <td><?php echo $value->jobtitle; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-user"></i> 
                                                                     Position 
                                                                </label></td>
                                                                <td><?php echo $pos_name; ?></td>
                                                            </tr>
                                                            <?php
                                                                $user_info = $this->user_model->user_info($value->employee_id);
                                                                if( !empty($user_info) ) {
                                                                    foreach ($user_info as $user) {
                                                                        # code...
                                                            ?>
                                                            <tr>
                                                                <td><label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-user"></i> 
                                                                     Username 
                                                                </label></td>
                                                                <td><?php echo $user->username; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-user"></i> 
                                                                     Password 
                                                                </label></td>
                                                                <td><input type="password" id="userviewpwd" style="border:0px;background-color:#fff; width:100%" value="<?php echo $user->passwd; ?>" disabled></td>
                                                            </tr>
                                                            <?php } } ?>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-toggle='modal' data-target='#UserEdit<?php echo $counter; ?>'><i class="fa fa-pencil"></i> Edit</button>
                                        <a href="" class="btn btn-danger" data-dismiss="modal" ><i class="fa fa-mail-reply"></i> Back</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <?php 
                         $counter++;   } } 
                ?>

                <!-- User Edit Modal box -->
                <?php 
                    if( isset($allmembers) && isset($_SESSION['Role']['Users']) ) {
                        $counter = 1;
                      foreach($allmembers as $value){
                        if ($_SESSION['position'] == "Administrator" && ($value->position_id == "PAMS/POS/1")) {
                            # code...
                            continue;
                        }
                ?>
                <div class="modal fade" id="UserEdit<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Edit Employee Info </h4>
                            </div>
                            <form action="../Access/Update_Employee_Info" method="post" >
                                <div class="modal-body" style="padding-top:0px">
                                    <div class="box-header"></div><!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <div class="row invoice-info">
                                            <div class="form-group has-success">
                                                <div class="row">

                                                    <?php 
                                                        //Retrieving Dept / Pos Name using ID
                                                        $dept_name_ret = $this->user_model->ret_dept_pos_name('departments',$value->department_id);
                                                        $pos_name_ret  = $this->user_model->ret_dept_pos_name('position'  ,$value->position_id);

                                                        if( !empty($dept_name_ret) ) {
                                                            foreach ($dept_name_ret as $dept_name_loop) {
                                                                # code...
                                                                $dept_name = $dept_name_loop->name;
                                                            }
                                                        }
                                                        else
                                                            $dept_name = "";

                                                        if( !empty($pos_name_ret) ) {
                                                            foreach ($pos_name_ret as $pos_name_loop) {
                                                                # code...
                                                                $pos_name = $pos_name_loop->name;
                                                            }
                                                        }
                                                        else
                                                            $pos_name = "";
                                                    ?>

                                                    <!-- Column Left -->
                                                    <div class="col-md-4">
                                                        <div class="col">
                                                                <label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-user"></i> 
                                                                     Employee Id 
                                                                </label>
                                                                <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="new_employee_id" value="<?php echo $value->employee_id; ?>" />
                                                                <input type="hidden" name="old_employee_id" value="<?php echo $value->employee_id; ?>">
                                                        </div>
                                                        <div class="col">
                                                                <label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-user"></i> 
                                                                     Fullname 
                                                                </label>
                                                                <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="fullname" value="<?php echo $value->fullname; ?>" />
                                                        </div>
                                                        <div class="col">
                                                                <label>
                                                                    <i class="fa fa-building"></i>        
                                                                    Department
                                                                </label>
                                                                <select class="form-control" tabindex="1" style="width:100%;" name="department" data-placeholder="Select Department(s)" required>
                                                                  <option label="Select One"></option>
                                                                    <?php 
                                                                      if( !empty($dept_info) ){
                                                                          foreach($dept_info as $dept) {
                                                                            if ($dept_name === $dept->name) {
                                                                                # code...
                                                                                $user_department = "Selected";
                                                                            }
                                                                    ?>
                                                                      <option <?php echo @$user_department; $user_department=""; ?>><?php echo $dept->name; ?></option>
                                                                    <?php 
                                                                          }
                                                                        }
                                                                    ?>  
                                                                </select>
                                                        </div>
                                                        <div class="col">
                                                            <label><i class="fa fa-user"></i> Job Title</label>
                                                            <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="jobtitle" value="<?php echo $value->jobtitle; ?>" />
                                                        </div>
                                                    </div>

                                                    <!-- Column Middle -->
                                                    <div class="col-md-3">
                                                            <div class="col">
                                                                <!--<label class="control-label" for="inputWarning">
                                                                    <i class="fa fa-bell-o"></i>
                                                                    Select Pic
                                                                </label>-->
                                                                <img id="profile" src="<?php echo base_url(); ?>resources/dist/img/user.png" class="img-circle" alt="User Image"/>
                                                            </div>
                                                    </div>

                                                    <!-- Column Right-->
                                                    <div class="col-md-5" style="padding-right:23px;">
                                                        <div class="col">
                                                            <label>Position</label>
                                                            <select class="form-control" tabindex="1" style="width:100%;" name="position" data-placeholder="Select Position" required>
                                                                  <option label="Select One"></option>
                                                                    <?php 
                                                                      if( !empty($position_info) ){
                                                                          foreach($position_info as $position) {
                                                                            if ($pos_name === $position->name) {
                                                                                # code...
                                                                                $user_position = "Selected";
                                                                            }
                                                                    ?>
                                                                      <option <?php echo @$user_position; $user_position=""; ?>><?php echo $position->name; ?></option>
                                                                    <?php 
                                                                          }
                                                                        }
                                                                    ?>  
                                                                </select>
                                                        </div>
                                                        <?php
                                                            $user_info = $this->user_model->user_info($value->employee_id);
                                                            if(!empty($user_info)) {
                                                                //$passwordcounter = 1;
                                                                foreach ($user_info as $user) {
                                                                    # code...
                                                        ?>
                                                        <div class="col">
                                                            <label class="control-label" for="inputSuccess">
                                                                <i class="fa fa-bell-o"></i> Username
                                                            </label>
                                                            <input type="text" class="form-control" id="inputWarning" name="username" value="<?php echo $user->username; ?>" required/>
                                                        </div>
                                                        <div class="col">
                                                            <div class="col-md-12 no-padding">
                                                                <label class="control-label" for="inputSuccess">
                                                                    <i class="fa fa-bell-o"></i> 
                                                                    Password
                                                                </label>
                                                                <input type="password" class="form-control" id="newpwd" placeholder="ChangeMe" name="password" value="<?php echo $user->passwd; ?>"/>
                                                                
                                                            </div>
                                                            <!--<div class="col-md-1" style="margin-top:24px;padding-left:5px">
                                                                <button id="reset<?php //echo $passwordcounter; ?>" type="button" class="btn btn-danger"><i class="fa fa-mail-reply"></i> Reset</button>
                                                            </div>-->
                                                        </div>
                                                        <?php 
                                                              }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="update_employee" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
                                        <a href="" class="btn btn-danger" data-dismiss="modal" ><i class="fa fa-times"></i> cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php  $counter++; } } ?>
                
                <!--Delete Modal -->
                <?php 
                    if( isset($allmembers) && isset($_SESSION['Role']['Users']) ) {
                        $counter = 1;
                      foreach($allmembers as $value){
                        if ($_SESSION['position'] == "Administrator" && ($value->position_id == "PAMS/POS/1")) {
                            # code...
                            continue;
                        }
                ?>
              <div class="modal fade" id="UserDelete<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog1">
                    <div class="modal-content1">
                      <div class="modal-header1">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                       </div>
                        <div class='color-palette'>
                          <form action="../Access/Delete_User" method="post">
                            <input type="hidden" name="employee_id" value="<?php echo $value->employee_id; ?>">
                            <div class="modal-body">
                              Do You Want To Really Delete <?php echo "<strong><em>".$value->fullname."</em></strong>"; ?> ....
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-danger" name="delete_user"><i class="fa fa-times"></i> Delete</button> 
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-mail-reply"></i> Cancel</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
              </div>
              <?php  $counter++; } } ?>
            </div>
        </div>
    </div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

