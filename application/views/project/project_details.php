<?php
  # Background Colors
  $bg = [ 0 => "bg-blue",1 => "bg-green",2 => "bg-grey",3 => "bg-aqua",4 => "bg-yellow",5 => "bg-purple",6 => "bg-maroon"
  ];

  $Codename = $project['CodeName'];
?>
 <!-- Right side column. Contains the navbar and content of the page -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="o">
      <h1 class="pull-left">
        <?= $project['ProjectName']?>
      </h1>
      <ol class="breadcrumb">
        <button data-project="<?= $project['CodeName'] ?>" id="riskassessrep" class="btn btn-danger btn-xs" name=""><i class="fa fa-book"></i> Risk Assesment Report</button>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
                
            <?php foreach($project['Phase'] As $Phase) : ?>
              <!-- timeline time label -->
              <?php if($Phase['Status'] == 0) :?>
                <li class="time-label">
                  <span class="bg-red">
                    <?= $Phase['Name']." (".$Phase['Time'].")"?>
                    <form style="display:inline !important" action="../Activate_Phase" method="post"><input type="hidden" name="phaseid" value="<?= base64_encode($Phase['Id']) ?>" /><input type="hidden" name="resulturl" value="" />
                      <button type="submit" class="btn btn-success btn-xs" name="activate_phase"><i class="fa fa-unlock"></i> Activate</button>
                    </form>
                  </span>
                </li>

                <?php elseif($Phase['Status'] == 1) :?>
                <li class="time-label">
                  <span class="bg-green">
                    <?= $Phase['Name']." (".$Phase['Time'].")"?>
                    <form style="display:inline !important" action="../Activate_Phase" method="post"><input type="hidden" name="phaseid" value="<?= base64_encode($Phase['Id']) ?>" /><input type="hidden" name="resulturl" value="" />
                    <button type="submit" class="btn btn-danger btn-xs" name="deactivate_phase"><i class="fa fa-lock"></i> Deactivate</button>
                    </form>
                  </span>
                </li>

              <?php endif; ?>

              <!-- /.timeline-label -->
              <!-- timeline item -->
                <?php 
                  foreach($Phase['Artisan'] As $Department) : 
                   if(!empty($Department)) : 
                      $taskinfo = $this->Model_Project->ret_artisan_task($Department,$Phase['Id']);
                      $taskcounter = 0;
                      if(!empty($taskinfo))
                      {
                        foreach($taskinfo As $taskcount)
                        {
                          if(!empty($taskcount->tk_name))
                            $taskcounter++;
                        }
                      }
                ?> 
                <li>
                  <i class="fa fa-sitemap <?= $bg[rand(0,6)]?>"></i>
                  <div class="timeline-item">
                    <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title" style="font-size:initial;color:#337ab7"><strong><?= $Department ?></strong></h3>
                        <div class="box-tools pull-right">
                          <span class="label label-success"><?= $taskcounter ?> Task</span>
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                          <div class="btn-group">
                            <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i> Action</button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#" data-action="addtask" data-department="<?= $Department ?>" data-phase="<?= base64_encode($Phase['Id']) ?>" class="addtask">Add Task</a></li>
                              <?php if($Phase['Status'] == 1) : ?>
                              <li><a href="<?php print base_url().'Project/New_Report/'.urlchange($Codename).'/'.urlchange($Phase['Name']).'/'.urlchange($Department).'/'.urlchange(sha1($Department).sha1($Phase['Id']).base64_encode($Phase['Id'])); ?>" data-department="<?= $Department ?>" data-phase="<?= base64_encode($Phase['Id']) ?>" data-project="<?= $project['ProjectName']?>" class="addreport">Add Report</a></li>
                            <?php endif; ?>
                            </ul>
                          </div>
                          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <div class="">
                          <div class="timeline-body mailbox-messages">
                            <ul class="todo-list">
                            
                            <!-- Main Task -->
                            <?php 
                                if(!empty($taskinfo)) :
                                  foreach ($taskinfo as $task) :
                                    $encryptedtext = urlchange(sha1($task->tk_name).base64_encode($task->id));
                            ?>  
                            <li>
                              <div class="">
                                <?php if(!$task->status && $Phase['Status'] == 1) : ?>
                                <a href="<?= base_url().'Project/New_Request/'.urlchange($Codename).'/'.urlchange($task->tk_name).'/'.$encryptedtext ?>" style="font-size: 1.1em;margin-top: 5px;color:#444 !important" class="fa fa-calendar-check-o pull-right" data-department="<?= $Department ?>" data-phase="<?= base64_encode($Phase['Id']) ?>" data-taskname="<?= $task->tk_name ?>" data-taskid="<?= base64_encode($task->id) ?>" data-action="mkreqest" data-toggle="tooltip" data-original-title="Make Request"></a>
                                <?php endif; ?>
                                <i style="font-size: 1.1em;margin-top: 5px;" class="fa fa-trash-o pull-right deletebtn" data-formurl="../../Project/Delete_Task" data-delid="<?= base64_encode($task->id) ?>" data-delname="<?= $task->tk_name ?>" data-toggle="tooltip" data-original-title="Delete Task"></i>
                                <i style="font-size: 1.1em;margin-top: 5px;" class="fa fa-edit pull-right edittask" data-department="<?= $Department ?>" data-phase="<?= base64_encode($Phase['Id']) ?>" data-taskname="<?= $task->tk_name ?>" data-duration="<?= $task->tk_duration ?>" data-taskid="<?= base64_encode($task->id) ?>" data-action="edittask" data-toggle="tooltip" data-original-title="Edit Task"></i>
                              </div>
                              <?php if($Phase['Status'] == 1) : ($task->status) ? $checked="Checked" : $checked=""; ?>
                                <input type="checkbox" <?= @$checked ?> name="taskcheck" data-taskid="<?= base64_encode($task->id) ?>" data-taskname="<?= $task->tk_name 
                               ?>"/>
                             <?php endif; ?>
                              <span class="text"><?= $task->tk_name ?></span>
                              <?php
                              
                                ($task->status_date) ? $task_complete_date  = new DateTime($task->status_date) : $task_complete_date = new DateTime("1890-01-01"); 

                                $datesplit            = explode(' To ', $task->tk_duration);
                                $start_date           = new DateTime($datesplit[0]);
                                $end_date             = new DateTime($datesplit[1]);
                                $curr_date            = new DateTime("now");

                                $st_end_interval      = $start_date->diff($end_date);
                                $cur_end_interval     = $end_date->diff($curr_date);
                                
                                $date_remain          = $cur_end_interval->format('%a'); 
                                $realdate             = $st_end_interval->format('%a'); 

                                //print $task_complete_date->format('Y-m-d')."<br/>".$end_date->format('Y-m-d');
                                if(($task->status == 1) && (($end_date->format('Y-m-d') > $task_complete_date->format('Y-m-d')) || ($end_date->format('Y-m-d') == $task_complete_date->format('Y-m-d'))))
                                  print "<small class='label label-success bg-green'><i class='fa fa-clock-o'></i> $task->tk_duration</small>";
                                else if(($task->status == 1) && ($end_date->format('Y-m-d') < $task_complete_date->format('Y-m-d')))
                                  print "<small class='label label-danger '><i class='fa fa-clock-o'></i> $task->tk_duration</small>";
                                
                                else if(($task->status == 0) && ($end_date->format('Y-m-d') < $curr_date->format('Y-m-d')))
                                  print "<small class='label label-danger'><i class='fa fa-clock-o'></i> $task->tk_duration ($date_remain Day(s) Past)</small>";
                                else if(($task->status == 0) && $date_remain < 15)
                                  print "<small class='label label-warning'><i class='fa fa-clock-o'></i> $task->tk_duration ($date_remain Day(s) More)</small>";
                                else 
                                  print "<small class='label label-default'><i class='fa fa-clock-o'></i> $task->tk_duration ($date_remain Day(s) More)</small>";
                              ?>
                              
                            </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <!-- Main Task -->
                            </ul>
                          </div>
                        </div><!-- /.row -->
                      </div><!-- ./box-body -->
                      <div class="box-footer">
                        <div class="">
                          <div class="timeline-footer">
                            <?php 
                              $report_res = $this->Model_Project->ret_artisan_report($Department,$Phase['Id']);
                              if(!empty($report_res)):
                            ?>
                            <a data-phaseid="<?= base64_encode($Phase['Id']) ?>" data-department="<?= $Department ?>" class="btn btn-success btn-xs viewreport">View Report</a>
                            <?php
                              endif;
                            ?>
                          </div>
                        </div><!-- /.row -->
                      </div><!-- /.box-footer -->
                    </div>
                  </div>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
                <!-- END timeline item -->
                <?php endforeach; ?>

                <li>
                  <i class="fa fa-clock-o bg-gray"></i>
                </li>
              </ul>
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

 