
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> DayBook Reports</h1>
          
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
                  <!-- type Here -->  
                </div><!-- /.box-header -->
                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: rgb(85, 171, 127);">
                    <tr>
                      <th style="width:26%;">DateTime</th>
                      <th style="width:50%;">Report</th>
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

                          if( $date_compare[0] == $session_date )
                            $Edit_Button = "
                                <button type='button' class='btn btn-success' data-toggle='modal' data-target='#Edit_Update$history->id'>
                                  <i class='fa fa-pencil'></i> Edit
                                </button>";
                          else 
                            $Edit_Button = "";
                                                
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
                                              {$Edit_Button}
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

                          //Comment Modals
                          $comment_modal[] = "<div class='modal fade' id='Comment$history->id' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                            <div class='modal-dialog2'>
                                <div class='modal-content1'>
                                    <div class='modal-header1'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h4 class='modal-title' id='myModalLabel'> $history->superior_name </h4>
                                    </div>
                                    <div class='color-palette'>
                                        <form method='' action=''>
                                            <div class='modal-body'>
                                                 $history->superior_comment 
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

                          //Edit/Update Modals
                          $edit_update_modal[] = "<div class='modal fade' id='Edit_Update$history->id' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                            <div class='modal-dialog2'>
                                <div class='modal-content1'>
                                    <div class='modal-header1'>
                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                        <h4 class='modal-title' id='myModalLabel'> $history->report_date </h4>
                                    </div>
                                    <div class='color-palette'>
                                        <form method='post' action='Update_Daybook'>
                                            <div class='modal-body'>
                                              <textarea class='contacts-list-msg' id='compose-textarea-initiative' style=' margin-left:5px;height:180px; width:100%;border:1px solid rgb(157, 181, 195);color:#444;background-color: #fff;' Placeholder=' Type Here..!' name='daybook_report'>
                                                  $history->report
                                              </textarea>
                                                  
                                            </div>
                                            <div class='modal-footer'>
                                                <button type='submit' class='btn btn-success' data-dismiss='modal'>
                                                    <i class='fa fa-check-square-o'></i> Update
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
                    foreach ($detail_modal as $modal) {
                      # code...
                      print $modal;
                    }

                    //Initiative Modal
                    foreach ($initiative_modal as $modal) {
                      # code...
                      print $modal;
                    }

                    //Comment Modal
                    foreach ($comment_modal as $modal) {
                      # code...
                      print $modal;
                    }

                    //Edit/Update Modal
                    foreach ($edit_update_modal as $modal) {
                      # code...
                      print $modal;
                    }

                  ?>
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->