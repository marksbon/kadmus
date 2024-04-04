  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Stock
            <small>range sliders</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">UI</a></li>
            <li class="active">Sliders</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         

        
        
              <div class="box ">
              
                <div class="col-md-12">
                <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#inventory" data-toggle="tab">All Stock</a></li>
              <li><a href="#tab_5" data-toggle="tab">Materials List</a></li>
              <li><a href="#tab_5" data-toggle="tab">Veh/Equip/Mach List</a></li>
          <!--    <li><a href="#suppliers" data-toggle="tab">Suppliers</a></li>
              <li><a href="#new" data-toggle="tab">New Stock</a></li>-->
            </ul>
                <div class="tab-content">
            
            <div class="tab-pane active" id="inventory">
              <div class="box" style="width:97%; border:0px">
                <div class="box-header"></div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <table id="example1" class="table table-striped table-hover table-responsive">
                        <thead style="background-color:green;color:white">
                          <th style="width:5%"> Id # </th>
                          <th style="width:10%"> Category </th>
                          <th style="width:20%"> Item Name </th>
                           <th style="width:10%">Stock Disb.</th>
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
                            <td>11</td> 
                            <td>Dangote</td>
                            <td>
                              <a href="" title="Details" class="btn btn-primary btn-xs" data-toggle="modal" data-target="view" data-dismiss="modal">
                                <i class="fa fa-th"></i> Details
                              </a> |
                              <a href="" title="Edit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#Edit" data-dismiss="modal">
                                <i class="fa fa-pencil"></i> Edit
                              </a> |
                              <a href="" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Del" data-dismiss="modal">
                                <i class="fa fa-pencil"></i> Delete
                              </a>
                            </td> 
                          </tr> 
                          <tr>
                            <td>2</td>
                            <td>Veh/Equip</td>
                            <td>Rim 16</td>
                            <td>12</td> 
                            <td>12</td> 
                            <td>Michellette</td>
                            <td>
                              <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="view" data-dismiss="modal">
                                <i class="fa fa-th"></i> Details
                              </a> |
                              <a href="" class="btn btn-success btn-xs" data-toggle="modal" data-target="#Edit" data-dismiss="modal">
                                <i class="fa fa-pencil"></i> Edit
                              </a> |
                              <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Del" data-dismiss="modal">
                                <i class="fa fa-pencil"></i> Delete
                              </a>
                            </td> 
                          </tr> 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
            
            <div class="tab-pane " id="new">
               <form action="Dashboard/Add_Stock" method="post" >
                  <div class="row">
                     
                     <!--Column left -->
                     <div  class="col-xs-4">
                        <div>
                           <label> Date </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control"  id="stockpopper" value="<?php echo gmdate("l F j, Y"); ?>" name="date_recieved" required/>
                          </div><!-- /.input group -->
                        </div>
                        <div style="margin-top:5px;">
                           <label>Item Name </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-cart-plus"></i>
                              </div>
                              <input type="text" class="form-control"  id="popupDatepicker" placeholder="Filter" name="item_name" required/>
                          </div><!-- /.input group -->
                        </div>
                           <div style="margin-top:5px;">
                           <label>Location</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-arrow-down"></i>
                              </div>
                              <input type="text" class="form-control"  placeholder="WareHouse B, Shelf D" min="1" name="location" required/>
                          </div><!-- /.input group -->
                        </div>
                            <div style="margin-top:5px;">
                           <label>Minimum Amt.</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-arrow-down"></i>
                              </div>
                              <input type="number" class="form-control"  placeholder="Diseal 27C" min="1" name="min_amt" required/>
                          </div><!-- /.input group -->
                        </div>
                     </div>
                     
                     <!--Column middle -->
                     <div  class="col-xs-4">
                        <div>
                           <label>Category </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-sitemap"></i>
                              </div>
                              <select class="form-control" tabindex="1" name="department" data-placeholder="Select Department(s)" namne="category" required>
                                 <option label="Select One"></option>
                                 <option>Material</option>
                                 <option>Veh / Equip / Machines</option>
                              </select>
                          </div><!-- /.input group -->
                        </div>

                        <div style="margin-top:5px;">
                           <label>Item Qty </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-cart-plus"></i>
                              </div>
                              <input type="number" class="form-control"  placeholder="1" min="1" name="qty" required/>
                          </div><!-- /.input group -->
                        </div>
                           <div style="margin-top:5px;">
                           <label>Unit Price</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-money"></i>
                              </div>
                              <input type="number" class="form-control"  placeholder="100" min="1" required/>
                          </div><!-- /.input group -->
                        </div>
                        <div style="margin-top:5px;">
                           <label>Expiry</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-arrow-down"></i>
                              </div>
                              <input type="text" class="form-control"  id="popupDatepickerexp" placeholder="Diseal 27C" min="1" />
                          </div><!-- /.input group -->
                        </div>
                     </div>
                     
                     <!--Column right -->
                     <div  class="col-xs-4">
                        <div>
                           <label>Supplier Company</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-truck"></i>
                              </div>
                              <select class="chosen-select" tabindex="1" name="department" data-placeholder="Ghacem" required>
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
                                 <i class="fa fa-arrow-down"></i>
                              </div>
                              <input type="text" class="form-control"  placeholder="Kwame Mintah" min="1" required/>
                          </div><!-- /.input group -->
                        </div>
                        <div style="margin-top:5px;">
                           <label>Item Description </label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-arrow-down"></i>
                              </div>
                              <input type="text" class="form-control"  placeholder="Diseal 27C" min="1" required/>
                          </div><!-- /.input group -->
                        </div>
                     

                        <div style="margin-top:5px;">
                           <label>Total Cost</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <i class="fa fa-arrow-down"></i>
                              </div>
                              <input type="number" class="form-control"  placeholder="Diseal 27C" min="1" required/>
                          </div><!-- /.input group -->
                        </div>
                     </div>

                  </div>
                  <div class="modal-footer">
                     <button type="submit" class="btn btn-primary" name="add_stock"><i class="fa fa-database"></i> Save</button>
                     <a href="../Dashboard" class="btn btn-danger"><i class="fa fa-times"></i> Exit</a>
                  </div>
               </form>
                                        
                  </div>

            <div class="tab-pane <?php echo @$_SESSION['position_tabpane']; ?>" id="suppliers">
               <div class="box" style="width:97%; border:0px">
                 
          <!--       <div class="box-body">
                   <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="<?php echo @$_SESSION['personal_details_subtab']; ?>"><a href="#list" data-toggle="tab"> Suppliers List</a></li>
                      <li class="<?php echo @$_SESSION['leave_navtab']; ?>"><a href="#newsupplier" data-toggle="tab"> New Supplier </a></li>
                    </ul>
                    <div class="tab-content">
                     <!-- Personal Details -->
                      <div class="tab-pane active" id="list">
                        <div class="form-group has-success" >
                             <div class="row">
                    <div class="col-md-12">
                      <table id="supplierlist" class="table table-striped table-hover table-responsive">
                        <thead style="background-color:#00a65a;color:white">
                          <th style="width:5%"> Id # </th>
                          <th style="width:10%"> Name </th>
                          <th style="width:20%"> Address </th>
                          <th style="width:10%">Tel</th>
                           <th style="width:10%">Alt. Tel</th>
                          <th style="width:13%"> email </th>g
                          <th style="width:33%"> Action </th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Ghacem</td>
                            <td>P.O.Box AN 10227, Accra-North</td>
                            <td>(+233) 541 786 220</td> 
                            <td>(+233) 541 786 220</td> 
                            <td>email</td>
                            <td>
                              <a href="" title="Details" class="btn btn-primary btn-xs" data-toggle="modal" data-target="view" data-dismiss="modal">
                                <i class="fa fa-th"></i> Details
                              </a> |
                              <a href="" title="Edit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#Edit" data-dismiss="modal">
                                <i class="fa fa-pencil"></i> Edit
                              </a> |
                              <a href="" title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Del" data-dismiss="modal">
                                <i class="fa fa-pencil"></i> Delete
                              </a>
                            </td> 
                          </tr> 
                        </tbody>
                      </table>
                    </div>
           <!--       </div>                 
                        </div>
                      </div>

                      <div class="tab-pane " id="newsupplier">
                                             <div class="form-group has-success" style="overflow:hidden">
                                              <form action="New_Employee" method="post">
                                                <div class="row">
                                                   <!-- Column Left -->
                                                   <div class="col-md-4">
                                                      <div class="col">
                                                         <label class="control-label" for="inputSuccess">
                                                            
                                                               kudsbgfr
                                                         </label>
                                                         <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="fullname" value="<?php print @$_SESSION['employee_info']['fullname']; ?>" required />
                                                      </div>
                                                      <div class="col">
                                                         <label class="control-label" for="inputSuccess">
                                                            
                                                               Middle Name 
                                                         </label>
                                                         <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="fullname" value="<?php print @$_SESSION['employee_info']['fullname']; ?>" required />
                                                      </div>
                                                      <div class="col">
                                                         <label class="control-label" for="inputSuccess">
                                                            
                                                               First Name 
                                                         </label>
                                                         <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..." name="fullname" value="<?php print @$_SESSION['employee_info']['fullname']; ?>" required />
                                                      </div>
                                                      <div class="col">
                                                         <label>
                                                                   
                                                               Date OF Birth
                                                            </label>
                                                            <input type="text" class="form-control" id="popupDatepicker" placeholder="Thursday November 12, XXXX" name="dob" value="<?php echo @$_SESSION['employee_info']['dob']; ?>" required/>
                                                      </div>
                                                   </div>

                                                    <!-- Column Middle -->
                                                    <div class="col-md-4">
                                                        <div class="col">
                                                         <label> Gender</label>
                                                         <select class="form-control" single tabindex="1" style="width:100%;" name="gender"  required>
                                                         <?php 
                                                          if (!empty($_SESSION['employee_info']['gender'])) {
                                                            # code...
                                                            if ($_SESSION['employee_info']['gender'] == "M") {
                                                              # code...
                                                              $female = "";
                                                              $male = "selected";
                                                              $default = "";
                                                            }
                                                            elseif ($_SESSION['employee_info']['gender'] == "F") {
                                                                $female = "selected";
                                                                $male = "";
                                                                $default = "";
                                                            }
                                                            else {
                                                              $female = "selected";
                                                              $male = "";
                                                              $default = "";
                                                             } 
                                                          }
                                                          ?>
                                                            <option label="select one" <?php print @$default; ?>></option>
                                                            <option value="M" <?php print @$male; ?>>Male</option>
                                                            <option value="F" <?php print @$female; ?>>Female</option>  
                                                         </select>
                                                      </div>
                                                      <div class="col">
                                                         <label>       
                                                               Marital Status
                                                         </label>
                                                         <select class="form-control" single tabindex="1" style="width:100%;" name="marital_status"  required>
                                                          <?php 
                                                          if (!empty($_SESSION['employee_info']['marital_status'])) {
                                                            # code...
                                                            if ($_SESSION['employee_info']['marital_status'] == "Single") {
                                                              # code...
                                                              $Single = "selected";
                                                              $Married = "";
                                                              $default = "";
                                                            }
                                                            elseif ($_SESSION['employee_info']['marital_status'] == "Married") {
                                                                $Single = "";
                                                                $Married = "selected";
                                                                $default = "";
                                                            }
                                                            else {
                                                              $Single = "";
                                                              $male = "";
                                                              $default = "selected";
                                                             } 
                                                          }
                                                          ?>
                                                            <option label="select one"></option>
                                                            <option  <?php print @$Single; ?>>Single</option>
                                                            <option  <?php print @$Married; ?>>Married</option>  
                                                            <option  <?php print @$default; ?>>Divorced</option>
                                                         </select>
                                                      </div>
                                                      <div class="col">
                                                         <label> 
                                                               Nationality
                                                         </label>
                                                         <select class="chosen-select" single tabindex="1" name="nationality" data-placeholder="Select One" required>
                                                            <option></option>
                                                                    <?php 
                                                                        if( !empty($countries) ){
                                                                            foreach($countries as $country) {
                                                                    
                                                                        echo "<option value='$country->country_code'>$country->country_name</option>";
                                                                    
                                                                            }
                                                                        }
                                                                    ?>  
                                                         </select>
                                                      </div>
                                                      <div class="col">
                                                         <label class="control-label" for="inputSuccess">
                                                               Home Address 
                                                         </label>
                                                         <input type="text" class="form-control" id="inputWarning" placeholder="12 Coca-cola Avenue,Spintex" name="surname" value="<?php echo set_value('surname'); ?>" required />
                                                      </div>
                                                    </div>

                                                    <!-- Column Right-->
                                                    <div class="col-md-4">
                                                      <div class="col">
                                                         <label>       
                                                                Mobile No.
                                                         </label>
                                                         <input type="text" class="form-control" id="inputWarning" data-inputmask='"mask": "(+999) 999-999-999"' data-mask placeholder="(+233) 541-786-220" name="username" value="<?php echo set_value('username'); ?>" required/>
                                                      </div>
                                                      <div class="col">
                                                         <label> 
                                                               Alternative Mobile No.
                                                         </label>
                                                         <input type="text" class="form-control" id="inputWarning" data-inputmask='"mask": "(+999) 999-999-999"' data-mask placeholder="(+233) 261-872-975" name="username" value="<?php echo set_value('username'); ?>" required/>
                                                      </div>
                                                      <div class="col">
                                                         <label class="control-label" for="inputSuccess">
                                                             Email
                                                         </label>
                                                         <input type="email" class="form-control" id="inputWarning" placeholder="derrick@gmail.com" name="username" value="<?php echo set_value('username'); ?>" required/>
                                                      </div>
                                                      <div class="col">
                                                         <label class="control-label" for="inputSuccess">
                                                               Postal Address
                                                            </label><br>
                                                            <input type="text" class="form-control" id="inputWarning" placeholder="P.O.Box AN 10227, Accra-North" name="username" value="<?php echo set_value('username'); ?>" required/>
                                                      </div>
                                                   </div>

                                                </div><br>

                                                <div class="footer">
                                                   <div class="row">
                                                      <div class="col-md-5"></div>
                                                      <div class="col-md-4">
                                                            <button type="submit" class="btn btn-success" name="personal_info">
                                                               Save & Continue <i class="fa fa-user"></i>
                                                            </button>
                                                            <a href="../Dashboard">
                                                               <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                                  <i class="fa fa-times"></i> Exit
                                                               </button>
                                                            </a>
                                                      </div>
                                                      <div class="col-md-2"></div>
                                                   </div>
                                                </div>
                                              </form>
                                             </div>
                <!--      </div>
               <!--     </div>
              <!--    </div>
             <!--     </div> /.box-body -->
                </div><!-- /.box -->
            </div>

               </div><!-- /.tab-content -->
              </div>
              </div>
              </div><!-- /.box -->
            
        
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->