
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">
            New Stock-Intake
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
                <form action="Save_Stock" method="Post">
                <div class="box-header with-border">
                  
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
                              <input type="text" class="form-control"  id="new-stock" name="date_recv" required/>
                          </div><!-- /.input group -->
                        </div>
                        <div style="margin-top:5px;">
                           <label>Vendor's Name </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                              </div>
                              <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                          </div><!-- /.input group -->
                        </div>
                     </div>
                  <!-- ./ Column Left -->
                  <!--Column middle -->
                     <div  class="col-xs-4">
                        <div>
                           <label>Supplier </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-truck"></i>
                              </div>
                              <select class="form-control usrselect" name="sup_id" data-placeholder="Select Supplier" required>
                                 <option></option>
                                 <?php
                                    if(!empty($suppliers_info)) {
                                        foreach ($suppliers_info As $sup) {
                                 ?>
                                 <option value="<?= $sup->sup_id; ?>"><?= $sup->name; ?></option>
                                 <?php
                                             
                                        }
                                    }
                                 ?>
                              </select>
                          </div><!-- /.input group -->
                        </div>
                     </div>
                <!-- ./Column middle -->
                <!--Column right -->
                     <div  class="col-xs-4">
                        <div>
                           <label>Invoice No. </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                <strong>#</strong>
                              </div>
                              <input type="text" class="form-control"  placeholder="GF009856" name="inv_no" required />
                          </div><!-- /.input group -->
                        </div>
                        <div style="margin-top:5px;">
                           <label>Total Cost</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-money"></i>
                              </div>
                              <input type="number" class="form-control"  placeholder="5000" min="1" name="tot_cost" required/>
                          </div><!-- /.input group -->
                        </div>
                     </div>
                <!-- ./Column right -->
                
                <table class="table table-striped table-hover table-responsive col-md-12" style="margin-top: 10px;text-align:center">
                              <thead style="background-color:#009688;color:white">
                                <th style="width:1%">  </th>
                                <th style="width:3%"> ID </th>
                                <th style="width:15%"> Category </th>
                                <th style="width:15%"> Item Name </th>
                                <th style="width:15%"> Item Description </th>
                                <th style="width:9%"> Item Qty </th>
                                <th style="width:12%"> Expiry </th>
                                <th style="width:9%"> Unit Price </th>
                                <th style="width:15%"> Action </th>
                              </thead>
                            <tbody>
                              <tr>
                                <td><input type="checkbox" /></td>
                                <td>1.</td>
                                <td>
                                    <form action="Ajax_Load_ITM_Name" method="post">
                                      <select id="category" class="form-control newstock" name="cat_id" data-placeholder="Select Category" onchange="fetch_item(this.value);" required />
                                        <option></option>
                                        <?php
                                            if(!empty($category_info)) 
                                            {
                                               foreach ($category_info As $cat) 
                                               {
                                                  $catid = explode('/', $cat->cat_id);
                                                  print "<option value='{$catid[2]}'>".$cat->cat_name."</option>";          
                                               }
                                            }
                                        ?>
                                      </select>
                                    </form>
                                </td>
                                <td>
                                   <select id="stock" class="form-control " data-placeholder="Select Item" required >
                                      <option></option>
                                   </select>
                                </td>
                                <td>
                                   <select id="description" class="form-control newstock" data-placeholder="Select Description" required />
                                        <option></option>
                                        <?php
                                            if(!empty($Description_info)) {
                                              foreach ($Description_info As $desc) {
                                        ?>
                                        <option value="<?= $desc->desc_id; ?>"><?= $desc->desc; ?></option>
                                        <?php
                                                 
                                              }
                                            }
                                        ?>
                                    </select> 
                                </td>
                                <td>
                                   <input id="qty" type="number" class="form-control" placeholder="100" required /> 
                                </td>
                                <td>
                                   <input id="expiry" type="text" class="form-control expiry" required /> 
                                </td> 
                                <td>
                                   <input id="unit" type="number" class="form-control" placeholder="20" required />
                                </td>
                                <td>
                                  <a href="" title="Details" class="btn btn-primary btn-xs addmore" data-toggle="modal" data-target="view" data-dismiss="modal">
                                    <i class="fa fa-plus"></i> Add New
                                  </a>
                                  <a href="" title="Delete" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#Del" data-dismiss="modal">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                </td> 
                              </tr>  
                            </tbody>
                            </table>
                
                </div><!-- ./box-body -->
                <div class="box-footer">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary " name="stock_add"><i class="fa fa-database"></i> Save</button>
                        <a href="../Dashboard" class="btn btn-danger "><i class="fa fa-times"></i> Exit</a>
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

 