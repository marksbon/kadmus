
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">Vender</h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border"></div><!-- /.box-header -->
                <div class="box-body">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs" id="myTab">
                      <li class="active"><a href="#allsup" data-toggle="tab">Vender List</a></li>
                      <li><a href="#newsupplier" data-toggle="tab">Add New</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="allsup">
                        <table id="allsuppliers" class="table table-striped table-hover table-responsive">
                          <thead style="background-color:#009666;color:white">
                            <th style="width:5%"> Id # </th>
                            <th style="width:15%"> Name </th>
                            <th style="width:20%"> Address </th>
                            <th style="width:15%"> Tel </th>
                            <th style="width:13%"> email </th>
                            <th style="width:20%"> Action </th>
                          </thead>
                          <tbody></tbody>
                        </table>
                      </div>
                      <div class="tab-pane" id="newsupplier">
                        <form action="New_Supplier" method="post">
                          <div class="box-body">
                           
                            <!--Column left -->
                            <div  class="col-xs-4">
                              <h3 class="box-title">Basic Information</h3>
                                        <div class="control-label">
                                           <label> Vender's Name </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control" name="name" placeholder="Tema Oil Refinery" required/>
                                          </div><!-- /.input group -->
                                        </div>
                                           <div style="margin-top:5px;">
                                           <label>Balance</label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control" placeholder="9999"  name="tel1" data-inputmask='"mask": "(+999) 999-999-999"' data-mask  required/>
                                          </div><!-- /.input group -->
                                        </div>
                                        <div style="margin-top:5px;">
                                           <label>Telephone No. </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control" placeholder="(+233) 541 786 220"  name="tel1" data-inputmask='"mask": "(+999) 999-999-999"' data-mask  required/>
                                          </div><!-- /.input group -->
                                        </div>
                                        <div style="margin-top:5px;">
                                           <label>Alt. Telephone No.</label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="(+233) 244 555 666" name="tel2" data-inputmask='"mask": "(+999) 999-999-999"' data-mask />
                                          </div><!-- /.input group -->
                                          

                                        </div>
                            </div>
                            <!-- ./ Column Left -->
                            <!--Column middle -->
                            <div  class="col-xs-4">
                              <h3 class="box-title">Address</h3>
                                        <div>
                                           <label>Address </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="P.O.BOX KT 47, Kotobabi- Accra." name="addr" />
                                          </div><!-- /.input group -->
                                        </div>
                                        <div style="margin-top:5px;">
                                           <label>Email </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="email" class="form-control"  placeholder="username@domain.com" name="email" />
                                          </div><!-- /.input group -->
                                        </div>
                                        <div style="margin-top:5px;">
                                           <label>Fax</label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="(+233) 247 777 999" name="fax" data-inputmask='"mask": "(+999) 999-999-999"' data-mask />
                                          </div><!-- /.input group -->
                                          <label>Region</label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="(+233) 244 555 666" name="tel2" data-inputmask='"mask": "(+999) 999-999-999"' data-mask />
                                          </div><!-- /.input group -->
                                        </div>
                            </div>
                            <div  class="col-xs-4">
                               
                                 <h3 class="box-title">Purchase Informtion</h3>
                                            <label>Payment term </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="Process" name="addr" />
                                          </div><!-- /.input group -->
                                             <label>Taxing Scheme </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="nonemm n " name="addr" />
                                          </div><!-- /.input group -->
                                             <label>Carrier</label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="none" name="addr" />
                                          </div><!-- /.input group -->
                                             <label>Country.</label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="(+233) 244 555 666" name="tel2" data-inputmask='"mask": "(+999) 999-999-999"' data-mask />
                                          </div><!-- /.input group -->
                            </div>
                            <!-- ./Column middle -->
                            <!--Column right -->
                      
                            <!-- ./Column right -->
                          </div>
                          <input type="hidden" name="sup_id" value="<?= $next_sup_id; ?>" />
                          <div class="box-footer">
                            <div class="col-md-7"></div>
                            <div class="col-md-3">
                                  <button class="btn btn-success" type="submit" name="sup_save"><i class="fa fa-database"></i> Save</button>
                                  <a href="../Dashboard" class="btn btn-danger"><i class="fa fa-times"></i> Exit</a>
                            </div>
                            <div class="col-md-2"></div>
                          </div>
                        </form>
                        </div>
                    <!-- /.tab-content -->
                    </div>
                  </div>
                </div><!-- ./box-body -->
                <div class="box-footer"></div>
                <!-- /.box-footer -->
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

