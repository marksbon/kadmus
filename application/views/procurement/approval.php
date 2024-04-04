
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">Approvals</h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h4 class="pull-left">Approvals</h4>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#inventory" data-toggle="tab"> Pending Approval</a></li>
                      <li><a href="#tab_5" data-toggle="tab">Site Request</a></li>
                      <li><a href="#tab_5" data-toggle="tab">Account Request</a></li>
                      <li><a href="#suppliers" data-toggle="tab">Qoutes Request</a></li>
                    </ul>
                    <div class="tab-content">
                   
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">New</h3>
                  <div class="box-tools pull-right">
                    <div class="has-feedback">
                     
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                    <div class="btn-group">
                      
                    </div><!-- /.btn-group -->
                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                      1-50/200
                      <div class="btn-group">
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href=""  data-toggle="modal" data-target="#preview" >Mr. Joe Darko</a></td>
                          <td class="mailbox-subject"><b>K.N Circle Interchange</b></td>
                          <td class="mailbox-attachment">Procurement</td>
                          <td class="mailbox-date">5 mins ago</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href="#" data-toggle="modal" data-target="#preview">Mr. Kwadjo Baah</a></td>
                          <td class="mailbox-subject"><b>Bui Supplementary Dam</b></td>
                          <td class="mailbox-attachment"><i class="fa fa-paperclip"></i>Site</td>
                          <td class="mailbox-date">28 mins ago</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href="#" data-toggle="modal" data-target="#preview">President John Mahama </a></td>
                          <td class="mailbox-subject"><b>Komenda Sugar Factory</b></td>
                          <td class="mailbox-attachment"><i class="fa fa-paperclip"></i>Account</td>
                          <td class="mailbox-date">11 hours ago</td>
                        </tr>
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
            
              </div><!-- /. box -->
       
                    </div>
                    <?php
                       #Displaying All Suppliers Info
                       if(!empty($suppliers_info)) {
                          #
                          $counter = 0;
                          foreach($suppliers_info As $supplier) {
                   ?>
                    <!--- 
                    <div class="modal fade" id='Det<?= $counter; ?>' role='dialog' aria-hidden='true' >
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                            <h4 class="modal-title">Details</h4>
                          </div>
                          <div class="modal-body">
                            <table class="table table-striped">
                                  <tbody>
                                    <tr>
                                      <th style="width: 10px"> #</th>
                                      <th>Fields</th>
                                      <th>Data.</th>
                                    </tr>
                                    <tr>
                                      <td>1.</td>
                                      <td style="color: #9c0808;">Supplier ID</td>
                                      <td><?= $supplier->sup_id; ?></td>
                                    </tr>
                                    <tr>
                                      <td>2.</td>
                                      <td style="color: #9c0808;">Supplier Name</td>
                                      <td><?= $supplier->name; ?></td>
                                    </tr>
                                    <tr>
                                      <td>3.</td>
                                      <td style="color: #9c0808;">Telephone No.</td>
                                      <td><?= $supplier->tel1; ?></td>
                                    </tr>
                                    <tr>
                                      <td>4.</td>
                                      <td style="color: #9c0808;">Alt. Telephone No.</td>
                                      <td><?= $supplier->tel2; ?></td>
                                    </tr>
                                    <tr>
                                      <td>5.</td>
                                      <td style="color: #9c0808;">Address</td>
                                      <td><?= $supplier->addr; ?></td>
                                    </tr>
                                    <tr>
                                      <td>6.</td>
                                      <td style="color: #9c0808;">Email</td>
                                      <td><?= $supplier->email; ?></td>
                                    </tr>
                                    <tr>
                                      <td>7.</td>
                                      <td style="color: #9c0808;">Fax</td>
                                      <td><?= $supplier->fax; ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                      
                        </div><!-- /.modal-content 
                      </div><!-- /.modal-dialog -
                    </div>  -
                    <?php 
                        #
                            $counter++; }
                          }
                    ?>
                    <!--- All Details Modals -->
                    
                    <!-- All Edit Modals -
                    <?php
                       #Displaying All Suppliers Info
                       if(!empty($suppliers_info)) {
                          #
                          $counter = 0;
                          foreach($suppliers_info As $supplier) {
                   ?>
                    <div class="modal fade" id='Edit<?= $counter; ?>' role='dialog' aria-hidden='true' >
                      <div class="modal-dialog">
                        <div class="modal-content">
                        <form action="Update_Supplier" method="post">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                            <h4 class="modal-title">Details</h4>
                          </div>
                          <div class="modal-body">
                                <div class="box-body">
                                  <!--Column left -
                                     <div  class="col-xs-6">
                                        <div class="control-label">
                                           <label> Supplier's Name </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control" name="name" value="<?= $supplier->name; ?>" required/>
                                          </div><!-- /.input group --
                                        </div>
                                        <div style="margin-top:5px;">
                                           <label>Telephone No. </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control" placeholder="(+233) 541 786 220"  name="tel1" data-inputmask='"mask": "(+999) 999-999-999"' data-mask  required value="<?= $supplier->tel1; ?>"/>
                                          </div><!-- /.input group --
                                        </div>
                                        <div style="margin-top:5px;">
                                           <label>Alt. Telephone No.</label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="(+233) 244 555 666" name="tel2" data-inputmask='"mask": "(+999) 999-999-999"' data-mask  value="<?= $supplier->tel2; ?>"/>
                                          </div><!-- /.input group --
                                        </div>
                                     </div>
                                  <!-- ./ Column Left --
                                  <!--Column middle --
                                     <div  class="col-xs-6">
                                        <div>
                                           <label>Address </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="P.O.BOX KT 47, Kotobabi- Accra." name="addr" value="<?= $supplier->addr; ?>"/>
                                          </div><!-- /.input group --
                                        </div>
                                        <div style="margin-top:5px;">
                                           <label>Email </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="email" class="form-control"  placeholder="username@domain.com" name="email" value="<?= $supplier->email; ?>" />
                                          </div><!-- /.input group --
                                        </div>
                                        <div style="margin-top:5px;">
                                           <label>Fax</label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="(+233) 247 777 999" value="<?= $supplier->fax; ?>" name="fax" data-inputmask='"mask": "(+999) 999-999-999"' data-mask />
                                          </div><!-- /.input group --
                                        </div>
                                     </div>
                                <!-- ./Column middle -->
                                <!--Column right -->
                                <!-- ./Column right --
                                </div>
                                <input type="hidden" name="sup_id" value="<?= $supplier->sup_id; ?>" />
                          </div>
                         
                          </form>
                        </div><!-- /.modal-content --
                      </div><!-- /.modal-dialog --
                    </div><!-- /.modal --
                    <?php 
                        #
                            $counter++; }
                          }
                    ?>
                    <!-- All EditModals -->
                    
                    <!-- All Delete Modals --
                    <?php
                       #Displaying All Suppliers Info
                       if(!empty($suppliers_info)) {
                          #
                          $counter = 0;
                          foreach($suppliers_info As $supplier) {
                   ?>
                    <div class="modal fade" id='Del<?= $counter; ?>' role='dialog' aria-hidden='true' >
                      <div class="modal-dialog">
                        <div class="modal-content">
                        <form action="Delete_Supplier" method="post">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                            <h4 class="modal-title">Details</h4>
                          </div>
                          <div class="modal-body">
                                Do You Want To Really Delete <?php echo "<strong><em>".$supplier->name."</em></strong>"; ?> ....
                                <input type="hidden" name="sup_id" value="<?= $supplier->sup_id; ?>" />
                          </div>
                          <div class="modal-footer">
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                              <button class="btn btn-danger" type="submit" name="sup_del"><i class="fa fa-database"></i> Delete</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="col-md-4"></div>
                          </div>
                          </form>
                        </div><!-- /.modal-content --
                      </div><!-- /.modal-dialog --
                    </div><!-- /.modal --
                    <?php 
                        #
                            $counter++; }
                          }
                    ?>
                    <!-- All Delete Modals --
                  </div>



                </div><!-- ./box-body -->
                
                <div class="box-footer">
                  <a href=""  class="btn btn-danger"><i class="fa fa-cancel"></i> Decline</a>
                <button type="submit" class="btn btn-success Pull-right" data-toggle="modal" data-target="#approvalmodal"><i class="fa fa-legal"></i> Approve</button>
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

