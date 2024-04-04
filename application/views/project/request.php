
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">
            Requests
          </h1>
      </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <a href="#" data-toggle="modal" data-target="#site" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-plus"></i> New Request</a>
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-reorder"></i> Menu</h3>
                  <div class="box-tools">
                    <!--<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#inprogress"><i class="fa fa-inbox"></i> Pending<span class="label label-primary pull-right"><?= sizeof(@$Pending_Req)?></span></a></li>
                    <li><a href="#saved"><i class="fa fa-database"></i> Saved <span class="label label-default pull-right"><?= sizeof(@$Saved_Req)?></span></a></li>
                    <li><a href="#processed"><i class="fa fa-file-text-o"></i> All Processed <span class="label label-success pull-right"><?= sizeof(@$Processed_Req)?></span></a></li>
                    <li><a href="#rejected"><i class="fa fa-file-text-o"></i> Rejected <span class="label label-danger pull-right"><?= sizeof(@$Rejected_Req)?></span></a></li>
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
                <div class="box-header with-border">
                  <h3 class="box-title">Inbox</h3>
                  <div class="box-tools pull-right"></div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
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
                    <div class="tab-content">
                      <div class="tab-pane active" id="inprogress">
                        <table class="table table-hover table-striped">
                          <tbody>
                            <?php
                              if(!empty($Pending_Req)) :
                                foreach ($Pending_Req as $pendingReq) :
                            ?>
                            <tr>
                              <td><input type="checkbox"></td>
                              <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                              <td class="mailbox-name"><a href="#" data-toggle="modal" data-target="#preview"><?= $this->session->fullname ?></a></td>
                              <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                              <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                              <td class="mailbox-date">28 mins ago</td>
                            </tr>
                            <?php
                                endforeach;
                              endif;
                            ?>
                          </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.mail-box-messages -->
                      <div class="tab-pane" id="saved">
                        <table class="table table-hover table-striped">
                          <tbody>
                            <?php
                              if(!empty($Saved_Req)) :
                                foreach ($Saved_Req as $savedReq) :
                            ?>
                            <tr>
                              <td><input type="checkbox"></td>
                              <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                              <td class="mailbox-name"><a href="#" data-toggle="modal" data-target="#preview"><?= $this->session->fullname ?></a></td>
                              <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                              <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                              <td class="mailbox-date">28 mins ago</td>
                            </tr>
                            <?php
                                endforeach;
                              endif;
                            ?>
                          </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.mail-box-messages -->
                      <div class="tab-pane" id="processed">
                        <table class="table table-hover table-striped">
                          <tbody>
                            <tr>
                              <td><input type="checkbox"></td>
                              <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                              <td class="mailbox-name"><a href="#" data-toggle="modal" data-target="#preview"><?= $this->session->fullname ?></a></td>
                              <td class="mailbox-subject"><b>Processed</b> - Trying to find a solution to this problem...</td>
                              <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                              <td class="mailbox-date">28 mins ago</td>
                            </tr>
                          </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.mail-box-messages -->
                      <div class="tab-pane" id="rejected">
                        <table class="table table-hover table-striped">
                          <tbody>
                            <tr>
                              <td><input type="checkbox"></td>
                              <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                              <td class="mailbox-name"><a href="#" data-toggle="modal" data-target="#preview"><?= $this->session->fullname ?></a></td>
                              <td class="mailbox-subject"><b>Rejected</b> - Trying to find a solution to this problem...</td>
                              <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                              <td class="mailbox-date">28 mins ago</td>
                            </tr>
                          </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.mail-box-messages -->
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                      <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
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
                </div>
              </div><!-- /. box -->
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

