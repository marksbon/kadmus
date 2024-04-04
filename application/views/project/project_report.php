
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">
            New Report

          </h1>
          <small class="pull-right"><a href="<?= base_url().'Project/Details/'.$projectname ?>" class="btn btn-xs btn-primary"><i class="fa fa-mail-reply"></i> Back To Project</a></small>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <form action="<?= base_url().'Project/Make_Report'?>" method="Post">
                <input type="hidden" name="resulturl" />
                <input type="hidden" name="redirecturl" value="<?= base_url().'Project/Details/'.$projectname ?>" />
                <input type="hidden" name="phaseid" value="<?= $phaseid ?>">
                <div class="box-header with-border"></div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="control-label col-md-3" >
                      <label> Project CodeName</label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="projectname" value="<?= urlunchange($projectname) ?>" required readonly />
                      </div><!-- /.input group -->
                    </div>
                    <div class="control-label col-md-3" >
                      <label> Phase Name</label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="phasename" value="<?= urlunchange($phasename) ?>" required readonly />
                      </div><!-- /.input group -->
                    </div>
                    <div class="control-label col-md-3">
                      <label> Department</label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="department" value="<?= urlunchange($department) ?>" required readonly/>
                      </div><!-- /.input group -->
                    </div>
                    <div class="control-label col-md-3">
                      <label> Date </label>
                      <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control" name="dateofreport" value="<?php echo gmdate("l F j, Y"); ?>" required readonly/>
                      </div><!-- /.input group -->
                    </div>
                    <div class="control-label col-md-12" style="margin-top:15px">
                      <label> Select Task </label>
                      <div>
                        <select class="form-control" name="taskname" required>
                          <option label="---- Select Task To Report ----"></option>
                          <?php
                            $artisan = urlunchange($department);
                            $rule = base64_decode(substr($phaseid, 80));
                            $task = $this->Model_Project->ret_artisan_task($artisan,$rule);

                            foreach($task As $taskinfo) :
                          ?>
                          
                            <option value="<?= $taskinfo->id.'~'.$taskinfo->tk_name ?>"><?= $taskinfo->tk_name ?></option>

                          <?php endforeach; ?>
                        </select>
                      </div><!-- /.input group -->
                    </div>
                    <div id="composediv" class="control-label col-md-12" style="margin-top:15px">
                      <label> Main Report Text </label>
                        <textarea name="report" class="compose-textarea" style="width:100%;height:300px;"></textarea>
                    </div>
                    <div id="composediv" class="control-label col-md-12" style="margin-top:15px">
                      <div class="col-md-8" style="padding-left:0px">
                        <label style="color:red !important"> Risk Identified / Notice</label>
                        <textarea name="riskreport" class="compose-textarea" style="width:100%;height:200px;"></textarea>
                      </div>
                      <div class="col-md-4">
                        <label>Add Attachment(s) <i class="fa fa-paperclip"></i></label><br/>
                        <label>Image Upload</label>
                          <input id="imguploadclick" type="file" accept="image/*" multiple name="imgreport[]" style="display:none" />
                          <img id="imgupload" src="<?= base_url().'/resources/theme/img/imgupload.png' ?>"  style="padding:20px 5px 0px 5px;cursor: pointer">
                          <label>Audio Upload</label>
                          <input id="audiouploadclick" type="file" accept="audio/*" name="audioreport" style="display:none" />
                          <img id="audioupload" src="<?= base_url().'/resources/theme/img/audioupload.png' ?>" style="padding:20px 5px 0px 5px;cursor: pointer">
                          <label>Video upload</label>
                          <input id="videouploadclick" type="file" accept="video/*" name="videoreport" style="display:none" />
                          <img id="videoupload" src="<?= base_url().'/resources/theme/img/videoupload.png' ?>" style="padding:20px 05px 0px 5px;cursor: pointer">
                        <!--<fieldset>
                          <label>Image upload <i class="fa fa-paperclip"></i></label>
                          <input type="file" name="imgreport" style="display:none" />
                          <img src="<?= base_url().'/resources/theme/img/imgupload.png' ?>" multiple style="padding:20px 0px 0px 15px;cursor: pointer">
                        </fieldset>
                        <fieldset>
                          <label>Audio upload <i class="fa fa-paperclip"></i></label>
                          <input type="file" name="imgreport" style="display:none" />
                          <img src="<?= base_url().'/resources/theme/img/audioupload.png' ?>" multiple style="padding:20px 0px 0px 15px;cursor: pointer">
                        </fieldset>
                        <fieldset>
                          <label>Video upload <i class="fa fa-paperclip"></i></label>
                          <input type="file" name="imgreport" style="display:none" />
                          <img src="<?= base_url().'/resources/theme/img/videoupload.png' ?>" multiple style="padding:20px 0px 0px 15px;cursor: pointer">
                        </fieldset>-->
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="box-footer">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-success pull-right" name="save_report"><i class="fa fa-database"></i> Save Report </button>
                    <a href="<?= base_url().'Project/Details/'.$projectname?>" class="btn btn-primary"><i class="fa fa-mail-reply"></i> Back To Project</a>
                  </div>
                  <div class="col-md-4"></div>
                  <!-- /.row -->
                </div><!-- /.box-footer -->
                </form>
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

 