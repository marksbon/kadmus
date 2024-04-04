
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">New Employee(s)</h1>
          <ol class="breadcrumb">
            <li><a href="../Dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-gears"></i> Administration</li>
            <li class="active"><i class="fa fa-users"></i> Users</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#allusr" data-toggle="tab">All Users</a></li>
                      <li><a href="#newusr" data-toggle="tab">Add New</a></li>
                    </ul>
                    <div class="tab-content">

                      <div class="tab-pane active" id="allusr">
                            <table id="example1" class="table table-striped table-hover table-responsive">
                              <thead style="background-color:#009666;color:white">
                                <th style="width:5%"> Id # </th>
                                <th style="width:15%"> Username </th>
                                <th style="width:20%"> Password </th>
                                <th style="width:20%"> Group </th>
                                <th style="width:15%"> Account Status </th>
                                <th style="width:20%"> Action </th>
                              </thead>
                            <tbody>
                              <?php
                                #Displaying All Suppliers Info
                                if(!empty($allusers)) {
                                  
                                  $counter = 0;
                                  foreach($allusers As $user) {
                                    #System Admin Restriction
                                    if(($user->Employee_id == "KAD/SYS/1") && ($_SESSION['username'] != "sysadmin"))
                                        continue;
                              ?>
                              <tr>
                                <td><?= $user->Employee_id; ?></td>
                                <td><?= $user->Username; ?></td>
                                <td><?= substr(substr_replace($user->Password, str_repeat("*", 40), 0, 8),0,40); ?></td>
                                <td><?= $user->Group_Name; ?></td>
                                <td><?php $status = $user->Account_Status; 
                                    if($status == 0)
                                       print "<span class='label label-danger'>Inactive</span>";
                                    else if($status == 1)
                                       print "<span class='label label-success'>Active</span>";
                                    else
                                      print "<span class='label label-warning'>Unknown</span>";
                                ?>
                                </td>
                                <td>
                                <form action="Activation" method="Post">
                                <input type="hidden" name="username" value="<?= $user->Username; ?>" />
                                  <?php 
                                    if( isset($_SESSION['username']) &&  in_array('Users-Can Edit User Info.',$_SESSION['priv_exploded']) ) {
                                  ?>
                                  <a title="Delete" class="btn btn-primary btn-xs resetbtn" data-username="<?= $user->Username; ?>" data-userde="<?= base64_encode($user->Username); ?>">
                                    <i class="fa fa-key"></i> Reset 
                                  </a>
                                  <?php 
                                        }
                                    if( isset($_SESSION['username']) &&  in_array('Users-Can Delete User',$_SESSION['priv_exploded']) ) {
                                  ?>
                                  <a title="Delete" class="btn btn-danger btn-xs deletebtn" data-toggle="modal" data-delname="<?= $user->Username; ?>" data-delid="<?= $user->id; ?>" data-formurl="Delete_User">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                  <?php } ?>
                                  <?php $status = $user->Account_Status; 
                                    if($status == 0 &&  in_array('Users-Activate / Deactivate Users',$_SESSION['priv_exploded']))
                                       print "<button type='submit' name='activate_usr' class='btn btn-success btn-xs' style='width: 85px !important;padding-right: 20px;'><i class='fa fa-unlock'></i> Activate</button>";
                                    
                                    else if($status == 1 &&  in_array('Users-Activate / Deactivate Users',$_SESSION['priv_exploded']))
                                       print "<button type='submit' name='deactivate_usr' class='btn btn-danger btn-xs'><i class='fa fa-lock'></i> Deactivate</button>";
                                  ?>
                                </form>
                                </td> 
                              </tr> 
                              <?php
                                #
                                    $counter++; }
                                  }
                              ?> 
                            </tbody>
                            </table>
                      </div>

                      <div class="tab-pane" id="newusr">
                        <form action="Add_User" method="post">
                            <input type="hidden" class="form-control" name="id" value="<?= $id; ?>" readonly required />
                            <div class="box-body">
                                <div  class="col-xs-2"></div>
                              <!--Column left -->
                                 <div  class="col-xs-4">
                                    <div>
                                       <label>Department </label>
                                       <div class="input-group">
                                        <div class="input-group-addon"></div>
                                          <select class="form-control select2">
                                            <option></option>
                                            <option>Procurement</option>
                                            <option>Stores</option>
                                            <option>Accounts</option>
                                          </select>
                                      </div><!-- /.input group -->
                                    </div>
                                    <div class="control-label"  style="margin-top:5px;">
                                       <label> Employee Id </label>
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                          </div>
                                          <input type="text" class="form-control" name="emp_id" value="<?= $next_usr_id ?>" readonly />
                                      </div><!-- /.input group -->
                                    </div>
                                    <div style="margin-top:5px;">
                                       <label>Password </label>
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                          </div>
                                          <input type="password" class="form-control" name="usr_pwd_1" required/>
                                      </div><!-- /.input group -->
                                    </div>
                                 </div>
                              <!-- ./ Column Left -->
                              <!--Column middle -->
                                 <div  class="col-xs-4">
                                    <div> 
                                       <label>Employees </label>
                                       <div class="input-group">
                                        <div class="input-group-addon"></div>
                                          <select class="form-control select2" >
                                            <option></option>
                                            <option>Prez. John Mahama</option>
                                            <option>JM TOASO</option>
                                            <option>J M cuttop</option>
                                          </select>
                                      </div><!-- /.input group -->
                                    </div>
                                    <div style="margin-top:5px;">
                                       <label>Username </label>
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                          </div>
                                          <input type="text" class="form-control"  placeholder="" name="usr_name" required/>
                                      </div><!-- /.input group -->
                                    </div>
                                    <div style="margin-top:5px;">
                                       <label>Confirm Password </label>
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                          </div>
                                          <input type="password" class="form-control"  placeholder="" name="usr_pwd_2" required/>
                                      </div><!-- /.input group -->
                                    </div>
                                 </div>
                            <!-- ./Column middle -->
                            <!--Column right -->
                                 <div  class="col-xs-2"></div>
                            <!-- ./Column right -->
                            </div>
                            <div class="box-footer">
                                <div class="col-md-5"></div>
                                <div class="col-md-3">
                                    <button class="btn btn-success" type="submit" name="add_usr"><i class="fa fa-database"></i> Save</button>
                                    <a href="../Dashboard" class="btn btn-danger"><i class="fa fa-times"></i> Exit</a>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </form>
                      </div>
                        
                    <!-- /.tab-content -->
                    </div>
                    
                  </div>
                </div><!-- ./box-body -->
                
                <div class="box-footer">
                  
                </div><!-- /.box-footer -->
    
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2016 <a href="http://wisspri.com" >WissPri Technologies Limited</a>.</strong> All rights reserved.
      </footer>

      

