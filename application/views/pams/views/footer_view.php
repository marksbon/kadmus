   



    <!-- About Us Modal -->
            <div class="modal fade" id="AboutUs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog1">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel"><i class="fa fa-sitemap"></i> About Us</h4>
                    </div>
                    <div class="row">    
                      <div class="col-sm-5 ">
                        <img src="<?php echo base_url(); ?>resources/dist/img/logo.png" height="150" width="150" alt="User Image" style="margin-left: 7%;"/>
                      </div><!-- /.col -->
                      <div class="col-sm-7 pull-left">
                        <b>WissPri Technologies Limited</b><br/>
                        <b>P O Box YK 12, Kanda-Accra</b><br/>
                        <b>Tel 1: (+233)541-786-220</b><br>
                        <b>Tel 2: (+233)541-786-220</b><br>
                        <b>E-mail:</b> info@wisspri.com<br/>
                        <b>Website:<a href="http://www.wisspri.com" target="_blank">www.wisspri.com</a></b>
                      </div><!-- /.col -->
                    </div>
                    <div class="modal-footer"></div>
                  </div>
                </div>
              </div>
    <!-- Change Password Modal -->
            <div class="modal fade" id="ChangePwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog1">
                  <div class="modal-content1">
                    <div class="modal-header1">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                    </div>
                    <form action="Access/Update_Password" method="post">
                      <div class="modal-body">
                        <div class="form-group has-success">
                          <label class="control-label" for="inputWarning">
                            <i class="fa fa-user"></i> Current Password
                          </label>
                          <input type="password" class="form-control" id="inputWarning" placeholder="Enter ..." 
                                 name="CurrentPwd" required/>
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputWarning">
                            <i class="fa fa-user"></i> New Password
                          </label>
                          <input type="password" class="form-control" id="inputWarning" placeholder="Enter ..." 
                                 name="NewPwd" required/>
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputWarning">
                            <i class="fa fa-user"></i> Confirm Password
                          </label>
                          <input type="password" class="form-control" id="inputWarning" placeholder="Enter ..." 
                                 name="ConfirmPwd" required/>
                        </div>
                        <input type="hidden" name="employee_id" value="<?php echo $_SESSION['employee_id']; ?>">      
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="Update_Pwd"><i class="fa fa-check-square-o"></i> Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <?php 
                  $this->load->model('events_model');
                  $session_date = $this->events_model->retrieve_session();
                  if(!empty($session_date)) {
                    #code
                    foreach ($session_date as $key => $session) {
                      # code...
                      $session_date  = $session;
                    }
                  }
                  
              ?>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Session :</b>
           <b><a href="" data-toggle="modal" data-target="#AboutUs"><?php echo $session_date; ?></a></b> |
           <b>Current Time </b>
           <b><il id="txt"></il></b> |

        </div>
        <strong>Welcome To <a href="" data-toggle="modal" data-target="#AboutUs">Performance Attendance Management System (PAMS) V1.0 </a> | Note  : <a>Software Licenced</a></strong>
      </footer>
    </div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url(); ?>resources/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>resources/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url(); ?>resources/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url(); ?>resources/plugins/fastclick/fastclick.min.js'></script>
    
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>resources/dist/js/app.min.js" type="text/javascript"></script>
    <!-- Chosen App -->
    <script src="<?php echo base_url(); ?>resources/dist/js/chosen.jquery.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>resources/dist/js/demo.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>resources/dist/jGrowl/jquery.jgrowl.js"></script>
    
    <!-- InputMask -->
    <script src="<?php echo base_url(); ?>resources/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>resources/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>resources/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    
    <!-- Text Editor -->
    <script src="<?php echo base_url(); ?>resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

    <!--Datatables -->
    <script src="<?php echo base_url(); ?>resources/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>resources/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>resources/dist/js/jquery.plugin.js"></script>
    <script src="<?php echo base_url(); ?>resources/dist/js/jquery.datepick.js"></script>

    <script type="text/javascript">
      /*$('document').ready(function(){
          $('#reset').click(function(){
            $('#newpwd').val("changeMe");
          });
        });*/
    </script>

    <script>
      $(function() {
        $('#popupDatepicker').datepick({dateFormat: 'DD MMMM dd, yyyy'});
        $('#inlineDatepicker').datepick({onSelect: showDate});
      });

      function showDate(date) {
        alert('The date chosen is ' + date);
      }
    </script>

        <!-- Datatables script -->
        <script type="text/javascript">
            $(function () {
                $("#example1").dataTable();
                $("#example2").dataTable({
                  "bPaginate": true,
                  "bLengthChange": false,
                  "bFilter": false,
                  "bSort": true,
                  "bInfo": true,
                  "bAutoWidth": false
                });
                $("#exampled").dataTable({
                  "bPaginate": true,
                  "bLengthChange": false,
                  "bFilter": false,
                  "bSort": true,
                  "bInfo": true,
                  "bAutoWidth": false
                });
            });
        </script>
     <!--/Datatables -->

    <!-- Page Script -->
        <script>
          $(function () {
            //Add text editor
            $("#compose-textarea").wysihtml5({"link":false, "image":false, });
             $("#compose-textarea-initiative").wysihtml5({"link":false, "image":false, });
            
          });
        </script>

    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>

<script>
        $(function() {
            $('.tooltip').tooltip();  
      $('.tooltip-left').tooltip({ placement: 'left' });  
      $('.tooltip-right').tooltip({ placement: 'right' });  
      $('.tooltip-top').tooltip({ placement: 'top' });  
      $('.tooltip-bottom').tooltip({ placement: 'bottom' });

      $('.popover-left').popover({placement: 'left', trigger: 'hover'});
      $('.popover-right').popover({placement: 'right', trigger: 'hover'});
      $('.popover-top').popover({placement: 'top', trigger: 'hover'});
      $('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});

      $('.notification').click(function() {
        var $id = $(this).attr('id');
        switch($id) {
          case 'notification-sticky':
            $.jGrowl("20 nails left !", { sticky: true });
          break;

          case 'notification-header':
            $.jGrowl("You Have 13 awaiting Approval", { header: 'Important' });
          break;

          default:
            $.jGrowl("Vehicle Licence expiry!");
          break;
        }
      });
        });
        </script>

       <!-- Chosen --> 
        <script type="text/javascript">
          var config = {
            '.chosen-select'           : {width:"95%"},
            '.chosen-select-deselect'  : {allow_single_deselect:true},
            '.chosen-select-no-single' : {disable_search_threshold:10},
            '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
            '.chosen-select-width'     : {width:"95%"}
          }
          for (var selector in config) {
            $(selector).chosen(config[selector]);
          }
        </script>
        
  </body>
</html>