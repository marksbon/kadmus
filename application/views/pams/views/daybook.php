
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> DayBook </h1>
          
          <ol class="breadcrumb">
            <ol class="breadcrumb">
            <li><a href="../Dashboard"><i class="fa fa-mail-reply"></i> Dashboard</a></li>
            <li class="active"></li>
            <li class="active"></li>
          </ol>
          </ol>

        </section>
        
        <!-- Main content -->
        <form action="Daybook_Save" method="post" id="daybookform">
        <section class="content1">
            <div class="row">
                <div class="col-xs-12"> 
                    <div class="box">
                        <div class="box-header">
                            <div  class="col-xs-4">
                                <label class="control-label " for="inputSuccess"><i class="fa fa-calendar"></i> Date</label>
                                <input type="text" title="Set session date"class="form-control has-success" id="" name="reportdate"
                                value="<?php echo $session_date; ?>" readonly/>
                            </div>
                            <div  class="col-xs-4">                
                                <label><i class="fa fa-user"></i> Employee's Name</label>
                                <input type="text" title="confirm your name" class="form-control" name="user" value="<?php echo $_SESSION['fullname']; ?>" disabled>
                            </div>
                            <div  class="col-xs-4">
                                <label class="control-label"  for="inputSuccess"><i class="fa fa-check"></i>Supervisor's Name</label>
                                <input type="text" class="form-control" id="inputSuccess" placeholder="User Name" value="<?php echo $SupervisorName; ?>" disabled/>
                            </div>
                        </div>  
                        <div class="box-body ">
                            
                                
                                    <div class='box-header with-border'>
                                        <!-- DIRECT CHAT SUCCESS -->
              <div class="box box-primary direct-chat direct-chat-success" style="width:100%">
                <div class="box-header with-border">
                  <h3 class="box-title"> Todays activites</h3>
                  <div class="box-tools pull-right">
                    <span class='badge bg-green ' data-toggle="tooltip" title="Click to type your initiative" data-widget="chat-pane-toggle" style="cursor:pointer;margin-top:7px">Add Initiative</span>
                    
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                   <div class='box-body pad'>

                                    <div class="form-group">
                                      <textarea id="compose-textarea" name="daybook_report" class="form-control" style=" height: 250px; width:100%; border:1px solid rgb(157, 181, 195)" required></textarea>
                                    </div>
                                    </div>

                  <!-- Contacts are loaded here -->
                  
                  <div class="direct-chat-contacts" style="background-color: #829682;height: 300px;">
                    <ul class='contacts-list'>
                      <li>
                         <div class='contacts-list-info'>
                            <div class="box-header with-border" style="padding-bottom:3px;margin-bottom:3px;color:#fff">
                              <h3 class="box-title" > Initiative</h3>
                              <div class="pull-right">
                                <span class='btn btn-danger' data-toggle="tooltip"  data-widget="chat-pane-toggle" style="cursor:pointer"><i class="fa fa-times"></i> Cancel</span>
                              </div>  
                            </div>
                            
                            
                            <textarea class='contacts-list-msg' id="compose-textarea-initiative" style=" margin-left:-20px;height:180px; width:100%;border:1px solid rgb(157, 181, 195);color:#444;background-color: #fff;" Placeholder=" Type Here..!" name="initiative_report"></textarea>
                          </div><!-- /.contacts-list-info -->
                     
                      </li><!-- End Contact Item -->                      
                    </ul><!-- /.contatcts-list -->
                    
                  </div><!-- /.direct-chat-pane -->
               

                </div><!-- /.box-body -->
           
              </div><!--/.direct-chat -->
                                        <!-- tools box -->
                                    </div><!-- /.box-header -->
                           
                               
                                <div class="modal-footer">
                                    <?php 
                                        if($save_btn == "YES") {
                                    ?>
                                    <button type="button" class="btn btn-primary" data-toggle='modal' data-target='#DaybookConfirm' ><i class="fa fa-check"></i>Save</button>
                                    <?php 
                                        }
                                    else
                                    ?>
                                    <a href="../Dashboard" class="btn btn-danger"><i class="fa fa-times"></i>Exit</a>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="modal fade" id="DaybookConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog1">
                    <div class="modal-content1">
                      <div class="modal-header1">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                       </div>
                        <div class='color-palette'>
                          <div class="modal-body">
                            Do You Want To Really Save ....
                          </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name="daybook_submit">Save</button> 
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section><!-- /.content -->
      </form>
      </div><!-- /.content-wrapper -->