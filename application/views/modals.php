<?php
  # Background Colors
  $bg = [ 0 => "bg-blue",1 => "bg-green",2 => "bg-grey",3 => "bg-aqua",4 => "bg-yellow",5 => "bg-purple",6 => "bg-maroon"
  ];
?>    
      <!-- Reset Modals -->
      <div class="modal fade" id='resetmodal' role='dialog' aria-hidden='true' >
          <div class="modal-dialog">
            <div class="modal-content">
            <form action="ResetPassword" method="post">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title">Reset Password</h4>
              </div>
              <div class="modal-body">
                <div class="control-label">
                  <label> Username</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                       <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control"  id="resetname" name="date_recv" required readonly/>
                  </div><!-- /.input group -->
                </div>
                <div class="control-label">
                  <label> New Password</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                       <i class="fa fa-key"></i>
                    </div>
                    <input type="password" class="form-control" name="newpasswd" required/>
                  </div><!-- /.input group -->
                </div>
                <div class="control-label">
                  <label> Confirm Password</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                       <i class="fa fa-key"></i>
                    </div>
                    <input type="password" class="form-control" name="confirmpasswd" required/>
                  </div><!-- /.input group -->
                </div>
                <input type="hidden" id="resetId" name="userResetId"/> 
              </div>
              <div class="modal-footer">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                  <button class="btn btn-danger" type="submit" name="resetbtn"><i class="fa fa-database"></i> Update</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
                <div class="col-md-4"></div>
              </div>
              </form>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div>
      <!-- Reset Modals -->

      <!-- Delete Modals -->
      <div class="modal fade" id='deletemodal' role='dialog' aria-hidden='true' >
        <div class="modal-dialog">
          <div class="modal-content">
          <form id="form_url" action="" method="post">
            <input type="hidden" name="resulturl" />
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
              <h4 class="modal-title">Confirm Delete</h4>
            </div>
            <div class="modal-body">
              Do You Want To Really Delete <?php echo "<strong><em id='deletename'></em></strong>"; ?> .... ?
              <input type="hidden" id="deleteId" name="deleteid" value="" /> 
            </div>
            <div class="modal-footer">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <button class="btn btn-danger" type="submit" name="deletebutton"><i class="fa fa-database"></i> Delete</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              </div>
              <div class="col-md-4"></div>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- All Delete Modals -->

      <!-- Add task Modals -->
      <div class="modal fade" id='taskmodal' role='dialog' aria-hidden='true' >
        <div class="modal-dialog">
          <div class="modal-content">
          <form id="form_url" action="../../Project/Task" method="post">
            <input type="hidden" name="phaseid"><input type="hidden" name="action"><input type="hidden" name="resulturl"><input type="hidden" name="taskid">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
              <h4 class="modal-title">Task</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                 <div class="control-label col-md-12" >
                  <label> Artisan</label>
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input type="text" class="form-control" name="department" required readonly />
                  </div><!-- /.input group -->
                </div style="margin-bottom:5px;">
                 <div class="control-label col-md-12" style="margin-top:5px">
                  <label> Task Name</label>
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input type="text" class="form-control" name="taskname" required/>
                  </div><!-- /.input group -->
                </div>
                <div class="control-label col-md-12" style="margin-top:5px;">
                  <label> Durations / Time </label>
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input type="text" class="form-control 2waydate" name="taskduration" data-error="Select A Date" required/>
                  </div><!-- /.input group -->
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" name="save_task" class="btn btn-success"><i class="fa fa-database"></i> Save</button>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!--Add task Modals -->

      <!-- Task Complete Modals -->
      <div class="modal fade" id='taskcompletemodal' role='dialog' aria-hidden='true' >
        <div class="modal-dialog">
          <div class="modal-content">
          <form action="../../Project/Task_Complete_Status" method="post">
            <input type="hidden" name="resulturl" />
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
              <h4 class="modal-title">Confirm Completion</h4>
            </div>
            <div class="modal-body">
                  Do You Confirm that <?php echo "<strong><em id='taskname'></em></strong>"; ?> ?
                  <input type="hidden" name="taskid" value="" /> <input type="hidden" name="status" value=""> 
            </div>
            <div class="modal-footer">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <button class="btn btn-success" type="submit" name="confirmbtn"><i class="fa fa-check"></i> Yes I Confirm</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              </div>
              <div class="col-md-4"></div>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- Task Complete Modals -->

      <!-- Achknowledgemet Modals -->
      <div class="modal fade" id='approvalmodal' role='dialog' aria-hidden='true' >
        <div class="modal-dialog">
          <div class="modal-content">
          <form id="form_url" action="" method="post">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
              <h4 class="modal-title"> Approved</h4>
            </div>
            <div class="modal-body">
                Approved..!!   <i class="fa fa-approve"></i>
                  <input type="hidden" id="deleteId" name="deleteid" value="" /> 
                  Ref:...00234#
            </div>
            <div class="modal-footer">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              </div>
              <div class="col-md-4"></div>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- All Delete Modals -->

      <!-- Project report Modal -->
      <div class="modal fade" id='projectreport' role='dialog' aria-hidden='true' >
        <div class="modal-dialog" style="width:80%;">
          <div class="modal-content">
            <form id="form-url" method="post">
              <input type="hidden" name="phaseid"/><input type="hidden" name="resulturl" />
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" title id="heading"> Report </h4>
              </div>
              <div class="modal-body" id="reportbody">
                
              </div>
              <div class="modal-footer">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                  <button type="button" class="btn btn-primary pull-right" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
                <div class="col-md-4"></div>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- Project report Modal -->
      
      <!-- Project report Modals -->
      <div class="modal fade" id='projectreports' role='dialog' aria-hidden='true' >
        <div class="modal-dialog" style="width:80%;">
          <div class="modal-content">
            <form id="form-url" action="../../Project/Make_Report" method="post">
              <input type="hidden" name="phaseid"/><input type="hidden" name="resulturl" />
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" title id="heading"> New Report </h4>
              </div>
              <div class="modal-body">
                <div class="box-body">
                  <div class="row">
                    <div class="control-label col-md-4" >
                      <label> Project Name</label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="projectname" required readonly />
                      </div><!-- /.input group -->
                    </div>
                    <div class="control-label col-md-4">
                      <label> Artisan</label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="department" required readonly/>
                      </div><!-- /.input group -->
                    </div>
                    <div class="control-label col-md-4">
                      <label> Date </label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="dateofreport" value="<?php echo gmdate("l F j, Y"); ?>" required readonly/>
                      </div><!-- /.input group -->
                    </div>
                    <div id="composediv" class="control-label col-md-12" style="margin-top:5px">
                      <label> Report </label>
                        <textarea name="report" class="compose-textarea" style="width:100%;height:500px;"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                  <button class="btn btn-success" type="submit" name="save_report"><i class="fa fa-database"></i> Save </button>
                  <button type="button" class="btn btn-primary pull-right" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
                <div class="col-md-4"></div>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- All Delete Modals -->

        <!-- Project revive Modals -->
      <div class="modal fade" id='projectrevive' role='dialog' aria-hidden='true' >
        <div class="modal-dialog" style="width:40%;">
          <div class="modal-content">
            <form id="form-url" action="../../Project/Make_Report" method="post">
              <input type="hidden" name="phaseid"/><input type="hidden" name="resulturl" />
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" title id="heading"> Project Revival </h4>
              </div>
              <div class="modal-body">
                <div class="box-body">
                    <div class="row">
                 <div class="control-label col-md-12" >
                  <label> Name of project</label>
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input type="text" class="form-control" name="department" required readonly />
                  </div><!-- /.input group -->
                </div style="margin-bottom:5px;">
                 <div class="control-label col-md-12" style="margin-top:5px;">
                  <label> Set New Durations / Time </label>
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input type="text" class="form-control 2waydate" name="taskduration" data-error="Select A Date" required/>
                  </div><!-- /.input group -->
                </div>
              </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                  <button class="btn btn-success" type="submit" name="save_report"><i class="fa fa-database"></i> Save </button>
                  <button type="button" class="btn btn-primary pull-right" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
                <div class="col-md-4"></div>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- Project revive Modals -->

      <!-- Selecting a Project in New Request -->
      <div class="modal fade" id="site" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width:800px;">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><i class="fa fa-sitemap"></i> Project(s)</h4>
            </div>
            <form action="#" method="post">
              <div class="modal-body">
                <div class="box-group" id="accordion">
                  <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                  <?php if(!empty($allprojects)) : $counter = 0; ?>
                  <?php 
                    foreach($allprojects As $mainproject) : 
                      # Creating datetime variables
                      $datesplit            = explode(' To ', $mainproject->duration);
                      $end_date             = new DateTime($datesplit[1]);
                      $curr_date            = new DateTime("now");
                      $cur_end_interval     = $end_date->diff($curr_date);

                      # Eliminating incomplete and completed projects
                      $taskinfo = $this->Model_Project->Project_Total_Task($mainproject->proj_id);
                      if($taskinfo['TotalTask'] != 0)
                        $percentage = round($taskinfo['TaskCompleted'] * 100 / $taskinfo['TotalTask'],2);
                      else
                        $percentage = round($taskinfo['TaskCompleted'] * 100 / 1,2);

                      if($end_date->format('Y-m-d') > $curr_date->format('Y-m-d') && $percentage < 100) :
                  ?>
                  <div class="panel box box-primary">
                    <div class="box-header with-border">
                      <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $counter ?>" aria-expanded="false" class="collapsed">
                          <?= substr($mainproject->codename,0,26); ?>
                        </a>
                      </h4>
                    </div>
                    <div id="collapse<?= $counter ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                      <div class="box-body">
                        <div class="timeline-body mailbox-messages">
                          <ul class="timeline">
                            <?php
                              $proj_info = $this->Model_Project->ret_proj_phases($mainproject->proj_id);
                              foreach ($proj_info as $info) :
                                if($info->status == 1) :
                            ?>
                            <!-- timeline time label -->
                            <li class="time-label">
                              <span class="bg-green">
                                <?= $info->ph_name ." (".$info->ph_duration.")"?>
                              </span>
                            </li>
                            <!-- /.timeline-label -->
                            <?php
                              if(!empty($info->ph_artisans)) :
                                $artisans = explode('#', $info->ph_artisans);
                                foreach ($artisans as $artisan) :
                                  if(!empty($artisan)) :
                            ?>
                            <li>
                              <i class="fa fa-sitemap <?= $bg[rand(0,6)]?>"></i>
                              <div class="timeline-item">
                                <div class="box">
                                  <div class="box-header with-border">
                                    <h3 class="box-title" style="font-size:initial;color:#337ab7">
                                      <strong><?= $artisan ?></strong>
                                    </h3>
                                    <div class="box-tools pull-right">
                                      <span class="label label-danger">Pending Task</span>
                                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                  </div><!-- /.box-header -->
                                  <div class="box-body">
                                    <div class="">
                                      <div class="timeline-body mailbox-messages">
                                        <ul class="todo-list">
                                        <!-- Main Task -->
                                        <?php 
                                          $taskinfo = $this->Model_Project->ret_artisan_task($artisan,$info->id);
                                          if(!empty($taskinfo)) :
                                            foreach ($taskinfo as $task) :
                                              if($task->status != 1) :
                                              $encryptedtext = urlchange(sha1($task->tk_name).base64_encode($task->id));
                                        ?>  
                                        <li>
                                          <span class="handle">
                                            <i class="fa fa-ellipsis-v"></i>
                                            <i class="fa fa-ellipsis-v"></i>
                                          </span>
                                          <a href="New_Request/<?php print urlchange($mainproject->codename).'/'.urlchange($task->tk_name).'/'.$encryptedtext; ?>" data-project=""><span class="text"><?= $task->tk_name ?></span></a>
                                          <small class="label label-warning"><i class="fa fa-clock-o"></i> <?= $task->tk_duration ?></small>
                                        </li>
                                            <?php endif; endforeach; ?>
                                        <?php endif;  ?>
                                        <!-- Main Task -->
                                        
                                        </ul>
                                      </div>
                                    </div><!-- /.row -->
                                  </div><!-- ./box-body -->
                                  <div class="box-footer"></div><!-- /.box-footer -->
                                </div>
                              </div>
                            </li>
                            <?php
                                  endif;
                                endforeach;
                              endif;
                            ?>
                            <?php endif; endforeach; ?>
                            <li>
                              <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php  $counter++; endif; endforeach;?>
                  <?php endif; ?>
                </div>
              </div>
              <div class="modal-footer clearfix">
                 <button type="button" class="btn btn-primary pull-right" data-dismiss="modal"><a href="New_Request"><i class="fa fa-times"></i> Not Project</a></button>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      <!-- Selecting a Project in New Request -->

      <!-- New / Request Preview Modal -->
      <div class="modal fade" id="previewrequest" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width:900px;!important">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><i class="fa fa-print"></i> Request sheet</h4>
            </div>
            <div class="modal-body">
              <form action="<?= base_url().'Project/Send_Request' ?>" method="post">
              <input type="hidden" name="taskid" value="<?= @$taskid ?>" />
              <input type="hidden" name="employee_id" value="<?= base64_encode($_SESSION['employee_id']) ?>" />
                <section class="invoice">
                  <div class="row invoice-info">
                    <!--<div class="col-sm-4 invoice-col">
                      From
                      <address>
                        <strong>Admin, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (804) 123-5432<br/>
                        Email: info@almasaeedstudio.com
                      </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                      To
                      <address>
                        <strong>John Doe</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (555) 539-1037<br/>
                        Email: john.doe@example.com
                      </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                      <b>Request No. #007612</b><br/>
                      <br/>
                      <b>Date Sent:</b> 12/11/2016<br/>
                      <b>Payment Due:</b> 2/22/2014<br/>
                      <b>Account:</b> 968-34567
                    </div>
                  </div><!-- /.row -->
                  <!-- title row -->
                  <div class="row">
                    <div class="col-xs-12">
                      <legend>Tools / Materials</legend>
                      <table class="table table-bordered" style="font-size:14px;" id="toolsmodaltable">
                      </table>
                    </div><!-- /.col -->
                  </div>
                 
                  <div class="row">
                    <div class="col-xs-12">
                      <legend>Machine / Equipment</legend>
                      <table class="table table-bordered" style="font-size:14px;" id="machinemodaltable">
                      </table>
                    </div><!-- /.col -->
                  </div>

                  <div class="row">
                    <div class="col-xs-12">
                      <legend>Labour</legend>
                      <table class="table table-bordered" style="font-size:14px;" id="labourmodaltable">
                      </table>
                    </div><!-- /.col -->
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <legend>Finance</legend>
                      <table class="table table-bordered" style="font-size:14px;" id="financemodaltable">
                      </table>
                    </div><!-- /.col -->
                  </div>
                   <div class="col-xs-8">
                     <div class="col-sm-4 invoice-col">
                      Prepared by
                      <address>
                        <strong>Mr. Bismark KK Manu</strong><br>
                       
                      </address>
                    </div><!-- /.col -->
                   </div>
                  <!-- this row will not appear when printing -->
                  <div class="row no-print">
                    <div class="col-xs-12">
                      <a href="invoice-print.html" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
                       <button type="submit" name="send_request" class="btn btn-success" ><i class="fa fa-envelope-o"></i> Send</button>
                      </div>
                    </div>
                  </div>
                </section>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      <!-- Request Preview Modal -->

      <!-- Risk Asesment Preview Modal -->
      <div class="modal fade" id="riskreport" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width:900px;!important">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><i class="fa fa-print"></i> Risk Assesment Report</h4>
            </div>
            <div class="modal-body">
              <input type="hidden" name="taskid" value="" />
                <section class="invoice" >
                  <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                      From
                      <address>
                        <strong>Admin, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (804) 123-5432<br/>
                        Email: info@almasaeedstudio.com
                      </address>
                    </div><!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                      To
                      <address>
                        <strong>John Doe</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        Phone: (555) 539-1037<br/>
                        Email: john.doe@example.com
                      </address>
                    </div><!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                      <b>Request No. #007612</b><br/>
                      <br/>
                      <b>Date Sent:</b> 12/11/2016<br/>
                      <b>Payment Due:</b> 2/22/2014<br/>
                      <b>Account:</b> 968-34567
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                  <!-- title row -->
                    <div id="riskrepbody" class="control-label col-md-12" style="margin-top:5px">
                    </div>
                   <div class="col-xs-8">
                     <div class="col-sm-4 invoice-col">
                      Prepared by
                      <address>
                        <strong>Mr. Bismark KK Manu</strong><br>
                       
                      </address>
                    </div><!-- /.col -->
                   </div>
                  
                   <div class="col-xs-4"></div>
                  <!-- this row will not appear when printing -->
                  <div class="row no-print">
                    <div class="col-xs-12">
                   
                       <button type="submit" class="btn btn-danger" ><i class="fa fa-cancil"></i>Close</button>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      <!-- Risk Asesment Preview Modal -->

      <!-- No Risk report Modal -->
      <div class="modal fade" id='noriskreport' role='dialog' aria-hidden='true' >
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="form-url" method="post">
              <input type="hidden" name="phaseid"/><input type="hidden" name="resulturl" />
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" title id="heading"> No Risk Report Found </h4>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                  <button type="button" class="btn btn-primary pull-right" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
                <div class="col-md-4"></div>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- No Risk report Modal -->

       <!-- audit Preview Modal -->
      <div class="modal fade" id="audit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width:900px;!important">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><i class="fa fa-print"></i> Report</h4>
            </div>
            <section class="invoice">
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                
                  <address>
                    <strong> Company Name</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br/>
                    Email: info@almasaeedstudio.com
                  </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                 
                  <address>
                   
                  </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Request No. #007612</b><br/>
                  <br/>
                  <b>Date Sent:</b> 12/11/2016<br/>
                  <b>Payment Due:</b> 2/22/2014<br/>
                  <b>Account:</b> 968-34567
                </div><!-- /.col -->
              </div><!-- /.row -->
              <!-- title row -->
              <div class="row">
                <div class="col-xs-12">
                  <legend>Tools / Materials</legend>
                  <table class="table table-bordered" style="font-size:14px;">
                    <thead class="bg-blue" style="color: white;">
                      <th style="width: 10px">#</th>
                      <th>Item Name</th>
                      <th>Qty</th>
                      <th>Rate(GH₵)</th>
                      <th>Amount(GH₵)</th>
                      <th>Vendor</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Cement</td>
                        <td>230</td>
                        <td>20</td>
                        <td>4600</td>
                        <td>Dangote</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.col -->
              </div>
             
              <div class="row">
                <div class="col-xs-12">
                  <legend>Machine / Equipment</legend>
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
                </div><!-- /.col -->
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <legend>Labour</legend>
                  <table class="table table-bordered" style="font-size:14px;">
                    <thead style="background-color: #006142;color: white;">
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Duration</th>
                      <th>Rate/Day</th>
                      <th>Amount(GH₵)</th>
                      <th>Note</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Mason</td>
                        <td>5 Months</td>
                        <td>60</td>
                        <td>6000</td>
                        <td>2 yrs Experienced</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.col -->
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <legend>Finance</legend>
                <table class="table table-bordered" style="font-size:14px;">
                        <thead style="background-color: #8c8c8c;color: white;">
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
                            <td>---</td>
                            <td>6000</td>
                            <td>Mantrac</td>
                          </tr>
                          <tr>
                            <td>1.</td>
                            <td>Crane</td>
                            <td>To Lift Heavy Machines To Tky Level</td>
                            <td>3 Months</td>
                            <td>---</td>
                            <td>6000</td>
                            <td>Mantrac</td>
                          </tr>
                        </tbody>
                        <tbody style="background-color: #8c8c8c;color: white;">
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th>---</th>
                          <th>12000</th>
                          <th></th>
                        </tbody>
                      </table>
                </div><!-- /.col -->
              </div>
              <legend></legend>
               <div class="col-xs-8">
                 <div class="col-sm-4 invoice-col">
                  Requsted by
                  <address>
                    <strong>Mr. Bismark KK Manu</strong><br>
                   
                  </address>
                </div><!-- /.col -->
               </div>
              
               <div class="col-xs-4">

            
                    </br></br>
                

                </div>
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-xs-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
                   <button type="submit" class="btn btn-danger" ><i class="fa fa-minues"></i> Discard</button>
                  </div>
                </div>
              </div>
            </section>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      <!-- audit Preview Modal -->

      <!-- Manage employee Modal -->
      <div class="modal fade" id="employeeinfo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width:900px;!important">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><i class="fa fa-print"></i> Employee Details</h4>
            </div>
            <section class="invoice">
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                
                  <address>
                    <strong> Company Name</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br/>
                    Email: info@almasaeedstudio.com
                  </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                 
                  <address>
                   
                  </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Request No. #007612</b><br/>
                  <br/>
                  <b>Date Sent:</b> 12/11/2016<br/>
                  <b>Payment Due:</b> 2/22/2014<br/>
                  <b>Account:</b> 968-34567
                </div><!-- /.col -->
              </div><!-- /.row -->
              <!-- title row -->
         
                <div class="col-xs-6">
                  <legend>Personal Information</legend>
                  <div class="col-sm-6 invoice-col">
                  <b>Mr</b><br/>
                  <b>Bismark</b> Offei<br/>
                  <b>19 decembder 1000:</b> Single<br/>
                  <b>Male</b> 968-34567
                </div><!-- /.col -->
                </div><!-- /.col -->

                <div class="col-xs-6">
                  <legend>Contact Information</legend>
                  <div class="col-sm-6 invoice-col">
                  <b>Mr</b><br/>
                  <b>Bismark</b> Offei<br/>
                  <b>19 decembder 1000:</b> Single<br/>
                  <b>Male</b> 968-34567
                </div><!-- /.col -->
                </div><!-- /.col -->
      

            
                <div class="col-xs-6">
                  <legend>Account Information</legend>
             <div class="col-sm-6 invoice-col">
                  <b>Mr</b><br/>
                  <b>Bismark</b> Offei<br/>
                  <b>19 decembder 1000:</b> Single<br/>
                  <b>Male</b> 968-34567
                </div><!-- /.col -->
                </div><!-- /.col -->
       
              
              <div class="col-xs-6">
                  <legend>Position </legend>
                <div class="col-sm-6 invoice-col">
                  <b>Mr</b><br/>
                  <b>Bismark</b> Offei<br/>
                  <b>19 decembder 1000:</b> Single<br/>
                  <b>Male</b> 968-34567
                </div><!-- /.col -->
                </div><!-- /.col -->
                <div class="col-xs-6">
                  <legend> Next of kings</legend>
                <div class="col-sm-6 invoice-col">
                  <b>Mr</b><br/>
                  <b>Bismark</b> Offei<br/>
                  <b>19 decembder 1000:</b> Single<br/>
                  <b>Male</b> 968-34567
                </div><!-- /.col -->
                </div><!-- /.col -->
              
                
                <div class="col-xs-6">
                  <legend>Salary Information</legend>
               <div class="col-sm-6 invoice-col">
                  <b>Mr</b><br/>
                  <b>Bismark</b> Offei<br/>
                  <b>19 decembder 1000:</b> Single<br/>
                  <b>Male</b> 968-34567
                </div><!-- /.col -->
                </div><!-- /.col -->
            
              <legend></legend>
               <div class="col-xs-8">
                 <div class="col-sm-4 invoice-col">
                  Requsted by
                  <address>
                    <strong>Mr. Bismark KK Manu</strong><br>
                   
                  </address>
                </div><!-- /.col -->
               </div>
              
               <div class="col-xs-4">

            
                    </br></br>
                

                </div>
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-xs-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
                   <button type="submit" class="btn btn-danger" ><i class="fa fa-minues"></i> Discard</button>
                  </div>
                </div>
              </div>
            </section>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      <!-- Manage employee Modal -->

      <!--Store validation Modal-->
      <div class="modal fade" id="validate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width:1200px;!important">
          <div class="modal-content">
          <form id="form_url" action="" method="post">
             <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
              <h4 class="modal-title"> Store Validation Resulte</h4>
            </div>
            <div class="modal-body">
              <div class="col-xs-6">

                <div class="box box-info">
               <div class="box-header">
              <h3 class="box-title">Available Stock
                <small>From Stock</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
               </div>
               <!-- /.box-header -->
               <div class="box-body pad">
              
                   <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br/>
                    Email: info@almasaeedstudio.com
                  </address>
                  </div><!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br/>
                    Email: john.doe@example.com
                  </address>
                  </div><!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                  <b>Request No. #007612</b><br/>
                  <br/>
                  <b>Date Sent:</b> 12/11/2016<br/>
                  <b>Payment Due:</b> 2/22/2014<br/>
                  <b>Account:</b> 968-34567
                  </div><!-- /.col -->
                  </div><!-- /.row -->
                
                  <legend>Machine / Equipment</legend>
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
                </br>
                   <button class="btn btn-success pull-left" data-widget="remove" data-toggle="tooltip" ><i class="fa fa-th"></i>Forword</button> 
               </div>

               </div>



                
                
                
                </div><!-- /.col -->
            

              
                <div class="col-xs-6">

                <div class="box box-info">
               <div class="box-header">
              <h3 class="box-title">To be Purchased
                <small>From Stock</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
               </div>
               <!-- /.box-header -->
               <div class="box-body pad">
              
                   <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br/>
                    Email: info@almasaeedstudio.com
                  </address>
                  </div><!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br/>
                    Email: john.doe@example.com
                  </address>
                  </div><!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                  <b>Request No. #007612</b><br/>
                  <br/>
                  <b>Date Sent:</b> 12/11/2016<br/>
                  <b>Payment Due:</b> 2/22/2014<br/>
                  <b>Account:</b> 968-34567
                  </div><!-- /.col -->
                  </div><!-- /.row -->

                  <legend>Machine / Equipment</legend>
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
                </br>
                   <button class="btn btn-success pull-left" data-widget="remove" data-toggle="tooltip" ><i class="fa fa-th"></i>Forword</button> 
               </div>

               </div>



                
                
                
                </div><!-- /.col -->

              
            
            <div class="modal-footer">

               <button class="btn btn-primary" data-toggle="modal" data-target="#preview" ><i class="fa fa-th"></i> Save</button>
               <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i>Done</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i>Discard</button>
     
            </div>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>

      <!-- COMPOSE MESSAGE MODAL -->
      <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Request details</h4>
            </div>
             <div class="row">
              <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Request Cart</th>
                      <th>Request type</th>
                      <th>Item Name</th>
                      <th>Site</th>
                      <th>Purpose</th>
                      <th>Reg/Serial No:</th>
                      <th>Reqused by:</th>
                      <th>Item Quan.</th>
                      <th>T. Amount</th>
                      <th>Transpot/Driver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1/04/09</td>
                      <td>Materials</td>
                      <td>service</td>
                      <td>cement</td>
                      <td>site a</td>
                      <td>for building house</td>
                      <td>#43533</td>
                      <td> bismark</td>
                      <td>10000</td>
                      <td>$12900</td>
                      <td>manu</td>
                    </tr>
                 <tr>
                      <td>1/04/09</td>
                      <td>Materials</td>
                      <td>service</td>
                      <td>cement</td>
                      <td>site a</td>
                      <td>for building house</td>
                      <td>#43533</td>
                      <td> bismark</td>
                      <td>10000</td>
                      <td>$12900</td>
                      <td>manu</td>
                    </tr>
                   <tr>
                      <td>1/04/09</td>
                      <td>Materials</td>
                      <td>service</td>
                      <td>cement</td>
                      <td>site a</td>
                      <td>for building house</td>
                      <td>#43533</td>
                      <td> bismark</td>
                      <td>10000</td>
                      <td>$12900</td>
                      <td>manu</td>
                    </tr>
                    <tr>
                      <td>1/04/09</td>
                      <td>Materials</td>
                      <td>service</td>
                      <td>cement</td>
                      <td>site a</td>
                      <td>for building house</td>
                      <td>#43533</td>
                      <td> bismark</td>
                      <td>10000</td>
                      <td>$12900</td>
                      <td>manu</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- /.col -->
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- COMPOSE MESSAGE MODAL -->

      <!-- Manage Stock Details -->
      <div class="modal fade" id="managestock-details" role='dialog' aria-hidden='true' >
        <div class="modal-dialog" style="width: 500px;">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
              <h4 class="modal-title">Product Details</h4>
            </div>
            <div class="modal-body">
              <form action="Add_Stock" method="Post">
                <div class="box-body">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th style="width: 10px"> #</th>
                        <th>Fields</th>
                        <th>Data.</th>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Product ID</td>
                        <td id="prodid"></td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Category</td>
                        <td id="prodcategory"></td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Item Name</td>
                        <td id="prodname"></td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Description</td>
                        <td id="proddesc"></td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Location</td>
                        <td id="prodloc"></td>
                      </tr>
                      <tr>
                        <td>6.</td>
                        <td>Unit Qty</td>
                        <td id="produnitqty"></td>
                      </tr>
                      <tr>
                        <td>7.</td>
                        <td>Unit Price</td>
                        <td id="produnitprice"></td>
                      </tr>
                      <tr>
                        <td>8.</td>
                        <td>Current Qty</td>
                        <td id="prodcurrqty"></td>
                      </tr>
                      <tr>
                        <td>9.</td>
                        <td>Expiry</td>
                        <td id="prodexpiry"></td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- ./box-body -->
             </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- Manage Stock Details -->

      <!-- Supplier's Edit -->
      <div class="modal fade" id='edit-supplier' role='dialog' aria-hidden='true' >
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="Update_Supplier" method="post">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title">Details</h4>
              </div>
              <div class="modal-body">
                <div class="box-body">
                  <!--Column left -->
                  <div  class="col-xs-6">
                    <div class="control-label">
                      <label> Supplier's Name </label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="edit_sup_name" required/>
                      </div><!-- /.input group -->
                    </div>
                    <div style="margin-top:5px;">
                      <label>Primary Tel. No. </label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="edit_sup_tel1" placeholder="(+233) 244 555 666" data-mask data-inputmask='"mask": "(+999) 999-999-999"' required/>
                      </div><!-- /.input group -->
                    </div>
                    <div style="margin-top:5px;">
                      <label>Secondary Tel. No.</label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="edit_sup_tel2" placeholder="(+233) 244 555 666" data-mask data-inputmask='"mask": "(+999) 999-999-999"'/>
                      </div><!-- /.input group -->
                    </div>
                  </div>
                  <!-- ./ Column Left -->
                  <!--Column Right -->
                  <div  class="col-xs-6">
                    <div>
                      <label>Address </label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="edit_sup_addr" placeholder="P.O.BOX K47, Kanda- Accra."/>
                      </div><!-- /.input group -->
                    </div>
                    <div style="margin-top:5px;">
                      <label>Email </label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="email" class="form-control" name="edit_sup_email" placeholder="username@domain.com" />
                      </div><!-- /.input group -->
                    </div>
                    <div style="margin-top:5px;">
                      <label>Location</label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="edit_sup_loc" placeholder="Kancook 12th Avenue, Dzorwulu"/>
                      </div><!-- /.input group -->
                    </div>
                  </div>
                  <!-- ./Column Right -->
                </div>
                <input type="hidden" name="edit_sup_id"/>
              </div>
              <div class="modal-footer">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                  <button class="btn btn-success" type="submit" name="sup_update"><i class="fa fa-database"></i> Save Changes</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
                <div class="col-md-4"></div>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- Supplier's Edit -->