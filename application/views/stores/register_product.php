
 <!-- Right side column. Contains the navbar and content of the page -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="o">
      <h1 class="pull-left">
        Register New 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border"></div><!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#newprod" data-toggle="tab">New Product</a></li>
                  <li><a href="#newcat" data-toggle="tab">Add Category</a></li>
                  <li><a href="#newdesc" data-toggle="tab">Add Description</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="newprod">
                    <div class="box box-default">
                      <div class="box-header with-border">
                        <div class="col-md-2"></div>
                        <h4 class="pull-left">Add Single</h4>
                        <div class="col-md-4"></div>
                        <h4 class="pull-left">Bulk Addition</h4>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <!--Column left -->
                        <div  class="col-md-1"></div>
                        <form action="Register_Single_Product" method="POST">
                          <div  class="col-md-4" style="border-right: 2px solid #DDD;">
                            <div style="margin-top:5px;">
                              <label>Product Name </label>
                              <div class="input-group">
                                <div class="input-group-addon"></div>
                                <input type="text" class="form-control" placeholder="Carnation" name="item_name" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div class="control-label">
                              <label> Product Code </label>
                              <div class="input-group">
                                <div class="input-group-addon"><i class=""></i></div>
                                <input type="text" class="form-control" name="itm_code" value="<?= $next_prod_id; ?>" />
                              </div><!-- /.input group -->
                            </div>
                            <div style="margin-top:5px;">
                              <label>Item Shelf Location </label>
                              <div class="input-group">
                                <div class="input-group-addon"></div>
                                <input type="text" class="form-control" placeholder="Shelf D" name="item_loc" required/>
                              </div><!-- /.input group -->
                            </div>
                            <div style="margin-top:5px;">
                              <label>Category</label>
                              <div class="input-group">
                                <div class="input-group-addon"></div>
                                <select class="form-control usrselect" name="cat_id" data-placeholder="Select Category" required>
                                  <option></option>
                                  <?php
                                    if(!empty($category_info)) 
                                    {
                                      foreach ($category_info As $cat)
                                      {
                                  ?>
                                  <option value="<?= $cat->cat_id; ?>"><?= $cat->cat_name; ?></option>
                                  <?php
                                      }
                                    }
                                  ?>
                                </select>
                              </div><!-- /.input group -->
                            </div>
                            <div style="margin-top:5px;">
                              <label>Item Description</label>
                              <div class="input-group">
                                <div class="input-group-addon"></div>
                                <select class="form-control usrselect" name="desc_id" data-placeholder="Select Type" required>
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
                              </div><!-- /.input group -->
                            </div>
                            <div style="margin-top:10px;">
                              <div class="col-md-3"></div>
                              <div class="col-md-6">
                                <input type="submit" class="btn btn-success btn-block" name="single_add" value="Save"/>
                              </div>
                              <div class="col-md-3"></div>   
                            </div>
                          </div>
                        </form>
                        <!-- ./ Column Left -->
                        <div  class="col-md-1"></div>
                        <!--Column right -->
                                     <form action="Register_Product_Bulk" enctype="multipart/form-data" method="POST">
                                     <div  class="col-md-4" style="border-left:2px solid #DDD;height: 389px;">
                                        <div>
                                           <label>Select File <small style="color: red;">( CSV File Only )</small> </label> 
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="file" class="form-control"  placeholder="Kwame Mintah" name="prod_file" required/>
                                          </div><!-- /.input group -->
                                        </div>
                                        <div style="margin-top:10px;">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                              <input type="hidden" name="prod_id" value="<?= $next_prod_id; ?>"/>
                                              <input type="submit" class="btn btn-success btn-block" name="bulk_add" value="Upload"/>
                                            </div>
                                            <div class="col-md-3"></div>   
                                        </div>
                                     </div>
                                     </form>
                                  <!-- ./Column right -->
                                    <div  class="col-md-2"></div>
                                </div><!-- ./box-body -->
                                
                                <div class="box-footer">
                                  <!-- /.row -->
                                </div><!-- /.box-footer -->
                                
                              </div>
                        </div>
                        <div class="tab-pane" id="newcat">
                          <div class="box box-default">
                                <div class="box-body">
                                  <!--Column left -->
                                    <div  class="col-md-1"></div>
                                    <div  class="col-md-4">
                                      <form action="New_Category" method="POST">
                                        <div style="margin-top:10px;">
                                           <label>Category Name </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="Cosmetics" name="cat_name" required/>
                                          </div><!-- /.input group -->
                                        </div>
                                        <div style="margin-top:10px;margin-left:30%">
                                           <button class="btn btn-success" type="submit" name="cat_save"><i class="fa fa-database"></i> Save</button>
                                           <a href="../Dashboard" class="btn btn-danger"><i class="fa fa-times"></i> Exit</a>
                                        </div>
                                      </form>
                                  </div>
                                  <!-- ./ Column Left -->
                                  <!--Column right -->
                                     <div  class="col-md-6" style="border-left:2px solid #DDD;margin-left:5%">
                                        <table id="example3" class="table table-striped table-hover table-responsive">
                                          <thead style="background-color:#009666;color:white">
                                            <th style=""> Id # </th>
                                            <th style=""> Category </th>
                                            <th style=""> Action </th>
                                          </thead>
                                        <tbody>
                                          <?php
                                            #Displaying All Category Info
                                            if(!empty($category_info)) {
                                              #
                                              $counter = 0;
                                              foreach($category_info As $cat) {
                                          ?>
                                          <tr>
                                            <td><?= $cat->cat_id; ?></td>
                                            <td><?= $cat->cat_name; ?></td> 
                                            <td>
                                              <a title="Edit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#Edit<?= $counter; ?>">
                                                <i class="fa fa-pencil"></i> Edit
                                              </a>
                                              <a title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Del<?= $counter; ?>">
                                                <i class="fa fa-trash"></i> Delete
                                              </a>
                                            </td> 
                                          </tr> 
                                          <?php
                                            #
                                                $counter++; }
                                              }
                                          ?> 
                                        </tbody>
                                        </table>
                                     </div>
                                  <!-- ./Column right -->
                                    
                                </div><!-- ./box-body -->
                                
                              </div>
                        </div>
                        
                        <div class="tab-pane" id="newdesc">
                          <div class="box box-default">
                                <div class="box-body">
                                  <!--Column left -->
                                    <div  class="col-md-1"></div>
                                    <div  class="col-md-4">
                                      <form action="New_Description" method="POST">
                                        <div style="margin-top:10px;">
                                           <label>Description </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control"  placeholder="Milk" required name="desc" />
                                          </div><!-- /.input group -->
                                        </div>
                                        <div style="margin-top:10px;margin-left:30%">
                                           <button class="btn btn-success" type="submit" name="desc_save"><i class="fa fa-database"></i> Save</button>
                                           <a href="../Dashboard" class="btn btn-danger"><i class="fa fa-times"></i> Exit</a>
                                        </div>
                                      </form>
                                  </div>
                                  <!-- ./ Column Left -->
                                  <!--Column right -->
                                     <div  class="col-md-6" style="border-left:2px solid #DDD;margin-left:5%">
                                        <table id="example1" class="table table-striped table-hover table-responsive">
                                          <thead style="background-color:#009666;color:white">
                                            <th style=""> Id # </th>
                                            <th style=""> Description </th>
                                            <th style=""> Action </th>
                                          </thead>
                                        <tbody>
                                          <?php
                                            #Displaying All Description Info
                                            if(!empty($Description_info)) {
                                              #
                                              $counter = 0;
                                              foreach($Description_info As $desc) {
                                          ?>
                                          <tr>
                                            <td><?= $desc->desc_id; ?></td>
                                            <td><?= $desc->desc; ?></td> 
                                            <td>
                                              <a title="Edit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#Desc_Edit<?= $counter; ?>">
                                                <i class="fa fa-pencil"></i> Edit
                                              </a>
                                              <a title="Delete" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Desc_Del<?= $counter; ?>">
                                                <i class="fa fa-trash"></i> Delete
                                              </a>
                                            </td> 
                                          </tr> 
                                          <?php
                                            #
                                                $counter++; }
                                              }
                                          ?> 
                                        </tbody>
                                        </table>
                                     </div>
                                  <!-- ./Column right -->
                                    
                                </div><!-- ./box-body -->
                                
                              </div>
                        </div>
                        
                    <!-- /.tab-content -->
                    </div>
                    
                    <!-- All Edit Modals -->
                    <?php
                       #Displaying All Category Info
                       if(!empty($category_info)) {
                          #
                          $counter = 0;
                          foreach($category_info As $cat) {
                   ?>
                    <div class="modal fade" id='Edit<?= $counter; ?>' role='dialog' aria-hidden='true' >
                      <div class="modal-dialog">
                        <div class="modal-content" style="width: 300px;">
                        <form action="Update_Category" method="post">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                            <h4 class="modal-title">Details</h4>
                          </div>
                          <div class="modal-body">
                                <div class="box-body">
                                  <!--Column left -->
                                     <div>
                                        <div class="control-label">
                                           <label> Category </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control" name="cat_name" value="<?= $cat->cat_name; ?>" required/>
                                          </div><!-- /.input group -->
                                        </div>
                                     </div>
                                  <!-- ./ Column Left -->
                                  <!--Column middle -->
                                     
                                <!-- ./Column middle -->
                                <!--Column right -->
                                <!-- ./Column right -->
                                </div>
                                <input type="hidden" name="cat_id" value="<?= $cat->cat_id; ?>" />
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-success" type="submit" name="cat_update"><i class="fa fa-database"></i> Save Changes</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                          </div>
                          </form>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <?php 
                        #
                            $counter++; }
                          }
                    ?>
                    
                    <?php
                       #Displaying All Description Info
                       if(!empty($Description_info)) {
                          #
                          $counter = 0;
                          foreach($Description_info As $desc) {
                   ?>
                    <div class="modal fade" id='Desc_Edit<?= $counter; ?>' role='dialog' aria-hidden='true' >
                      <div class="modal-dialog">
                        <div class="modal-content" style="width: 300px;">
                        <form action="Update_Description" method="post">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                            <h4 class="modal-title">Details</h4>
                          </div>
                          <div class="modal-body">
                                <div class="box-body">
                                  <!--Column left -->
                                     <div>
                                        <div class="control-label">
                                           <label> Description </label>
                                           <div class="input-group">
                                              <div class="input-group-addon">
                                              </div>
                                              <input type="text" class="form-control" name="desc" value="<?= $desc->desc; ?>" required/>
                                          </div><!-- /.input group -->
                                        </div>
                                     </div>
                                  <!-- ./ Column Left -->
                                  <!--Column middle -->
                                     
                                <!-- ./Column middle -->
                                <!--Column right -->
                                <!-- ./Column right -->
                                </div>
                                <input type="hidden" name="desc_id" value="<?= $desc->desc_id; ?>" />
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-success" type="submit" name="desc_update"><i class="fa fa-database"></i> Save Changes</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                          </div>
                          </form>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <?php 
                        #
                            $counter++; }
                          }
                    ?>
                    <!-- All EditModals -->
                    
                    <!-- All Delete Modals -->
                    <?php
                       #Displaying All Category Info
                       if(!empty($category_info)) {
                          #
                          $counter = 0;
                          foreach($category_info As $cat) {
                   ?>
                    <div class="modal fade" id='Del<?= $counter; ?>' role='dialog' aria-hidden='true' >
                      <div class="modal-dialog">
                        <div class="modal-content">
                        <form action="Delete_Category" method="post">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                            <h4 class="modal-title">Details</h4>
                          </div>
                          <div class="modal-body">
                                Do You Want To Really Delete <?php echo "<strong><em>".$cat->cat_name."</em></strong>"; ?> ....
                                <input type="hidden" name="cat_id" value="<?= $cat->cat_id; ?>" />
                          </div>
                          <div class="modal-footer">
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                              <button class="btn btn-danger" type="submit" name="cat_del"><i class="fa fa-database"></i> Delete</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="col-md-4"></div>
                          </div>
                          </form>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <?php 
                        #
                            $counter++; }
                          }
                    ?>
                    
                    <?php
                       #Displaying All Description Info
                       if(!empty($Description_info)) {
                          #
                          $counter = 0;
                          foreach($Description_info As $desc) {
                   ?>
                    <div class="modal fade" id='Del<?= $counter; ?>' role='dialog' aria-hidden='true' >
                      <div class="modal-dialog">
                        <div class="modal-content">
                        <form action="Delete_Description" method="post">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                            <h4 class="modal-title">Details</h4>
                          </div>
                          <div class="modal-body">
                                Do You Want To Really Delete <?php echo "<strong><em>".$desc->desc_name."</em></strong>"; ?> ....
                                <input type="hidden" name="desc_id" value="<?= $desc->desc; ?>" />
                          </div>
                          <div class="modal-footer">
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                              <button class="btn btn-danger" type="submit" name="desc_del"><i class="fa fa-database"></i> Delete</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                            <div class="col-md-4"></div>
                          </div>
                          </form>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <?php 
                        #
                            $counter++; }
                          }
                    ?>
                    <!-- All Delete Modals -->
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
        <strong>Copyright &copy; 2014-2015 <a href="http://wisspri.com" >WissPri Technologies Limited</a>.</strong> All rights reserved.
      </footer>

 