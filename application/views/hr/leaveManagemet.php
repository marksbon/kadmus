
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">Employee Leave Management</h1>
          <ol class="breadcrumb">
            <li><a href="../Dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-gears"></i> Human Resource</li>
            <li class="active"><i class="fa fa-users"></i> Employees</li>
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
                      <li class="active"><a href="#allusr" data-toggle="tab">All Employees</a></li>
                      <li><a href="#newusr" data-toggle="tab">New Leave</a></li>
                       
                    </ul>
                    <div class="tab-content">

                      <div class="tab-pane active" id="allusr">
                      <table id="" class="table table-bordered table-striped example1">
                          <thead>
                          <tr style="background-color:#009688;color:white">
                            <th>Id#</th>
                            <th>Employee name</th>
                            <th>Department/Group</th>
                            <th>Leave Entitled</th>
                            <th>Leave Exshusted</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Trident</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>2333333333</td>
                            <td> <button type='submit'data-toggle="modal" data-target="#employeeinfo" name='deactivate_usr' class='btn btn-primary btn-xs'><i class='fa fa-th' ></i> Details</button></td>
                          </tr>
                           <td>Trident</td>
                            <td>Internet</td>
                            <td> Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>2333333333</td>
                            <td>  <button type='submit'   data-toggle="modal" data-target="#employeeinfo" name='deactivate_usr' class='btn btn-primary btn-xs'><i class='fa fa-th' ></i> Details</button></td>
                          </tr>
                          <tr>
                             <td>Trident</td>
                            <td>Internet</td>
                            <td> Explorer 4.0</td>
                            <td>X</td>
                            <td>2333333333</td>
                            <td> <button type='submit'   data-toggle="modal" data-target="#employeeinfo" name='deactivate_usr' class='btn btn-primary btn-xs'><i class='fa fa-th' ></i> Details</button></td>
                          </tr>
                          <tr>
                            <td>X</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>2333333333</td>
                            <td> <button type='submit' data-toggle="modal" data-target="#employeeinfo"  name='deactivate_usr' class='btn btn-primary btn-xs'><i class='fa fa-th' ></i> Details</button></td>
                          </tr>
                          <tr>
                           <td>Trident</td>
                            <td>Internet</td>
                            <td> Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>2333333333</td>
                            <td>  <button type='submit' data-toggle="modal" data-target="#employeeinfo" name='deactivate_usr' class='btn btn-primary btn-xs'><i class='fa fa-th' ></i> Details</button></td>
                          </tr>
                          <tr>
                           <td>Trident</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>2333333333</td>
                            <td>  <button type='submit' data-toggle="modal" data-target="#employeeinfo" name='deactivate_usr' class='btn btn-primary btn-xs'><i class='fa fa-th' ></i> Details</button></td>
                          </tr>
                          <tr>
                          <td>Trident</td>
                            <td>Internet</td>
                            <td> Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>2333333333</td>
                            <td>  <button type='button' data-toggle="modal" data-target="#employeeinfo" name='deactivate_usr' class='btn btn-primary btn-xs'><i class='fa fa-th' ></i> Details</button></td>
                          </tbody>
                          <tfoot>
                          <tr style="background-color:#009688;color:white">
                             <th>Id#</th>
                            <th>Employee name</th>
                            <th>Department/Group</th>
                            <th>Leave Entitled</th>
                            <th>Leave Exshusted</th>
                            <th>Action</th>
                          </tr>
                          </tfoot>
                        </table>
                      </div>

                      <div class="tab-pane" id="newusr">
                        <div class="col-md-6">
                              <h3 class="box-title"></h3>
                              <label>Employee Name</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Department</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Leave Entitled</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                             

                            </div>

                            <div class="col-md-6">
                              <h3 class="box-title"></h3>
                                <label>Exshusted</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Branch</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                              <label></label>
                                <div class="input-group">
                                    
                                   <button type="submit" class="btn btn-success Pull-right" data-toggle="modal" data-target="#approvalmodal"><i class="fa fa-legal"></i> Approve</button>
                              </div><!-- /.input group -->
                            </div>
                        <!-- /.tab-content -->
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

      

