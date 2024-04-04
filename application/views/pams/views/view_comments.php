
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Report & Comment(s)</h1>
          
        <ol class="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="../Dashboard"><i class="fa fa-mail-reply"></i> Dashboard</a></li>
                <li class="active"></li>
                <li class="active"></li>
            </ol>
        </ol>

        </section>
        
        <!-- Main content -->
        <section class="content1">
            <div class="row">
                <div class="col-xs-12"> 
                  <div class="box">
                    <div class="box-header">
                    <form action="Search_Reports" method="post">
                      <!-- type Here -->
                      <div  class="col-xs-6 ">
                        <label>Select Subordinate's Name</label>
                        <select data-placeholder="Search and Select " style="width:350px;" class="chosen-select" tabindex="5" required name="employee_id">
                          <option></option>
                          <?php 
                              if( !empty($dept_info) && isset($_SESSION['Role']['Comment']) ) {
                                  
                                  //Comment All Priviledge 
                                  if( isset($_SESSION['Priviledge']['Reports-All']) ) {
                                      foreach($dept_info as $dept) {
                          ?>
                          <optgroup label='<?php echo $dept->name; ?>'>
                          <?php 
                            //Retrieving All Department Members
                            $deptmembers = $this->user_model->department_members($dept->name);

                            foreach ($deptmembers as $members) {
                             # code...
                              if($members->employee_id == $employee_id)
                                $option = "Selected";

                                if($option == "Selected")
                                  $_SESSION['Subordinate_Selected'] = "$members->fullname";
                          ?>
                            <option value="<?php echo $members->employee_id; ?>" <?php echo @$option; $option=""; ?> > <?php echo $members->fullname; ?> </option>
                          <?php } ?>
                          </optgroup>
                          <?php
                                } 
                              }//End of Comment All Priviledge 
                              elseif ( isset($_SESSION['Priviledge']['Reports-Department']) ) {
                                # code...
                                //Retrieving Department Members Only
                                $deptmembers = $this->user_model->department_members($_SESSION['department']);
                          ?>
                          <optgroup label='<?php echo $_SESSION['department']; ?>'>
                                <?php
                                      foreach ($deptmembers as $members) {
                                         # code...
                                        if($members->employee_id == $employee_id)
                                          $option = "Selected";
                          ?>
                              <option value="<?php echo $members->employee_id; ?>" <?php echo @$option; $option=""; ?> > <?php echo $members->fullname; ?> </option>
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
                      <div>
                        <label></label><br>
                        <input type="submit" class="btn btn-success" name="Comment_view" value="Search" style="margin-top:5px;">
                      </div>
                      </form>  
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead style="background-color: rgb(85, 171, 127);">
                            <tr>
                                <th style="width:26%;">DateTime</th>
                                <th style="width:50%;">Daybook Report</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                  <?php 
                                            
                    if (!empty($report_history)) {
                                                
                      $counter = 1;
                                                
                      foreach ($report_history as $history) {
                        //checking if initiative is empty
                        if(!empty($history->report)) 
                          #code
                          $details_Button = "
                            <a href='' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#Report$history->id' data-dismiss='modal'>
                              <i class='fa fa-th'></i>
                              Details
                            </a>";
                        else 
                          $details_Button = "";

                        //checking if initiative is empty
                        if(!empty($history->initiative)) 
                          #code
                          $initiative_Button = "
                            <a href='' class='btn btn-success btn-xs' data-toggle='modal' data-target='#initiative$history->id' data-dismiss='modal'>
                              <i class='fa fa-check-square-o'></i> 
                              initiative
                            </a>";
                                              
                        else
                          $initiative_Button = "";
                                              
                          //checking if Superior_Comment is empty
                          if(!empty($history->superior_comment)) 
                            #code
                            $Superior_Button = "
                              <a href='' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#Comment$history->id' data-dismiss='modal'>
                                <i class='fa fa-comment'></i> 
                                Comment
                            </a>";
                                                
                          else
                            $Superior_Button = "";
                                                
                          $tableinfo ="
                            <tr>
                              <td><b>$history->report_date</b></td>
                              <td>".strip_tags(substr($history->report, 0,90))."</td>
                              <td>
                                {$details_Button}
                                {$initiative_Button}
                                {$Superior_Button}
                                <input type='hidden' value='{$history->id}'>
                              </td>
                            </tr>";
                          print $tableinfo;

                          //condition for edit butto
                          $date_compare = explode(".", $history->report_date);

                          //LOADING SESSION DATE
                          $this->load->model('events_model');
                          $session_date = $this->events_model->retrieve_session();
                          if(!empty($session_date)) {
                            #code
                            foreach ($session_date as $session) {
                              # code...
                              $session_date  = $session;
                            }
                          }
                                                
                          //Details Modals
                          $detail_modal[] = "<div class='modal fade' id='Report$history->id' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                            <div class='modal-dialog2'>
                                <div class='modal-content1'>
                                    <div class='modal-header1'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h4 class='modal-title' id='myModalLabel'> $history->report_date </h4>
                                    </div>
                                    <div class='color-palette'>
                                        <form method='' action=''>
                                            <div class='modal-body'>
                                                 $history->report 
                                            </div>
                                            <div class='modal-footer'>
                                              <button type='button' class='btn btn-primary' data-dismiss='modal'>
                                                <i class='fa fa-mail-reply'></i> Back
                                              </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                              </div>
                            </div>";

                          //Initiative Modals
                          $initiative_modal[] = "<div class='modal fade' id='initiative$history->id' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                            <div class='modal-dialog2'>
                                <div class='modal-content1'>
                                    <div class='modal-header1'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h4 class='modal-title' id='myModalLabel'> $history->report_date </h4>
                                    </div>
                                    <div class='color-palette'>
                                        <form method='' action=''>
                                            <div class='modal-body'>
                                                 $history->initiative 
                                            </div>
                                            <div class='modal-footer'>
                                                <button type='button' class='btn btn-primary' data-dismiss='modal'>
                                                    <i class='fa fa-mail-reply'></i> Back
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                              </div>
                            </div>";

                          
                                                }
                                            }

                                        ?>
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                  </table>
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div>
            </div>
 
            <?php 

                    //Details Modals
                    if(!empty($detail_modal)) {
                        foreach ($detail_modal as $modal) {
                          # code...
                          print $modal;
                        }
                    }
                    
                    if(!empty($initiative_modal)) {
                      //Initiative Modal
                      foreach ($initiative_modal as $modal) {
                        # code...
                        print $modal;
                      }
                    }

                    //comment modal
                    
                    
                    if (!empty($report_history)) {
                        
                        $counter = 1;                        
                        
                        foreach ($report_history as $history) {
                          # code...
                          //Creating Names / Comment Arrays
                          $names_exploded = explode("~~~", $history->superior_name);
                          $comment_exploded = explode("~~~", $history->superior_comment);

                          $Superior_Comment = $this->events_model->SuperiorComment($employee_id,$history->report_date);
                            
                            foreach ($Superior_Comment as $superior) {
                                if(!empty($superior->superior_comment)) {

                    ?>
                <div class="modal fade" id="Comment<?php echo $history->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog2">
                        <div class="modal-content1">
                            <div class="modal-header1">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">   <i class='fa fa-mail-reply'></i> Back</button>
                                <h4 class="modal-title" id="myModalLabel">Comments on <?php echo $Subordinate_Selected; ?>  </h4>
                            </div>
                            <form method="post" action="Update_Comment">
                               <div class="box box-success direct-chat direct-chat-success" style="margin-left:20px;">
                <div class="box-header with-border">
                  <h3 class="box-title">Comment(s)</h3>
                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="3 New Comment(s)" class='badge bg-green'>3</span>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <?php
                      for ($i=0; $i < count($names_exploded)-1; $i++) { 
                            # code...
                            $img = base_url()."resources/dist/img/user.png";  

                            if($names_exploded[$i] == $_SESSION['fullname']) {
                              //Display Right Codes
                              $DisableSendBtn = "Yes";
                              $msg = "
                              <!-- Message to the right -->
                                <div class='direct-chat-msg right'>
                                  <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-right'>{$names_exploded[$i]}</span>
                                    <span class='direct-chat-timestamp pull-left'>23 Jan 2:05 pm</span>
                                  </div><!-- /.direct-chat-info -->
                                  <img class='direct-chat-img'  src='{$img}' alt='message user image' />
                                  <!-- /.direct-chat-img -->
                                  <div class='direct-chat-text'>
                                    {$comment_exploded[$i]}
                                  </div><!-- /.direct-chat-text -->
                                </div><!-- /.direct-chat-msg -->                    
                              </div><!--/.direct-chat-messages-->";
                          }
                            else {
                              //Display Left Codes
                              $DisableSendBtn = "No";
                              $msg = "<div class='direct-chat-msg'>
                              <div class='direct-chat-info clearfix'>
                                <span class='direct-chat-name pull-left'></span>
                                  <span class='direct-chat-name pull-left'>{$names_exploded[$i]}</span>
                                <span class='direct-chat-timestamp pull-right'>23 Jan 2:00 pm</span>
                              </div><!-- /.direct-chat-info -->
                              <img class='direct-chat-img'  src='{$img}' alt='message user image' /><!-- /.direct-chat-img -->
                              <div class='direct-chat-text'>
                               {$comment_exploded[$i]}
                              </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->";
                            }

                            print $msg;
                      }
                    }
                  }
                    ?>
                    
                  </div><!-- /.box-body -->
                  <?php 
                  if (@$DisableSendBtn == "No") {
                    echo "<div class='box-footer'>
                                  <form action='' method='post'>
                                    <div class='input-group'>
                                      <input type='text' name='message' placeholder='Type Message ...' class='form-control'/>
                                      <span class='input-group-btn'>
                                        <button type='submit' class='btn btn-success btn-flat' name='comment_submit'>Send</button>
                                      </span>
                
                                    </div>
                                  </form>
                                </div><!-- /.box-footer-->
                              </div><!--/.direct-chat -->
                              </form>
                                        </div>
                                   </div>
                                 </div>";
                  }       
                              $counter++;
                                
                            }
                          }
                 ?>
                                   </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
                    
         
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->