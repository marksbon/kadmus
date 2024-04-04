
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">Sales Order</h1>
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
                            <tr>
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
                            <tr>
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
                              <h3 class="box-title">To</h3>
                              <label>Customer</label>
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
                            <h3 class="box-title">From</h3>
                            <label>Sales Rep </label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                                   <label>Location</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->

                            </div>
                            <div class="col-md-4">
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

                            </div><br></br><br></br><br></br><br></br><br></br>
                            <div class="col-md-2">
                              <form name="add" id="add" method="post">
                            <label>Product </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="product"  id="product"required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label>Order Quantity </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="Oquan" id="Oquan" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label>Recent Quantity </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="Rquan" id="Rquan" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label>Unit Price </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" id="Uprice" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label>Discount </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" id="discount" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-2">
                              <label>Total </label>
                               <div class="input-group">
                                  
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" id="total" required/>
                                  <input type="button" name="submit" value=""class="btn btn-primary" onclick="addcol">
                              </div><!-- /.input group -->
                            </div>
                            </form>
                            <script type="text/javascript">
                              function addcol(){
                                var num_box = document.getElementById("product").value;
                                if(num_box)
                                {
                                  for(var i=0; i < num_box; i++)
                                }
                              }
                            </script>
                            </br><br></br><br></br>
                          
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
                              <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                               <button type="submit" class="btn btn-success Pull-right" data-toggle="modal" data-target="#approvalmodal"><i class="fa fa-legal"></i> Approve</button>
                              </div><!-- /.input group -->
                              </div>

                             </div>
                            </div>
                          <div class="box-footer">
                  
                
                </div><!-- /.box-footer -->
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

