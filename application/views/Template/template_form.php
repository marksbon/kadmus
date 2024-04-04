
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">
            Approvals
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

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <form action="" method="Post">
                <div class="box-header with-border">
                  <h4 class="pull-left">Blank Template</h4>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!--Column left -->
                     <div  class="col-xs-4">
                        <div class="control-label">
                           <label> Date </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control"  id="new-stock" name="date_recieved" required/>
                          </div><!-- /.input group -->
                        </div>
                        <div style="margin-top:5px;">
                           <label>Item Name </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <input type="text" class="form-control"  id="popupDatepicker" placeholder="Filter" name="item_name" required/>
                          </div><!-- /.input group -->
                        </div>
                           <div style="margin-top:5px;">
                           <label>Location</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <input type="text" class="form-control"  placeholder="WareHouse B, Shelf D" min="1" name="location" required/>
                          </div><!-- /.input group -->
                        </div>
                            <div style="margin-top:5px;">
                           <label>Minimum Amt.</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <input type="number" class="form-control"  placeholder="100" min="1" name="min_amt" required/>
                          </div><!-- /.input group -->
                        </div>
                     </div>
                  <!-- ./ Column Left -->
                  
                  <!--Column middle -->
                     <div  class="col-xs-4">
                        <div>
                           <label>Category </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <select class="form-control usrselect" name="department" data-placeholder="Select Category" required>
                                 <option></option>
                                 <option>Material</option>
                                 <option>Vehicle / Equipment / Machines</option>
                              </select>
                          </div><!-- /.input group -->
                        </div>

                        <div style="margin-top:5px;">
                           <label>Item Qty </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <input type="number" class="form-control"  placeholder="1" min="1" name="qty" required/>
                          </div><!-- /.input group -->
                        </div>
                           <div style="margin-top:5px;">
                           <label>Unit Price</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <input type="number" class="form-control"  placeholder="100" min="1" required/>
                          </div><!-- /.input group -->
                        </div>
                        <div style="margin-top:5px;">
                           <label>Expiry</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control"  id="expiry" name="date_recieved" required/>
                          </div><!-- /.input group -->
                        </div>
                     </div>
                <!-- ./Column middle -->
                
                <!--Column right -->
                     <div  class="col-xs-4">
                        <div>
                           <label>Supplier </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <select class="form-control usrselect" name="department" data-placeholder="Select Supplier" required>
                                 <option></option>
                                 <option>Ghacem</option>
                                 <option>Dangote</option>
                                 <option>Michellette</option>
                              </select>
                          </div><!-- /.input group -->
                        </div>
                        <div style="margin-top:5px;">
                           <label>Vendor's Name </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <input type="text" class="form-control"  placeholder="Kwame Mintah" min="1" required/>
                          </div><!-- /.input group -->
                        </div>
                        <div style="margin-top:5px;">
                           <label>Item Description </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <input type="text" class="form-control"  placeholder="Diseal 27C" min="1" required/>
                          </div><!-- /.input group -->
                        </div>
                     

                        <div style="margin-top:5px;">
                           <label>Total Cost</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                              </div>
                              <input type="number" class="form-control"  placeholder="5000" min="1" required/>
                          </div><!-- /.input group -->
                        </div>
                     </div>
                <!-- ./Column right -->
                
                </div><!-- ./box-body -->
                
                <div class="box-footer">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-success pull-right" name="stock_add" value="Save" />
                    </div>
                    <div class="col-md-4"></div>
                  <!-- /.row -->
                </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://wisspri.com" >WissPri Technologies Limited</a>.</strong> All rights reserved.
      </footer>

 