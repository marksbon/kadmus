
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Comment </h1>
          
          <ol class="breadcrumb">
            <ol class="breadcrumb">
            <li><a href="../Dashboard"><i class="fa fa-mail-reply"></i> Dashboard</a></li>
            <li class="active"></li>
            <li class="active"></li>

          </ol>
          </ol>

        </section>
        
        <!-- Main content --><form action="Comment_Save" method="post" id="daybookform">
        <section class="content1">
            <div class="row">
                <div class="col-xs-12"> 
                    <div class="box">
                        <div class="box-header">
                            <div  class="col-xs-4">
                                <label class="control-label " for="inputSuccess"><i class="fa fa-check"></i>Date</label>
                                <input type="text" class="form-control has-success" id="popupDatepicker" name="comment_date" value="<?php echo gmdate("l F j, Y"); ?>" required/>
                            </div>
                            <div  class="col-xs-4">                
                                <label>Select Employee</label>
                                <select data-placeholder="Select Employee" style="width:350px;" class="chosen-select" tabindex="5" required name="employee_id">
                                    <option></option>
                                    <?php 
                                        if( !empty($dept_info) && isset($_SESSION['Role']['Comment']) ) {
                                            
                                            //Comment All Priviledge 
                                            if( isset($_SESSION['Priviledge']['Comment-All']) ) {

                                                foreach($dept_info as $dept) {
                                    ?>
                                    <optgroup label='<?php echo $dept->name; ?>'>
                                        <?php 
                                            //Retrieving All Department Members
                                            $deptmembers = $this->user_model->department_members($dept->name);

                                            foreach ($deptmembers as $members) {
                                                # code...
                                        ?>
                                        <option value="<?php echo $members->employee_id; ?>"> <?php echo $members->fullname; ?> </option>
                                    <?php } ?>
                                    </optgroup>
                                    <?php
                                                } 

                                            }//End of Comment All Priviledge 

                                            elseif ( isset($_SESSION['Priviledge']['Comment-Department']) ) {
                                                # code...
                                                //Retrieving Department Members Only
                                                $deptmembers = $this->user_model->department_members($_SESSION['department']);
                                            ?>
                                            <optgroup label='<?php echo $_SESSION['department']; ?>'>
                                            <?php
                                                    foreach ($deptmembers as $members) {
                                                        # code...
                                                ?>
                                                    <option value="<?php echo $members->employee_id; ?>"> <?php echo $members->fullname; ?> </option>
                                                <?php
                                                        }
                                                ?>
                                                </optgroup>
                                                <?php
                                                    }
                                                } 
                                    ?>  
                                </select>
                                
                            </div>
                            <div  class="col-xs-4">
                                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Comment By</label>
                                <input type="text" class="form-control" id="inputSuccess" name="comment_by" value="<?php echo $_SESSION['fullname'];?>" disabled/>
                            </div>
                        </div>  
                        <div class="box-body ">
                            
                                <div class='box box-primary' style="width:98%">
                                    <div class='box-header with-border'>
                                        <h3 class="box-title">Comment</h3>
                                        <!-- tools box -->
                                           <!--<small class="pull-right">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Excellent
                                                </label>
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Good
                                                </label>
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Quariels
                                                </label>
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                querry
                                                </label>
                                            </small> -->
                                    </div><!-- /.box-header -->
                                    <div class='box-body pad'>
                                    <div class="form-group">
                                        <textarea id="compose-textarea" name="comment" class="form-control" style="height: 300px; width:100%; border:1px solid rgb(157, 181, 195)" required></textarea>
                                    </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-toggle='modal' data-target='#CommentConfirm' ><i class="fa fa-check"></i>Save</button>  
                                    <a href="../Dashboard" class="btn btn-danger"><i class="fa fa-times"></i>Exit</a>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="modal fade" id="CommentConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog1">
                    <div class="modal-content1">
                      <div class="modal-header1">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                       </div>
                        <div class='color-palette'>
                          <div class="modal-body">
                            Do You Want To Really Save Comment....
                          </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name="comment_submit">Save</button> 
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->