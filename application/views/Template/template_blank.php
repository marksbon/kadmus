
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="o">
          <h1 class="pull-left">
            Approvals
          </h1>
          <?php 
            if(isset($_SESSION['success']) && !empty($_SESSION['success'])) {
          ?>
          <div class="pull-right">
            <div class="alert alert-success alert-dismissable gh">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    <i class="fa fa-times"></i>
                </button>
                 <?= "<em>".$_SESSION['success']."</em>"; unset($_SESSION['success']); ?>
            </div>
          </div>
          <?php 
                }
            if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
          ?>
          <div class="pull-right">
            <div class="alert alert-danger alert-dismissable gh">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    <i class="fa fa-times"></i>
                </button>
                <?php 
                    if(validation_errors())
                        print "<em>".validation_errors()."</em>";
                    else {
                        print "<em>".$_SESSION['error']."</em>";
                        unset($_SESSION['error']);
                        }
                ?>
            </div>
          </div>
          <?php
                }
          ?>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <form action="" method="Post">
                <div class="box-header with-border">
                  <h4 class="pull-left">Blank Template</h4>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                
                </div><!-- ./box-body -->
                
                <div class="box-footer">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-success pull-right" name="stock_add" value="Save" />
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

 