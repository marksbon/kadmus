
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
                <div class="box-header with-border"></div><!-- /.box-header -->
                <div class="box-body">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title"></div>
                        <div class="x_content">
                          <form action="Register_Project" id="myForm" role="form" data-toggle="validator" method="post" enctype="multipart/form-data">
                          <!-- SmartWizard html -->
                            <div id="smartwizard">
                              <ul>
                                <li style="width:20%;"><a href="#step-1">Step 1<br /><small> Basic Information</small></a></li>
                                <li style="width:20%;"><a href="#step-2">Step 2<br /><small>Payment Information</small></a></li>
                                <li style="width:20%;"><a href="#step-3">Step 3<br /><small>Contruct Information</small></a></li>
                                <li style="width:20%;"><a href="#step-4">Step 4<br /><small>Other Information</small></a></li>
                              </ul>
                              <div style="height:500px !important">
                                <div id="step-1" class="" style="margin-top:10px;">
                                  <div id="form-step-0" role="form" data-toggle="validator">
                                    <h3 class="box-title">Basic Information</h3>
                                    <div class="form-group col-md-4">
                                      <label>Title</label>
                                      <select class="form-control " name="title" data-error="Please Select A Title" required>
                                        <option label="----- Select One ------"></option>
                                        <option>Mr</option>
                                        <option>Mrs</option>
                                        <option>Miss</option>
                                        <option>Madam</option>
                                        <option>Dr</option>
                                      </select>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="email">Last Name </label>
                                      <input type="text" class="form-control" name="lname" placeholder="Enter Last Name Here" data-error="Enter Last Name" required/>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="email">Other Name(s)</label>
                                      <input type="text" class="form-control" name="fname" placeholder="Enter First & Other Name(s)" data-error="Enter Other Name(s)" required/>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="email">Date of birth</label>
                                      <input type="text" class="form-control singledate" name="dob" placeholder="" data-error="Select Date" required/>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="email">Gender</label>
                                      <select class="form-control " name="gender" data-error="Select Gender" required>
                                        <option label="----- Select One ------"></option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                      </select>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="email">Place Of birth</label>
                                  <input type="text" class="form-control" name="place_of_birth" placeholder="Place Of Birth" data-error="Please Enter Place Of Birth" required/>
                                  <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="email">HomeTown</label>
                                  <input type="text" class="form-control" name="proj_code" placeholder="" data-error="Please Enter Hometown" required/>
                                  <div class="help-block with-errors"></div>
                                </div>
                                      <div class="form-group col-md-12">
                                        <label>Marital Status</label>
                                        <select class="form-control " name="region" data-error="Please Select A Status" required>
                                          <option label="----- Select One ------"></option>
                                          <option>Single</option>
                                          <option>Married</option>
                                          <option>Divorced</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                      <div class="form-group col-md-12">
                                        <label>Country </label>
                                        <select class="form-control " name="region" data-error="Please Select A Region" required>
                                          <option label="----- Select One ------"></option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                      <div class="form-group col-md-12">
                                        <label for="email">Spoken Language</label>
                                        <select class="form-control " name="region" data-error="Please Select A Region" required>
                                          <option label="----- Select One ------"></option>
                                          <option>Mr</option>
                                          <option>Mrs</option>
                                          <option>Miss</option>
                                          <option>Madam</option>
                                          <option>Dr</option>
                                        </select>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                      <h3 class="box-title">Contact Information</h3>
                                      <div class="form-group col-md-12">
                                        <label>Postal Address</label>
                                        <input type="text" class="form-control"  placeholder="Enter Post Address"  name="paddr" data-error="Please Enter A Location" required/>
                                          <div class="help-block with-errors"></div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Residence Address</label>
                                          <input type="text" class="form-control"  placeholder="Residence"  name="raddr" data-error="Enter Residence" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Telephone </label>
                                          <input type="text" class="form-control"  placeholder="Phone number"  name="tel1" data-error="Enter Client's Name" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Alt. Telephone</label>
                                          <input type="text" class="form-control"  placeholder="Phone Number"  name="tel2" data-error="Alternative Telephone">
                                          <div class="help-block with-errors"></div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Email Address</label>
                                          <input type="text" class="form-control"  placeholder="Email"  name="email" data-error="Enter Email" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                    
                                    <div id="step-2" class="">
                                      <div class="col-md-6">
                                       <h3 class="box-title">Account Information</h3>
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                        <div class="form-group col-md-12">
                                          <label for="email">Name of Bank </label>
                                          <input type="text" class="form-control" name="proj_name" placeholder="Kwame Nkrumah Circle Interchange" data-error="Please Enter A Project Name" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="email">Branch</label>
                                          <input type="text" class="form-control" name="proj_code" placeholder="K.N Circle Interchange" data-error="Please Enter A Project Code" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                          <div class="form-group col-md-12">
                                          <label for="email">Account Name</label>
                                          <input type="text" class="form-control" name="proj_code" placeholder="K.N Circle Interchange" data-error="Please Enter A Project Code" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                          <div class="form-group col-md-12">
                                          <label for="email">Account Number</label>
                                          <input type="text" class="form-control" name="proj_code" placeholder="K.N Circle Interchange" data-error="Please Enter A Project Code" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                      
                                       
                                        <div class="form-group col-md-12">
                                          <label>Tax </label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>Greater Accra Region</option>
                                            <option>Central Region</option>
                                            <option>Western Region</option>
                                            <option>Eastern Region</option>
                                            <option>Northen Region</option>
                                            <option>Ashanti Region</option>
                                            <option>Volta Region</option>
                                            <option>Upper East Region</option>
                                            <option>Upper West Region</option>
                                            <option>Brong Ahafo Region</option>
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                       <h3 class="box-title">Welfere Information</h3>
                                          <div class="form-group col-md-12">
                                          <label>Type </label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>None</option>
                                            <option>Central Region</option>
                                            <option>Western Region</option>
                                            <option>Eastern Region</option>
                                           
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Contributed Amount</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                           <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Percentage on gross</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label>Contributed </label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>Monthly</option>
                                            <option>Half a year</option>
                                            <option>Annualy</option>
                                           
                                           
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                     </div>
                                    </div>
                                        <div id="step-3" class="">
                                            <div class="col-md-6">
                                       <h3 class="box-title">Position Information</h3>
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                        <div class="form-group col-md-12">
                                          <label for="email">Position</label>
                                          <input type="text" class="form-control" name="proj_name" placeholder="Kwame Nkrumah Circle Interchange" data-error="Please Enter A Project Name" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                            <div class="form-group col-md-12">
                                          <label>Grade</label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>Level 1</option>
                                            <option>Level 2</option>
                                          
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="email">Department</label>
                                          <input type="text" class="form-control" name="proj_code" placeholder="K.N Circle Interchange" data-error="Please Enter A Project Code" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                          <div class="form-group col-md-12">
                                          <label for="email">Supervicer</label>
                                          <input type="text" class="form-control" name="proj_code" placeholder="K.N Circle Interchange" data-error="Please Enter A Project Code" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                         <div class="form-group col-md-12">
                                          <label>Designation</label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>Level 1</option>
                                            <option>Level 2</option>
                                          
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                          <label>Branch</label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>Greater Accra Region</option>
                                            <option>Central Region</option>
                                            <option>Western Region</option>
                                            <option>Eastern Region</option>
                                            <option>Northen Region</option>
                                            <option>Ashanti Region</option>
                                            <option>Volta Region</option>
                                            <option>Upper East Region</option>
                                            <option>Upper West Region</option>
                                            <option>Brong Ahafo Region</option>
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                       <h3 class="box-title">Referee Information</h3>
                                           <div class="form-group col-md-12">
                                          <label>Next of kings</label>
                                          <input type="text" class="form-control"  placeholder="Effiduase"  name="location" data-error="Please Enter A Location" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Relationship</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                           <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Home Phone.</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                          <div class="form-group col-md-12">
                                          <label>Region </label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>Greater Accra Region</option>
                                            <option>Central Region</option>
                                            <option>Western Region</option>
                                            <option>Eastern Region</option>
                                            <option>Northen Region</option>
                                            <option>Ashanti Region</option>
                                            <option>Volta Region</option>
                                            <option>Upper East Region</option>
                                            <option>Upper West Region</option>
                                            <option>Brong Ahafo Region</option>
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Proviences/State</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                     </div>
                                        </div>
                                     <div id="step-4"  class="" style="margin-top:10px;">
                                          <div class="col-md-6">
                                        <h3 class="box-title">Employee Information</h3>
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                        <div class="form-group col-md-12">
                                          <label for="email">Employee ID </label>
                                          <input type="text" class="form-control" name="proj_name" placeholder="Kwame Nkrumah Circle Interchange" data-error="Please Enter A Project Name" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label>Employee Type</label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>Greater Accra Region</option>
                                            <option>Central Region</option>
                                            <option>Western Region</option>
                                            <option>Eastern Region</option>
                                            <option>Northen Region</option>
                                            <option>Ashanti Region</option>
                                            <option>Volta Region</option>
                                            <option>Upper East Region</option>
                                            <option>Upper West Region</option>
                                            <option>Brong Ahafo Region</option>
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                          <div class="form-group col-md-12">
                                          <label for="email">Renumeration</label>
                                          <input type="text" class="form-control" name="proj_code" placeholder="K.N Circle Interchange" data-error="Please Enter A Project Code" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                       </div>
                                   </div>
                                    
                                    <div class="col-md-6">
                                       <h3 class="box-title">Salary Information</h3>
                                           <div class="form-group col-md-12">
                                          <label>Starting Salary</label>
                                          <input type="text" class="form-control"  placeholder="Effiduase"  name="location" data-error="Please Enter A Location" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                      <div class="form-group col-md-12">
                                          <label>Payable Mode</label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>
                                            <option>Yearly</option>
                                            <option>Commision</option>
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label>Contruct Mode</label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>New Hire</option>
                                            <option>Recalled</option>
                                       
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Starting Date</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <label>Currently employed</label>
                                       <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="emp">Yes</br>
                                             <input type="checkbox" name="emp">No
                                          </label>
                                        </div>
                                        </div>
                                      
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Health Insurance Number</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                     </div>
                                        </div>
                                  </div>
                                </div>
                                <!-- End SmartWizard Content -->
                                </form>
                              </div>
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

      

