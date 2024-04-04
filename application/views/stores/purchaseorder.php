
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">Purchase Order</h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h4 class="pull-left">New Order</h4>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#inventory" data-toggle="tab">Order List</a></li>
                      <li><a href="#new" data-toggle="tab">New Order</a></li>
                    </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="inventory">   
                          <table  class="table table-bordered table-hover example1">
                         
                            <thead>
                            <tr style="background-color:#009688;color:white">
                              <th>Order#</th>
                              <th>Vender</th>
                              <th>Branch</th>
                              <th>Order Date</th>
                              <th>Status</th>
                              <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>p0-1</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td> 4/05/2016</td>
                              <td>Payment Started</td>
                              <td>$ 400,00</td>
                            </tr>
                           
                            <tr>
                             <td>p0-2</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td> 4/05/2016</td>
                              <td>Payment Started</td>
                              <td>$ 400,00</td>
                            </tr>
                            <tr>
                              <td>p0-3</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td> 4/05/2016</td>
                              <td>Payment Started</td>
                              <td>$ 400,00</td>
                            </tr>
                            <tr>
                             <td>p0-4</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td> 4/05/2016</td>
                              <td>Payment Started</td>
                              <td>$ 400,00</td>
                            </tr>
                           
                            <tr>
                               <td>p0-5</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td> 4/05/2016</td>
                              <td>Payment Started</td>
                              <td>$ 400,00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr style="background-color:#009688;color:white">
                              <th>Order#</th>
                              <th>Vender</th>
                              <th>Branch</th>
                              <th>Order Date</th>
                              <th>Status</th>
                              <th>Total</th>
                            </tr>
                            </tfoot>
                          </table>

                        </div>

                          <div class="tab-pane" id="new">
                            <div class="col-md-4">
                              <h3 class="box-title">From</h3>
                              <label>Vender</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Contact </label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Phone </label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Address </label>
                               <div class="input-group">
                                  <textarea type="text" class="form-control"  placeholder="Kwame Mintah"  style="width:230%; height:90px;" required/></textarea>
                              </div><!-- /.input group -->

                            </div>
                            <div class="col-md-4">

                              <h3 class="box-title">To</h3>
                              <label>Location </label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->

                            </div>

                            <div class="col-md-4" >
                            <h3 class="box-title">Order#</h3>
                              <label></label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="#00010" name="vendor" disabled required/>
                              </div><!-- /.input group -->
                               <label>Date</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Status</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                              <div class="col-md-6">
                               <label>Open by </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                              <label>Paid by </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                            </div>
                              <div class="col-md-6">
                              <label>Received by </label>
                               <div class="input-group">
                                
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                              <label>Mordified by </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                            </div>

                            </div>

                             <div class="col-md-12" style="background-color:#009688;color:white;margin-buttom:15px; margin-top:10px;">
                            <div class="col-md-2" >

                            <label style="color:#fff !important;">Product </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label style="color:#fff !important;">Order Quantity </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label style="color:#fff !important;">Recent Quantity </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label style="color:#fff !important;">Unit Price </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label style="color:#fff !important;">Discount </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label style="color:#fff !important;">Total </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                                  <button class="btn btn-primary" data-toggle="modal" data-target=""><i class="fa fa-plus"></i></button>
                              </div><!-- /.input group -->
                            </div>
                            </div>
                            </br><br></br><br></br></br><br></br>
                          
                            <div class="col-md-4">
                          
                           <label>Taxing Scheme</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-4">
                         
                           <label>Remarks</label>
                               <div class="input-group">
                                 
                                  <textarea type="text" class="form-control"   style="width:170%; height:200px;" required/></textarea>
                              </div><!-- /.input group -->

                            </div>
                            <div class="col-md-4">

                              <label>Sub-Total</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="#00010" name="vendor"  required/>
                              </div><!-- /.input group -->
                                  <label>Tax</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="#00010" name="vendor"  required/>
                              </div><!-- /.input group -->
                                  <label>Paid</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="#00010" name="vendor"  required/>
                              </div><!-- /.input group -->
                                  <label>Balance</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="#00010" name="vendor"  required/>
                              </div><!-- /.input group -->
                               <label></label>
                               <div class="input-group">
                                   <button type="submit" class="btn btn-success Pull-right" data-toggle="modal" data-target="#approvalmodal"><i class="fa fa-legal"></i> Approve</button>
                              </div><!-- /.input group -->

                            </div>

                             
                          </div>
                          
                       </div>
                          
                      
                 
                </div><!-- /.box -->
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

