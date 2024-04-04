
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">
            Requests
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-2">
              <a href="<?= base_url().'Project/Requests'?>" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-reply"></i> Back to Inbox</a>
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Folders</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="Requests"><i class="fa fa-inbox"></i> Pending <span class="label label-primary pull-right">12</span></a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                    <li><a href="#"><i class="fa fa-filter"></i> Completed <span class="label label-warning pull-right">65</span></a></li>
                    <li><a href="#"><i class="fa fa-trash-o"></i> All Requests</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Labels</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> Quote</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Approved Quote<span class="label label-warning pull-right">65</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> History</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-10">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><?= urlunchange($project_name) ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="col-md-12">
                    <select class="form-control" onchange="reqtype(this.value)">
                      <option>---- Select Request Type ----</option>
                      <option value="tools">Tools / Material Request</option>
                      <option value="machi">Machine / Equipment Request</option>
                      <option value="labou">Labour Request</option>
                      <option value="finan">Financial Request</option>
                      <option value="file">File Request</option>
                    </select>
                  </div><br/><br/><br/>
                  <div class="row" style="padding: 0px 15px;margin-bottom:15px">
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon">Requested By:</span>
                        <input name="user" type="text" class="form-control" value="<?= $_SESSION['fullname']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon">Date:</span>
                        <input name="user" type="text" class="form-control" value="<?= date('l d M, Y') ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div id="tools" style="display:none">
                    <div class="row" style="padding:0px 15px"><div class="col-md-6">
                      <select class="form-control" name="Matprocesstype" onchange="decisionOnItem(this.value,'Matitemunit','Matitemamt')">
                        <option>--- Select One ---</option>
                        <option value="Request">Request Only</option>
                        <option value="Service">Service Of Item</option>
                        <option value="Purchase">Purchase Of Item</option>
                      </select>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Item Name:</span>
                        <input name="Matitemname" type="text" class="form-control" placeholder="Item Name">
                      </div>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Description</span>
                        <input name="Matitemdesc" type="text" class="form-control" placeholder="Product Details / Vendor">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon">Item Quantity:</span>
                        <input name="Matitemqty" type="number" class="form-control" min="0" onkeyup="TotalAmt()">
                      </div><br/>
                      <div class="input-group">
                        <span class="input-group-addon">Rate / Unit:</span>
                        <input name="Matitemunit" type="number" class="form-control" min="0" onkeyup="TotalAmt()" style="display:none">
                      </div>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Amount:</span>
                        <input name="Matitemamt" type="number" class="form-control" min="0"  style="display:none" readonly>
                      </div>
                    </div></div>
                    <div class="row"><div class="col-md-5"></div>
                    <div class="col-md-1">
                      <br/>
                      <button type="button" class="btn btn-success" id="addNewMat"><i class="fa fa-list"></i> Add To List</button>
                    </div>
                    <div class="col-md-6"></div></div>
                    <div class="col-md-12">
                      <hr/>
                      <table class="table table-bordered" style="font-size:14px;" id="mattable">
                        <thead class="bg-blue" style="color: white;">
                          <th style="width: 4%">#</th>
                          <th style="width: 40%">Item Name</th>
                          <th style="width: 33%">Description</th>
                          <th style="width: 7%">Qty</th>
                          <th style="width: 5%">Rate(₵)</th>
                          <th style="width: 5%">Total(₵)</th>
                          <th style="width: 6%;text-align:center">Action</th>
                        </thead>
                        <tbody>
                          <tr></tr>
                        </tbody>
                      </table>
                    </div><!-- /.col -->
                  </div>
                  <div id="machi" style="display:none">
                    <div class="row" style="padding:0px 15px"><div class="col-md-6">
                      <select class="form-control" name="Machprocesstype" onchange="decisionOnItem(this.value,'Machitemunit','Machitemamt')">
                        <option>--- Select One ---</option>
                        <option value="requestonly">Request Only</option>
                        <option value="Service">Service Only</option>
                        <option value="Purchase">Purchase Of Machine / Equipment</option>
                      </select>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Item Name:</span>
                        <input name="Machitemname" type="text" class="form-control" placeholder="Name Of Machine / Equipment">
                      </div>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Description</span>
                        <input name="Machitemdesc" type="text" class="form-control" placeholder="Machine Description / Vendors /">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon">Time / Duration:</span>
                        <input name="Machtime" type="text" class="form-control 2waydate">
                      </div><br/>
                      <div class="input-group">
                        <span class="input-group-addon">Rate / Unit:</span>
                        <input name="Machitemunit" type="number" class="form-control" min="0" style="display:none">
                      </div>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Amount:</span>
                        <input name="Machitemamt" type="number" class="form-control" min="0" style="display:none" readonly>
                      </div>
                    </div></div>
                    <div class="row" style="padding:0px 15px;margin-top:15px;"><div class="col-md-12">
                      <label>Purpose</label>
                      <textarea name="MatitemPurpose" class="form-control"></textarea>
                    </div></div>
                    <div class="row"><div class="col-md-5"></div>
                    <div class="col-md-1">
                      <br/>
                      <button type="button" class="btn btn-success" id="addNewMach"><i class="fa fa-list"></i> Add To List</button>
                    </div>
                    <div class="col-md-6"></div></div>
                    <div class="col-md-12">
                      <hr/>
                      <table class="table table-bordered table-reponsive" style="font-size:14px;" id="machtable">
                        <thead style="background-color: #009688;color: white;">
                          <th style="width: 5%">#</th>
                          <th style="width: 25%">Name</th>
                          <th style="width: 25%">Purpose</th>
                          <th style="width: 25%">Duration</th>
                          <th style="width: 5%">Rate</th>
                          <th style="width: 5%">Amt(₵)</th>
                          <th style="width: 5%">Action</th>
                        </thead>
                        <tbody>
                          <tr></tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="labou" style="display:none">
                    <div class="row" style="padding:0px 15px"><div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon">Name Of Labour:</span>
                        <input name="Labname" type="text" class="form-control" placeholder="Electrical Engineers">
                      </div>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Time / Duration:</span>
                        <input name="Labtime" type="text" class="form-control 2waydate">
                      </div>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">No. Of Person(s)</span>
                        <input name="Labqty" type="number" class="form-control" min="0" placeholder="5">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon">Rate / Unit:</span>
                        <input name="Labunit" type="number" class="form-control" min="0" placeholder="1000">
                      </div>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Amount:</span>
                        <input name="Labamt" type="number" class="form-control" min="0" placeholder="5000">
                      </div>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Note</span>
                        <input name="Labnote" type="text" class="form-control" placeholder="2 Years Experience">
                      </div>
                    </div></div>
                    <div class="col-md-5"></div>
                    <div class="col-md-1">
                      <br/>
                      <button type="button" id="addNewLab" class="btn btn-success"><i class="fa fa-list"></i> Add To List</button>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-12">
                      <hr/>
                      <table class="table table-bordered" style="font-size:14px;" id="labtable">
                        <thead style="background-color: #006142;color: white;">
                          <th style="width: 3%">#</th>
                          <th style="width: 20%">Name</th>
                          <th style="width: 25%">Duration</th>
                          <th style="width: 5%">Qty</th>
                          <th style="width: 7%">Rate</th>
                          <th style="width: 10%">Total (₵)</th>
                          <th style="width: 20%">Note</th>
                          <th style="width: 7%%">Action</th>
                        </thead>
                        <tbody>
                          <tr></tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="finan" style="display:none">
                    <div class="col-md-6">
                      <select class="form-control">
                        <option>--- Select One ---</option>
                        <option>Service</option>
                        <option>Purchase</option>
                      </select>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Item Name:</span>
                        <input name="name" type="text" class="form-control" placeholder="Name Of Labour">
                      </div>
                      <br/>
                      
                        <select class="form-control">
                        <option>--- Project ---</option>
                        <option>KN CIRCLE PROJECT</option>
                        <option>ROAD TT</option>
                      </select>
                     
                      <br/>
                      <select class="form-control">
                        <option>--- Debite ---</option>
                        <option>Project Expence File </option>
                        <option>Purchase</option>
                      </select>
                      <br/>
                      
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon">Requsted by:</span>
                        <input name="unit" type="number" class="form-control" min="0">
                      </div>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Amount:</span>
                        <input name="amt" type="number" class="form-control" min="0">
                      </div>
                      <br/>
                     <select class="form-control">
                        <option>--- Credit ---</option>
                        <option>Project burdget file</option>
                        <option>Purchase</option>
                      </select>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Description</span>
                        <input name="number" type="text" class="form-control" placeholder="Vendor's Name">
                      </div>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-5">
                      <br/>
                      <button type="submit" class="btn btn-success"><i class="fa fa-list"></i> Add To List</button>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-12">
                      <hr/>
                      <table class="table table-bordered" style="font-size:14px;">
                        <thead style="background-color: #009688;color: white;">
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Duration</th>
                          <th>Credit</th>
                          <th>Debit</th>
                          <th>Requsted by</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Crane</td>
                            <td>To Lift Heavy Machines To Tky Level</td>
                            <td>3 Months</td>
                            <td>100</td>
                            <td>6000</td>
                            <td>Mantrac</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="file" style="display:none">
                    <div class="col-md-6">
                      <select class="form-control">
                        <option>--- Select One ---</option>
                        <option>Service</option>
                        <option>Purchase</option>
                      </select>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">File Name:</span>
                        <input name="name" type="text" class="form-control" placeholder="Name Of Labour">
                      </div>
                      <br/>
                     
                      <select class="form-control">
                        <option>--- Requested by ---</option>
                        <option>Project Expence File </option>
                        <option>Purchase</option>
                      </select>
                      <br/>
                      
                    </div>
                    <div class="col-md-6">
                     <select class="form-control">
                        <option>---  ---</option>
                        <option>Project burdget file</option>
                        <option>Purchase</option>
                      </select>
                      <br/>
                      <div class="input-group">
                        <span class="input-group-addon">Purpose</span>
                        <input name="number" type="text" class="form-control" placeholder="Vendor's Name">
                      </div>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-1">
                      <br/>
                      <button type="submit" class="btn btn-success"><i class="fa fa-list"></i> Add To List</button>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-12">
                      <hr/>
                      <table class="table table-bordered" style="font-size:14px;">
                        <thead style="background-color: #009688;color: white;">
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Purpose</th>
                          <th>Duration</th>
                          <th>Rate/Day</th>
                          <th>Amount(GH₵)</th>
                          <th>Vendor</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Crane</td>
                            <td>To Lift Heavy Machines To Tky Level</td>
                            <td>3 Months</td>
                            <td>100</td>
                            <td>6000</td>
                            <td>Mantrac</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button class="btn btn-primary" id="request-preview" type="button"><i class="fa fa-th"></i> Preview All</button>
                
                  </div>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://wisspri.com" >WissPri Technologies Limited</a>.</strong> All rights reserved.
      </footer>

