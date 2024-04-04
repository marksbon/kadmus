
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">Projects<small>Manage</small></h1>
          <ol class="breadcrumb">
            <li><a href="../Dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-road"></i> All Projects</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <a href="#new" data-toggle="tab" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-plus"></i> New Project</a>
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title" style="font-size:1.2em;color:#009688;"><i class="fa fa-reorder"></i> Menu</h3>
                  <div class="box-tools">
                    <!--<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#new" data-toggle="tab"><i class="fa fa-plus"></i> New Project</a></li>
                    <li class="active"><a href="#inprogress" data-toggle="tab"><i class="fa fa-inbox text-blue"></i> In-Progress <span class="label label-primary pull-right"><?= sizeof($Inprogress)?></span></a></li>
                    <li><a href="#completed" data-toggle="tab"><i class="fa fa-envelope-o text-green"></i> Completed <span class="label label-success pull-right"><?= sizeof($completed)?></span></a></li>
                    <li><a href="#incomplete" data-toggle="tab"><i class="fa fa-envelope-o text-red"></i> In-Completed <span class="label label-danger pull-right"><?= sizeof($Incomplete)?></span></a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Labels</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border"></div><!-- /.box-header -->
                <div class="box-body">
                  <div class="tab-content">
                    <div class="tab-pane active row" id="inprogress">
                      <?php if(!empty($Inprogress)) :?>
                        <?php foreach($Inprogress As $proj_inprogress) :?>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <a href="Details/<?= urlchange($proj_inprogress['Codename']) ?>">
                            <div class="info-box bg-white">
                              <div class="info-box-content" style="margin-left:0px">
                                <span class="info-box-number"><b><?= substr($proj_inprogress['Codename'],0,26); ?></b></span>
                                <span class="info-box-text"><?= $proj_inprogress['TotalTask'] ?> Task(s) Created</span>
                                <div class="progress progress-xs progress-striped active" style="height:7px;">
                                  <div class="progress-bar progress-bar-primary" style="width: <?= $proj_inprogress['Percentage'] ?>%;"></div>
                                </div>
                                <span class="progress-description">
                                  <?= $proj_inprogress['Percentage'] ?>% Completed
                                </span>
                              </div><!-- /.info-box-content -->
                            </div><!-- /.info-box -->
                            </a>
                          </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>
                    <div class="tab-pane row" id="completed">
                      <?php if(!empty($completed)) :?>
                        <?php foreach($completed As $proj_complete) :?>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <a href="Details/<?= urlchange($proj_complete['Codename']) ?>">
                            <div class="info-box bg-white">
                              <div class="info-box-content" style="margin-left:0px">
                                <span class="info-box-number"><b><?= substr($proj_complete['Codename'],0,26); ?></b></span>
                                <span class="info-box-text"><?= $proj_complete['TotalTask'] ?> Task(s) Created</span>
                                <div class="progress progress-xs progress-striped active" style="height:7px;">
                                  <div class="progress-bar progress-bar-success" style="width: <?= $proj_complete['Percentage'] ?>%;"></div>
                                </div>
                                <span class="progress-description">
                                  <?= $proj_complete['Percentage'] ?>% Completed
                                </span>
                              </div><!-- /.info-box-content -->
                            </div><!-- /.info-box -->
                            </a>
                          </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>

                    <div class="tab-pane row" id="incomplete">
                      <?php if(!empty($Incomplete)) :?>
                        <?php foreach($Incomplete As $proj_incomplete) :?>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <a href="Details/<?= urlchange($proj_incomplete['Codename']) ?>">
                            <div class="info-box bg-white">
                              <div class="info-box-content" style="margin-left:0px">
                                <span class="info-box-number"><b><?= substr($proj_incomplete['Codename'],0,26); ?></b></span>
                                <span class="info-box-text"><?= $proj_incomplete['TotalTask'] ?> Task(s) Created</span>
                                <div class="progress progress-xs progress-striped active" style="height:7px;">
                                  <div class="progress-bar progress-bar-danger" style="width: <?= $proj_incomplete['Percentage'] ?>%;"></div>
                                </div>
                                <span class="progress-description">
                                  <?= $proj_incomplete['Percentage'] ?>% Completed
                                </span>
                              </div><!-- /.info-box-content -->
                            </div><!-- /.info-box -->
                            </a>
                          </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>

                    <div class="tab-pane" id="new">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title"></div>
                              <div class="x_content">
                                <form action="Register_Project" id="myForm" role="form" data-toggle="validator" method="post" enctype="multipart/form-data">
                                <!-- SmartWizard html -->
                                <div id="smartwizard">
                                  <ul>
                                    <li><a href="#step-1">Step 1<br /><small>Terms & Agreement - Important Notice </small></a></li>
                                    <li><a href="#step-2">Step 2<br /><small>Project's Basic Information</small></a></li>
                                    <li><a href="#step-3">Step 3<br /><small>Create Phases - Divisions Within Project</small></a></li>
                                    <li><a href="#step-4">Step 4<br /><small>Document(s) Upload - All Relevant Documents</small></a></li>
                                  </ul>
                                  <div style="height:500px !important">
                                    <div id="step-1" class="">
                                      <div id="form-step-0" role="form">
                                        <p style="margin-top:10px">This guide is aimed at helping the user in the creation of a new project. In creating a new project, there are some important things to be noticed. This whole guide have been divided into three main sections. This step contains important notice the user must observe during the creation.
                                        
                                        <div class="direct-chat-msg">
                                          <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">Step 1</span>
                                          </div><!-- /.direct-chat-info -->
                                          <div class="direct-chat-text">
                                            This step contains important notice the user must observe during the creation.
                                          </div><!-- /.direct-chat-text -->
                                        </div>
                                        <div class="direct-chat-msg">
                                          <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">Step 2</span>
                                          </div><!-- /.direct-chat-info -->
                                          <div class="direct-chat-text">
                                            Contains the basic project informations such as <b>Project Name</b>, <b>Project Codename</b> for the Project, <b>Estimated Budget</b> for the project, <b>Project Duration</b> or starttime and completion time for the project. Location of the site, Client Name,
                                            This Step contain the Basic project informations thus, project name , code name, project code name, estimated burdget, project duration ,location, client , summry and project documentation.</br>
                                            All documents or file should not exceed 2mb,Risk Accessment file should be name as such. (eg Risk Accessment)
                                          </div><!-- /.direct-chat-text -->
                                        </div>
                                        <div class="direct-chat-msg">
                                          <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">Step 3</span>
                                          </div><!-- /.direct-chat-info -->
                                          <div class="direct-chat-text">
                                            Contain the Phases or Divisions Within The Project in creation and their Speicifed Duration; Time of Commence and Time cf Completion.
                                          </div><!-- /.direct-chat-text -->
                                        </div>
                                        <div class="direct-chat-msg">
                                          <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">Step 4</span>
                                          </div><!-- /.direct-chat-info -->
                                          <div class="direct-chat-text">
                                            Contains the upload of all relevant documents relating to the project in creation.<p>Project File(s) or Documents may contain all other file format <strong>EXCEPT VIDEO FILE</strong> and file size must not <strong>Exceed 10MB</strong>. All other Project File(s) may have different filename <strong>EXCERPT FOR RISK ASSESSMENT FILE Which should be named as such.</strong> Example <strong> RISK ASSESSMENT FILE should be named as riskassessment</strong> Risk Assessment file should be ma,e or file should not exceed 2mb,Risk Accessment file should be name as such. (eg Risk Accessment)</p>
                                          </div><!-- /.direct-chat-text -->
                                        </div>
                                      </div>
                                    </div>
                                    <div id="step-2" class="" style="margin-top:10px;">
                                      <div id="form-step-1" role="form" data-toggle="validator">
                                        <div class="form-group col-md-4">
                                          <label for="email">Project Name </label>
                                          <input type="text" class="form-control" name="proj_name" placeholder="Kwame Nkrumah Circle Interchange" data-error="Please Enter A Project Name" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="email">Project Code Name</label>
                                          <input type="text" class="form-control" name="proj_code" placeholder="K.N Circle Interchange" data-error="Please Enter A Project Code" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="email">Estimated Budget</label>
                                          <input type="text" class="form-control" name="budget" placeholder="$5000" data-error="Enter Amount" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="email">Duration / Time </label>
                                          <input type="text" class="form-control 2waydate" name="duration" data-error="Select A Date" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label>Region </label>
                                          <select class="form-control " name="region" data-error="Please Select A Region" required>
                                            <option label="----- Select One ------"></option>
                                            <option>Greater Accra Region</option>
                                            <option>Central Region</option>
                                            <option>Western Region</option>
                                            <option>Eastern Region</option>
                                            <option>Northen Region</option>
                                            <option>Ashanti Region</option>
                                            <option>Volta Region</option>
                                            <option>Upper East Region</option>
                                            <option>Upper West Region</option>
                                            <option>Brong Ahafo Region</option>
                                          </select>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label>Site Location</label>
                                          <input type="text" class="form-control"  placeholder="Effiduase"  name="location" data-error="Please Enter A Location" required/>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label>Client's Name</label>
                                            <input type="text" class="form-control"  placeholder="Ministry Of Finance"  name="client" data-error="Enter Client's Name" required/>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                          <div class="form-group">
                                            <label>Project Document(s)</label>
                                            <input type="file" multiple class="form-control" name="proj_doc" disabled />
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                        <div class="form-group col-md-8">
                                          <label>Summary</label>
                                          <textarea rows="5" class="form-control" style="width:100%;" placeholder="Description" name="desc" required/></textarea>
                                          <div class="help-block with-errors"></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="step-3" class="">
                                      <div id="form-step-2" role="form" data-toggle="validator">
                                        <div class="box box-default phasebox" style="margin-top:15px;width:100%">
                                          <div class="box-header with-border">
                                            <h3 class="box-title">Phase Name</h3>
                                            <div class="box-tools pull-right">
                                              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                            </div>
                                          </div><!-- /.box-header -->
                                          <div class="box-body" style="display: block;">
                                            <div class="form-group col-md-4">
                                              <label for="email">Phase Name </label>
                                              <input type="text" class="form-control" name="phase_name[]" placeholder="Phase One" data-error="Please Enter A Phase Name" required/>
                                              <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label for="email">Durations / Time </label>
                                              <input type="text" class="form-control 2waydate" name="phaseduration[]" data-error="Select A Date" required/>
                                              <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label>Add Artisan(s) </label>
                                              <select class="form-control select2"  multiple="multiple" name="artisan[0][]" data-placeholder="--- Select One ---" data-error="Please Add Department(s)" required>
                                                <option label="----- Select ------"></option>
                                                <option>Survey Department</option>
                                                <option>Electrical Department</option>
                                                <option>Mechanical Department</option>
                                                <option>ICT Department</option>
                                              </select>
                                              <div class="help-block with-errors"></div>
                                            </div>
                                          </div><!-- /.box-body -->
                                        </div>
                                        <button type="button" class="btn btn-primary btn-xs addnewphase pull-right">Add New</button>
                                      </div>
                                    </div>
                                    <div id="step-4" class="" style="margin-top:10px;">
                                      <div id="form-step-3" role="form" data-toggle="validator">
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label>Risk Assessment File</label>
                                            <input type="file" multiple class="form-control" name="risk_doc" accept="document/*" />
                                            <div class="help-block with-errors"></div>
                                          </div>
                                          <div class="form-group">
                                            <label>Other File(s)</label>
                                            <input type="file" multiple class="form-control" name="proj_doc[]" multiple />
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- End SmartWizard Content -->
                                </form>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer no-padding"></div>
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

        <!-- Main content 
        <section class="content">
        </section> /.content -->
      </div><!-- /.content-wrapper -->
      
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://wisspri.com" >WissPri Technologies Limited</a>.</strong> All rights reserved.
      </footer>

 