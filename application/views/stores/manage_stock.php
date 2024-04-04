
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">Manage Stock</h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <form action="" method="Post">
                <div class="box-header with-border"></div><!-- /.box-header -->
                <div class="box-body">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#inventory" data-toggle="tab">All Stock</a></li>
                      <li><a href="#material" data-toggle="tab">Tools/Materials List</a></li>
                      <li><a href="#machine" data-toggle="tab">Machine/Equipment List</a></li>
                      <li><a href="#avail" data-toggle="tab">Least Available</a></li>
                      <li><a href="#expire" data-toggle="tab">Nearest Expiry</a></li>
                      <li><a href="#customers" data-toggle="tab">Customers</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="inventory">
                        <table class="table table-striped table-hover table-responsive example1">
                          <thead style="background-color:#009688;color:white">
                            <th style="width:4%"> Id # </th>
                            <th style="width:12%"> Category </th>
                            <th style="width:20%"> Item Name </th>
                            <th style="width:15%"> Description </th>
                            <th style="width:10%"> Shelf Loc.</th>
                            <th style="width:16%"> Remarks </th>
                            <th style="width:10%"> Action </th>
                          </thead>
                          <tbody>
                            <?php
                              if(!empty($all_prod)) 
                              {
                                $counter = 0;
                                foreach ($all_prod As $prod_det) 
                                {
                                  # Checking All Conditions
                                  $prod_expiry = new DateTime($prod_det->Expiry);
                                  $current_date = new DateTime("now");
                                  $interval = $current_date->diff($prod_expiry);
                                  
                                  # Definning All Criticals
                                  if( $prod_det->Current_Qty <= 0 && $interval->format("%r%a") <= 0) 
                                  {
                                    $style    = "";
                                    $remarks  = "<span class='label label-danger'> Out Of Stock / Expired </span>";
                                  }
                                  elseif( $prod_det->Current_Qty <= 0 )
                                  {
                                    $style    = "";
                                    $remarks  = "<span class='label label-danger'> Out Of Stock </span>";
                                  }
                                  elseif( $interval->format("%r%a") <= 0 )
                                  {
                                    $style    = "";
                                    $remarks  = "<span class='label label-danger'>  Expired </span>";
                                  }
                                  
                                  # Definning All Warning
                                  elseif( ($prod_det->Current_Qty > 1 && $prod_det->Current_Qty < 20) && ($interval->format("%r%a") > 1 && $interval->format("%r%a") < 20)) 
                                  {
                                    $style    = "";
                                    $remarks  = "<span class='label label-warning'> Low Stock </span>";
                                  }
                                  elseif( $prod_det->Current_Qty > 1 && $prod_det->Current_Qty < 20 )
                                  {
                                    $style    = "";
                                    $remarks  = "<span class='label label-warning'> Low Stock </span>";
                                  }
                                  elseif( $interval->format("%r%a") > 1 && $interval->format("%r%a") < 20 )
                                  {
                                    $style    = "";
                                    $remarks  = " <span class='label label-danger'> Expired </span>";
                                  }
                              ?>
                              <tr style="<?= @$style; ?>">
                                <td><?= $prod_det->Product_ID; ?></td>
                                <td><?= $prod_det->Category; ?></td>
                                <td><?= $prod_det->Item_Name; ?></td> 
                                <td><?= $prod_det->Description; ?></td> 
                                <td><?= $prod_det->Location; ?></td>
                                <td>
                                    <strong><em><?= @$remarks; ?></em></strong>
                                </td>
                                <td>
                                 <a href="#" class="btn btn-primary btn-xs prod-details-mod" data-productid="<?= $prod_det->Product_ID?>" data-prodcategory="<?= $prod_det->Category ?>" data-prodname="<?= $prod_det->Item_Name ?>" data-proddesc="<?= $prod_det->Description ?>" data-prodloc="<?= $prod_det->Location ?>" data-produnitqty="<?= $prod_det->Unit_Qty ?>" data-produnitprice="<?= $prod_det->Unit_Price ?>" data-prodcurrqty="<?= $prod_det->Current_Qty ?>" data-prodexpiry="<?= $prod_det->Expiry ?>" >
                                    <i class="fa fa-th"></i> Details
                                  </a>
                                </td>
                               </tr> 
                               <?php
                                        unset($style);
                                        unset($remarks);
                                        $counter++;
                                        }
                                    }
                                ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="tab-pane" id="material">
                        <table id="tools-mat-list" class="table table-striped table-hover table-responsive example1">
                          <thead style="background-color:#009688;color:white">
                            <th style="width:5%"> Id # </th>
                            <th style="width:20%"> Category </th>
                            <th style="width:20%"> Item Name </th>
                            <th style="width:10%"> Avail. Stock </th>
                            <th style="width:13%"> Supplier </th>
                            <th style="width:33%"> Action </th>
                          </thead>
                          <tbody>
                            <tr>
                                <td>1</td>
                                <td>Material</td>
                                <td>Cement</td>
                                <td>11</td> 
                                <td>Dangote</td>
                                <td>
                                  <a href="" title="Details" class="btn btn-primary btn-xs" data-toggle="modal" data-target="view" data-dismiss="modal">
                                    <i class="fa fa-th"></i> Details
                                  </a>
                                  <a href="" title="Update" class="btn btn-success btn-xs" data-toggle="modal" data-target="#update1">
                                    <i class="fa fa-line-chart"></i> Update
                                  </a>
                                  <a href="" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Del" data-dismiss="modal">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                </td> 
                              </tr> 
                              <tr>
                                <td>2</td>
                                <td>Veh/Equip</td>
                                <td>Rim 16</td> 
                                <td>12</td> 
                                <td>Michellette</td>
                                <td>
                                 <a href="" title="Details" class="btn btn-primary btn-xs" data-toggle="modal" data-target="view" data-dismiss="modal">
                                    <i class="fa fa-th"></i> Details
                                  </a>
                                  <a href="" title="Update" class="btn btn-success btn-xs" data-toggle="modal" data-target="#update1">
                                    <i class="fa fa-line-chart"></i> Update
                                  </a>
                                  <a href="" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Del" data-dismiss="modal">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                </td> 
                               </tr> 
                            </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="machine">
                            <table id="example1" class="table table-striped table-hover table-responsive">
                              <thead style="background-color:#009688;color:white">
                                <th style="width:5%"> Id # </th>
                                <th style="width:20%"> Category </th>
                                <th style="width:20%"> Item Name </th>
                                <th style="width:10%"> Avail. Stock </th>
                                <th style="width:13%"> Supplier </th>
                                <th style="width:33%"> Action </th>
                              </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Material</td>
                                <td>Cement</td>
                                <td>11</td> 
                                <td>Dangote</td>
                                <td>
                                  <a href="" title="Details" class="btn btn-primary btn-xs" data-toggle="modal" data-target="view" data-dismiss="modal">
                                    <i class="fa fa-th"></i> Details
                                  </a>
                                  <a href="" title="Update" class="btn btn-success btn-xs" data-toggle="modal" data-target="#update1">
                                    <i class="fa fa-line-chart"></i> Update
                                  </a>
                                  <a href="" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Del" data-dismiss="modal">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                </td> 
                              </tr> 
                              <tr>
                                <td>2</td>
                                <td>Veh/Equip</td>
                                <td>Rim 16</td> 
                                <td>12</td> 
                                <td>Michellette</td>
                                <td>
                                 <a href="" title="Details" class="btn btn-primary btn-xs" data-toggle="modal" data-target="view" data-dismiss="modal">
                                    <i class="fa fa-th"></i> Details
                                  </a>
                                  <a href="" title="Update" class="btn btn-success btn-xs" data-toggle="modal" data-target="#update1">
                                    <i class="fa fa-line-chart"></i> Update
                                  </a>
                                  <a href="" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Del" data-dismiss="modal">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                                </td> 
                               </tr> 
                            </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="avail">
                            <table id="example4" class="table table-striped table-hover table-responsive">
                              <thead style="background-color:#009688;color:white">
                                <th style="width:7%"> Id # </th>
                                <th style="width:15%"> Category </th>
                                <th style="width:20%"> Item Name </th>
                                <th style="width:15%"> Description </th>
                                <th style="width:15%"> Avail. Stock </th>
                                <th style="width:15%"> Shelf Loc. </th>
                                <th style="width:12%"> Remarks </th>
                                <th style="width:20%"> Action </th>
                              </thead>
                            <tbody>
                            <?php
                                if(!empty($all_prod)) 
                                {
                                    $counter = 0;
                                    foreach ($all_prod As $prod_det) {
                                        # Checking All Conditions
                                        $prod_expiry = new DateTime($prod_det->Expiry);
                                        $current_date = new DateTime("now");
                                        $interval = $current_date->diff($prod_expiry);
                                        # Definning All Criticals
                                        if( $prod_det->Current_Qty <= 0 ) 
                                        {
                                            $style    = "";
                                            $remarks  = "<input type='button' value ='Expiry' class='btn btn-warning btn-xs prod-details-mod'>";
                                        }
                                        elseif( $prod_det->Current_Qty > 1 && $prod_det->Current_Qty < 20 )
                                        {
                                            $style    = "";
                                            $remarks  = "<input type='button' value ='Expiry' class='btn btn-primary btn-xs prod-details-mod'>";
                                        }
                                        else
                                        {
                                            $counter++;
                                            continue;
                                        }
                            ?>
                                <tr style="<?= @$style; ?>">
                                    <td><?= $prod_det->Product_ID; ?></td>
                                    <td><?= $prod_det->Category; ?></td>
                                    <td><?= $prod_det->Item_Name; ?></td> 
                                    <td><?= $prod_det->Description; ?></td>
                                    <td><?= $prod_det->Current_Qty; ?></td> 
                                    <td><?= $prod_det->Location; ?></td>
                                    <td>
                                        <strong><em><?= @$remarks; ?></em></strong>
                                    </td>
                                    <td>
                                    <a href="#" class="btn btn-primary btn-xs prod-details-mod" data-productid="<?= $prod_det->Product_ID?>" data-prodcategory="<?= $prod_det->Category ?>" data-prodname="<?= $prod_det->Item_Name ?>" data-proddesc="<?= $prod_det->Description ?>" data-prodloc="<?= $prod_det->Location ?>" data-produnitqty="<?= $prod_det->Unit_Qty ?>" data-produnitprice="<?= $prod_det->Unit_Price ?>" data-prodcurrqty="<?= $prod_det->Current_Qty ?>" data-prodexpiry="<?= $prod_det->Expiry ?>" >
                                      <i class="fa fa-th"></i> Details
                                    </a>
                                    </td>
                                </tr> 
                                <?php
                                        # Resetting Variables
                                        unset($style);
                                        unset($remarks);
                                        $counter++;
                                        }
                                    }
                                ?>
                            </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="expire">
                            <table id="example3" class="table table-striped table-hover table-responsive">
                              <thead style="background-color:#009688;color:white">
                                <th style="width:7%"> Id # </th>
                                <th style="width:20%"> Category </th>
                                <th style="width:20%"> Item Name </th>
                                <th style="width:15%"> Expiry Date </th>
                                <th style="width:12%"> No. of Days Left </th>
                                <th style="width:12%"> Remarks </th>
                                <th style="width:20%"> Action </th>
                              </thead>
                              <tbody>
                              <?php
                                if(!empty($all_prod)) 
                                {
                                    $counter = 0;
                                    foreach ($all_prod As $prod_det) {
                                        # Checking All Conditions
                                        $prod_expiry = new DateTime($prod_det->Expiry);
                                        $current_date = new DateTime("now");
                                        $interval = $current_date->diff($prod_expiry);
                                        # Definning All Criticals
                                        if( $interval->format("%r%a") <= 0 ) 
                                        {
                                            $style    = "";
                                            $remarks  = "Expired";
                                        }
                                        elseif( $interval->format("%r%a") > 1 && $interval->format("%r%a") < 20 )
                                        {
                                            $style    = "";
                                            $remarks  = "Expiry ";
                                        }
                                        else 
                                        {
                                            $counter++;
                                            continue;
                                        }
                                            
                            ?>
                            <tr style="<?= @$style; ?>">
                                    <td><?= $prod_det->Product_ID; ?></td>
                                    <td><?= $prod_det->Category; ?></td>
                                    <td><?= $prod_det->Item_Name; ?></td> 
                                    <td><?= $prod_det->Expiry; ?></td>
                                    <td><?= $interval->format("%r%a"); ?></td>
                                    <td>
                                        <strong><em><?= @$remarks; ?></em></strong>
                                    </td>
                                    <td>
                                      <a href="#" class="btn btn-primary btn-xs prod-details-mod" data-productid="<?= $prod_det->Product_ID?>" data-prodcategory="<?= $prod_det->Category ?>" data-prodname="<?= $prod_det->Item_Name ?>" data-proddesc="<?= $prod_det->Description ?>" data-prodloc="<?= $prod_det->Location ?>" data-produnitqty="<?= $prod_det->Unit_Qty ?>" data-produnitprice="<?= $prod_det->Unit_Price ?>" data-prodcurrqty="<?= $prod_det->Current_Qty ?>" data-prodexpiry="<?= $prod_det->Expiry ?>" >
                                    <i class="fa fa-th"></i> Details
                                  </a>
                                    </td>
                                </tr> 
                            <?php
                                        # Resetting Variables
                                        unset($style);
                                        unset($remarks);
                                        $counter++;
                                    }
                                }
                            ?>
                            </tbody>
                           </table>
                        </div>
                    <!-- /.tab-content -->

                    <div class="tab-pane" id="customers">
                      <div class="box-body">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#cust" data-toggle="tab">Customer List</a></li>
                      <li><a href="#new" data-toggle="tab">New Customer</a></li>
                    </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="cust">   
                          <table  class="table table-bordered table-hover example1" >
                         
                            <thead>
                            <tr style="background-color:#009688;color:white">
                              <th>Name</th>
                              <th>Pricing</th>
                              <th>Discount</th>
                              <th>Balance</th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>p0-1</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td>$ 400,00</td>
                            </tr>
                           
                            <tr>
                             <td>p0-2</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td>$ 400,00</td>
                            </tr>
                            <tr>
                              <td>p0-3</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td>$ 400,00</td>
                            </tr>
                            <tr>
                             <td>p0-4</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td>$ 400,00</td>
                            </tr>
                           
                            <tr>
                               <td>p0-5</td>
                              <td>nextly</td>
                              <td>Accra</td>
                              <td>$ 400,00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr style="background-color:#009688;color:white">
                              <th>Name</th>
                              <th>Pricing</th>
                              <th>Discount</th>
                              <th>Balance</th>
                            
                            </tr>
                            </tfoot>
                          </table>
                          </div>

                          <div class="tab-pane" id="new">
                            <div class="col-md-6">
                              <h3 class="box-title">Basic Information</h3>
                              <label>Customer Name</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Balance </label>
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
                               <label>Sales Rep</label>
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

                            </div>
                            <div class="col-md-6">
                            <h3 class="box-title">Purchase Information</h3>
                            <label>Price Plane </label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Retail Price/Normal Price" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Discount</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="00.0" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Payment Terms </label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Process" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Taxing Scheme</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="VAT" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Carrier</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Car" name="vendor" required/>
                              </div><!-- /.input group -->

                            </div>
                           <br></br><br></br><br></br><br></br><br></br>
                      
                            </br><br></br><br></br>
                          
                            <div class="col-md-6">
                          <h3 class="box-title">Main Address</h3>
                           <label>Address Line1</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Address Line2</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Region</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Country</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="col-md-6">
                          <h3 class="box-title">Alternative Address</h3>
                            <label>Address Line1</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Address Line2</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                                    <label>Region</label>
                               <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control"  placeholder="Kwame Mintah" name="vendor" required/>
                              </div><!-- /.input group -->
                               <label>Country</label>
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
                    
                             </div>
                            </div>
                          
                          </div></br></br><br/>
                        <div class="box-footer">
                  
               
                </div><!-- /.box-footer -->
                      
                 
                </div><!-- /.box -->
                    </div>
                  </div>
                </div><!-- ./box-body -->
                
                <div class="box-footer">
                
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

