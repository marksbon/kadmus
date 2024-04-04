     <?php require_once "modals.php"; ?>
     <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg">
        
      </div>
    </div><!-- ./wrapper -->
   
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>resources/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>resources/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Include jQuery Validator plugin -->
    <script src="<?php echo base_url(); ?>resources/plugins/bootstrap/validator/validator.min.js"></script>
    <!-- Ripples -->
    <script src="<?php echo base_url(); ?>resources/theme/js/ripples.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>resources/theme/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>resources/theme/js/demo.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>resources/plugins/select2/select2.full.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url(); ?>resources/plugins/iCheck/icheck.min.js"></script>
    <!-- SlimScroll  -->
    <script src=""></script>
    <!-- Date Picker -->
    <script src="<?php echo base_url(); ?>resources/plugins/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/plugins/datepicker/daterangepicker.js"></script>
     <!-- DataTables -->
    <script src="<?php echo base_url(); ?>resources/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url(); ?>resources/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo base_url(); ?>resources/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo base_url(); ?>resources/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Customize -->
    <script src="<?php echo base_url(); ?>resources/theme/added/jquery.smartWizard.js"></script>
    
    <!-- Notification -->
    <script type="text/javascript" src="<?php print base_url(); ?>resources/plugins/notify/pnotify.core.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>resources/plugins/notify/pnotify.buttons.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>resources/plugins/notify/pnotify.nonblock.js"></script>
    <!-- Page Loading Gif -->
    <script type="text/javascript">
      $(window).load(function() {
        $(".pageloader").fadeOut("slow");
      });
    </script>
    <!-- Page Loading Gif -->
    <!-- Retain Tab Active -->
    <script type="text/javascript">
      $(document).ready(function() {
          if(location.hash) {
              $('a[href=' + location.hash + ']').tab('show');
          }
          $(document.body).on("click", "a[data-toggle]", function(event) {
              location.hash = this.getAttribute("href");
          });
      });
      $(window).on('popstate', function() {
          var anchor = location.hash || $("a[data-toggle=tab]").first().attr("href");
          $('a[href=' + anchor + ']').tab('show');
      });
    </script>
    <!-- Retain Tab Active -->
    <!-- General Functions -->
    <script type="text/javascript">
      /************ Document Ready *********************/
      $(document).ready(function(){
        /************ Modal Functions *********************/
          var resulturl = location.href;
          $('[name="resulturl"]').val(resulturl);
          /****** Normal Delete Btn ******/
          $(".deletebtn").click(function(){ // Click to only happen on announce links
            $("#form_url").attr('action', $(this).data('formurl'));
            $("#deleteId").val($(this).data('delid'));
            $("#deletename").text($(this).data('delname'));
            $('[name="resulturl"]').val(resulturl);
            $('#deletemodal').modal('show');
          });
          /****** Normal Delete Btn ******/
          /****** Table Delete Btn  ******/
          $(".table").on("click", ".deletebtn", function(){
            $("#form_url").attr('action', $(this).data('formurl'));
            $("#deleteId").val($(this).data('delid'));
            $("#deletename").text($(this).data('delname'));
            $('#deletemodal').modal('show');
          });
          /****** Table Delete Btn  ******/
          /****** User Reset Btn    ******/
          $(".resetbtn").click(function(){ 
            $("#resetname").val($(this).data('username'));
            $("#resetId").val($(this).data('userde'));
            $('#resetmodal').modal('show');
          });
          /****** User Reset Btn    ******/
          /****** New Project Btn   ******/
          $(".newproject").click(function(){ 
            $('#newproject').modal('show');
          });
          /****** New Project Btn   ******/
          /****** Product Details Btn  ***/
          $(".prod-details-mod").click(function(){ 
            $("#prodid").text($(this).data('productid'));
            $("#prodcategory").text($(this).data('prodcategory'));
            $("#prodname").text($(this).data('prodname'));
            $("#proddesc").text($(this).data('proddesc'));
            $("#prodloc").text($(this).data('prodloc'));
            $("#produnitqty").text($(this).data('produnitqty'));
            $("#produnitprice").text($(this).data('produnitprice'));
            $("#prodcurrqty").text($(this).data('prodcurrqty'));
            $("#prodexpiry").text($(this).data('prodexpiry'));
            $('#managestock-details').modal('show');
          });
          /****** Product Details Btn  ***/
          /****** Edit Supplier Btn  *****/
          $("#allsuppliers").on("click", ".edit-sup-btn", function(){
            $('[name="edit_sup_id"]').val($(this).data('sup_id'));
            $('[name="edit_sup_name"]').val($(this).data('name'));
            $('[name="edit_sup_tel1"]').val($(this).data('tel1'));
            $('[name="edit_sup_tel2"]').val($(this).data('tel2'));
            $('[name="edit_sup_addr"]').val($(this).data('addr'));
            $('[name="edit_sup_email"]').val($(this).data('email'));
            $('[name="edit_sup_loc"]').val($(this).data('location'));
            $('#edit-supplier').modal('show');
          });
          /****** Edit Supplier Btn  *****/
          /****** Add A Task       ******/
          $(".addtask").click(function(){ 
            $('[name="phaseid"]').val($(this).data('phase'));
            $('[name="department"]').val($(this).data('department'));
            $('[name="action"]').val($(this).data('action'));
            $('[name="resulturl"]').val(resulturl);
            $('#taskmodal').modal('show');
          });
          /****** Add A Task       ******/
          /** Edit An Artisan Task  ******/
          $(".edittask").click(function(){ 
            $('[name="department"]').val($(this).data('department'));
            $('[name="phaseid"]').val($(this).data('phase'));
            $('[name="taskname"]').val($(this).data('taskname'));
            $('[name="taskduration"]').val($(this).data('duration'));
            $('[name="taskid"]').val($(this).data('taskid'));
            $('[name="action"]').val($(this).data('action'));
            $('[name="resulturl"]').val(resulturl);
            $('#taskmodal').modal('show');
          });
          /** Edit An Artisan Task  ******/
          /****** Task Completed    ******/
          $('input[name="taskcheck"]').on('ifChecked', function(event){
            $('#taskname').text($(this).data('taskname') + " Has Been Completed ....");
            $('[name="taskid"]').val($(this).data('taskid'));
            $('[name="status"]').val('1');
            $('[name="resulturl"]').val(resulturl);
            $('#taskcompletemodal').modal('show');
          });

          $('input[name="taskcheck"]').on('ifUnchecked', function (event) {
            $('#taskname').text($(this).data('taskname') + " Has Not Been Completed ....");
            $('[name="taskid"]').val($(this).data('taskid'));
            $('[name="status"]').val('0');
            $('[name="resulturl"]').val(resulturl);
            $('#taskcompletemodal').modal('show');
          });

          /****** Task Completed    ******/
          /***** Add Project Report  *****
          $(".addreport").click(function(){ 
            $('[name="projectname"]').val($(this).data('project'));
            $('[name="department"]').val($(this).data('department'));
            $('[name="phaseid"]').val($(this).data('phase'));
            $('[name="taskname"]').val($(this).data('taskname'));
            $('[name="taskid"]').val($(this).data('taskid'));
            $('[name="action"]').val($(this).data('action'));
            $('[name="resulturl"]').val(resulturl);
            /**** Resetting the Compose Area ****
            document.getElementById('composediv').innerHTML='<label> Report </label><textarea name="report" id="composetext" class="compose-textarea" style="width:100%;height:350px;color:black"></textarea>';
            $(".compose-textarea").wysihtml5();
            /**** Resetting the Compose Area ****
            $('#projectreport').modal('show');
          });
          /***** Add Project Report  *****/
          /***** View Task Report  *****/
          $(".viewreport").click(function(){ 
            var phaseid = $(this).data('phaseid');
            var department = $(this).data('department');
            $.ajax({
              type: 'POST',
              url: '<?= base_url()."Project/Get_Report/"; ?>',
              data: {phaseid: phaseid,department: department},
              success: function(response)
              {
                if(response)
                {
                  document.getElementById('reportbody').innerHTML=response;
                }
                else
                {
                  alert("No Report Found");
                }
              }   
            });
            $("#form-url").attr('action','../../Project/Update_Report');
            $("#heading").text('Report Details');
            $('[name="phaseid"]').val($(this).data('reportid'));
            $('[name="projectname"]').val($(this).data('project'));
            $('[name="department"]').val($(this).data('department'));
            $('[name="resulturl"]').val(resulturl);
            $('#projectreport').modal('show');
          });
          /***** View Task Report  *****/
          /***** View Risk Assessment Report  *****/
          $("#riskassessrep").click(function(){ 
            var proj_code = $(this).data('project');
            $.ajax({
              type: 'POST',
              url: '<?= base_url()."Project/Get_Risk_Report/"; ?>',
              data: {proj_code: proj_code},
              success: function(response)
              {
                if(response)
                {
                  document.getElementById('riskrepbody').innerHTML=response;
                  $(".compose-textarea").wysihtml5();
                  $('#riskreport').modal('show');
                }
                else
                {
                  $('#noriskreport').modal('show');
                }
              }   
            });
          });
          /***** View Risk Assessment Report  *****/
        /************ Modal Functions *********************/

        /************ Form Wizard     *********************/
        $('#smartwizard').smartWizard(); 
        /************ Form Wizard     *********************/

        /************ Text Editor     *********************/
        $(".compose-textarea").wysihtml5();
        /************ Text Editor     *********************/

        /************ Select2         *********************/
        $(".select2").select2({'width':'100%'});
        $(".newstock").select2();
        /************ Select2         *********************/

        /************ Data Tables     *********************/
        <!-- Suppliers -->
        <?php if(isset($retrieve_suppliers)) : ?>
        $("#allsuppliers").DataTable({
          "ajax": {
              url: "<?php echo base_url().'Stores/Suppliers_API'; ?>",
              dataSrc: ''
            },
          "columns": [
            { "defaultContent": "<button class='deletebtn'>Click!</button>"},
            { "data": "name" },
            { "data": "addr" },
            { "data": "tel1" },
            { "data": "email" },
            { sortable: false,
              "render": function ( data, type, sup, meta ) {
                return '<a class="btn btn-primary btn-xs edit-sup-btn" data-sup_id="'+sup.sup_id+'" data-name="'+sup.name+'" data-addr="'+sup.addr+'" data-tel1="'+sup.tel1+'" data-tel2="'+sup.tel2+'" data-email="'+sup.email+'" data-location="'+sup.loc+'"><i class="fa fa-pencil"></i> Edit</a> <a class="btn btn-danger btn-xs deletebtn" data-delid="'+sup.sup_id+'" data-delname="'+sup.name+'" data-formurl="Delete_Supplier"><i class="fa fa-trash"></i> Delete</a>';
              }
            }   
          ],
        });
        <!-- Suppliers -->
        <?php endif; ?>
        /************ Data Tables     *********************/

        /************ Date Picker     *********************/
        $('.2waydate').daterangepicker({
          "showDropdowns": true,
          "autoApply": true,
          "timePicker": false,
          "timePicker24Hour": false,
          "timePickerSeconds": false,
          "locale": {
            "format": "YYYY-MM-DD",
            "separator": " To ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ],
            "firstDay": 1
          },
          "linkedCalendars": false,
          "alwaysShowCalendars": true
        }, function(start, end, label) {
        console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        });

        $('.singledate').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoApply": true,
            "drops": "up",
             "locale": {
                "format": "YYYY-MM-DD"
                }
        }, function(start, end, label) {
          console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        });
        /************ Date Picker     *********************/

        /************ Add New Project Phase     ***********/
        var counter = 1;
          $('.addnewphase').on('click',function(){
            var divlen = $('.phasebox').length
            $('.phasebox:last').append('<div class="box box-default phasebox'+divlen+'" style="margin-top:15px;width:100%"><div class="box-header with-border"><h3 class="box-title">Phase Name</h3><div class="box-tools pull-right"><button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button><button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button></div></div><!-- /.box-header --><div class="box-body" style="display: block;"><div class="form-group col-md-4"><label for="email">Phase Name </label><input type="text" class="form-control" name="phase_name[]" placeholder="Phase N" data-error="Please Enter A Phase Name" required/><div class="help-block with-errors"></div></div><div class="form-group col-md-4"><label for="email">Durations / Time </label><input type="text" class="form-control 2waydate" name="phaseduration[]" data-error="Select A Date" required/><div class="help-block with-errors"></div></div><div class="form-group col-md-4"><label>Add Artisan(s) </label><select class="form-control select2"  multiple="multiple" name="artisan['+counter+'][]" data-placeholder="--- Select One ---" data-error="Please Add Department(s)" required><option label="----- Select ------"></option><option>Procurement Department</option><option>Finance Department</option><option>Stores Department</option><option>Eelectrical Department</option><option>Mechanical Department</option></select><div class="help-block with-errors"></div></div></div><!-- /.box-body --></div>');
            counter++;
            $(".select2").select2({'width':'100%'});
            /************ Date Picker     *********************/
            $('.2waydate').daterangepicker({
              "showDropdowns": true,
              "autoApply": true,
              "timePicker": false,
              "timePicker24Hour": false,
              "timePickerSeconds": false,
              "locale": {
                "format": "YYYY-MM-DD",
                "separator": " To ",
                "applyLabel": "Apply",
                "cancelLabel": "Cancel",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Custom",
                "daysOfWeek": [
                    "Su",
                    "Mo",
                    "Tu",
                    "We",
                    "Th",
                    "Fr",
                    "Sa"
                ],
                "monthNames": [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December"
                ],
                "firstDay": 1
              },
              "linkedCalendars": false,
              "alwaysShowCalendars": true
            }, function(start, end, label) {
            console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
            });
            /************ Date Picker     *********************/
          });
        /************ Add New Project Phase     ***********/

        /************ scrollview      *********************/
         
        /************ scrollview      *********************/
      });
      /************ Document Ready *********************/
      /************ Request Type   *********************/
      function reqtype(request)
      {
        if(request == "tools")
        {
          $('#machi').hide(500);
          $('#labou').hide(400);
          $('#finan').hide(400);
          $('#tools').show(400);
        }
        else if(request == "machi")
        {
          $('#tools').hide(500);
          $('#labou').hide(400);
          $('#finan').hide(400);
          $('#machi').show(400);
        }
        else if(request == "labou")
        {
          $('#machi').hide(500);
          $('#tools').hide(400);
          $('#finan').hide(400);
          $('#labou').show(400);
        }
        else if(request == "finan")
        {
          $('#machi').hide(500);
          $('#tools').hide(400);
          $('#labou').hide(400);
          $('#finan').show(400);
        }
        else
        {
          $('#machi').hide(500);
          $('#tools').hide(400);
          $('#labou').hide(400);
          $('#finan').hide(400);
        }
      }
      /********* Tools / Material Functions***********/
      function decisionOnItem(reqtype,unitname,amtname) 
      {
        if(reqtype == "Service")
        {
          $('[name="'+unitname+'"]').hide(500);
          $('[name="'+amtname+'"]').hide(500);
        }
        else if(reqtype == "Service+Amt")
        {
          $('[name="'+unitname+'"]').show(500);
          $('[name="'+amtname+'"]').show(500);
        }
        else if(reqtype == "Purchase")
        {
          $('[name="'+unitname+'"]').show(500);
          $('[name="'+amtname+'"]').show(500);
        }
        else
        {
          $('[name="'+unitname+'"]').hide(500);
          $('[name="'+amtname+'"]').hide(500);
        }
      }
      
      function TotalAmt()
      {
        var Quantity = $('[name="Matitemqty"]').val();
        var Unit     = $('[name="Matitemunit"]').val();
        var Totalamount = Quantity * Unit;
        $('[name="Matitemamt"]').val(Totalamount);
      }

      $('#addNewMat').click(function(){
        var processtype = $('[name="Matprocesstype"]').val();
        var itemname    = $('[name="Matitemname"]').val();
        var itemdesc    = $('[name="Matitemdesc"]').val();
        var itemqty     = $('[name="Matitemqty"]').val();
        var itemunit    = $('[name="Matitemunit"]').val();
        var itemamt     = $('[name="Matitemamt"]').val();
        var indexcounter = $('#mattable tr:last').index() + 1;
        $('#mattable tr:last').after('<tr><td><input type="hidden" name="matrequest_type[]" value="'+processtype+'"/>'+indexcounter+'</td><td><input type="hidden" name="matname[]" value="'+itemname+'"/>'+itemname+'</td><td><input type="hidden" name="matdesc[]" value="'+itemdesc+'"/>'+itemdesc+'</td><td><input type="hidden" name="matqty[]" value="'+itemqty+'"/>'+itemqty+'</td><td><input type="hidden" name="matunit[]" value="'+itemunit+'"/>'+itemunit+'</td><td><input type="hidden" name="matamt[]" value="'+itemamt+'"/>'+itemamt+'</td><td><a href="#" class="del_req_row"><i class="fa fa-times text-red"></i></a></td></tr>');
      });
      $(".table").on("click", ".del_req_row", function(){
        $(this).closest('tr').remove();
      });
      /********* Tools / MAterial ***********/
      /********* Machine / Equipment ***********/
      $('#addNewMach').click(function(){
        var processtype = $('[name="Machprocesstype"]').val();
        var itemname    = $('[name="Machitemname"]').val();
        var itemdesc    = $('[name="Machitemdesc"]').val();
        var itemtime    = $('[name="Machtime"]').val();
        var itemunit    = $('[name="Machitemunit"]').val();
        var itemamt     = $('[name="Machitemamt"]').val();
        var itempurpose  = $('[name="MatitemPurpose"]').val();
        var indexcounter = $('#machtable tr:last').index() + 1;
        $('#machtable tr:last').after('<tr><td><input type="hidden" name="machrequest_type[]" value="'+processtype+'"/>'+indexcounter+'</td><td><input type="hidden" name="machname[]" value="'+itemname+'"/>'+itemname+'</td><td><input type="hidden" name="machdesc[]" value="'+itemdesc+'"/><input type="hidden" name="machpurpose[]" value="'+itempurpose+'"/>'+itempurpose+'</td><td><input type="hidden" name="machtime[]" value="'+itemtime+'"/>'+itemtime+'</td><td><input type="hidden" name="machunit[]" value="'+itemunit+'"/>'+itemunit+'</td><td><input type="hidden" name="machamt[]" value="'+itemamt+'"/>'+itemamt+'</td><td><a href="#" class="del_req_row"><i class="fa fa-times text-red"></i></a></td></tr>');
      });
      $(".table").on("click", ".del_req_row", function(){
        $(this).closest('tr').remove();
      });
      /********* Machine / Equipment ***********/
      /********* Labour Request      ***********/
      $('#addNewLab').click(function(){
        var itemname    = $('[name="Labname"]').val();
        var itemtime    = $('[name="Labtime"]').val();
        var itemqty     = $('[name="Labqty"]').val();
        var itemunit    = $('[name="Labunit"]').val();
        var itemamt     = $('[name="Labamt"]').val();
        var itemnote  = $('[name="Labnote"]').val();
        var indexcounter = $('#labtable tr:last').index() + 1;
        $('#labtable tr:last').after('<tr><td>'+indexcounter+'</td><td><input type="hidden" name="labname[]" value="'+itemname+'"/>'+itemname+'</td><td><input type="hidden" name="labtime[]" value="'+itemtime+'"/>'+itemtime+'</td><td><input type="hidden" name="labqty[]" value="'+itemqty+'"/>'+itemqty+'</td><td><input type="hidden" name="labunit[]" value="'+itemunit+'"/>'+itemunit+'</td><td><input type="hidden" name="labamt[]" value="'+itemamt+'"/>'+itemamt+'</td><td><input type="hidden" name="labnote[]" value="'+itemnote+'"/>'+itemnote+'</td><td><a href="#" class="del_req_row"><i class="fa fa-times text-red"></i></a></td></tr>');
      });
      $(".table").on("click", ".del_req_row", function(){
        $(this).closest('tr').remove();
      });
      /********* Labour Request      ***********/
      /********* Preview Request     ***********/
      $('#request-preview').click(function(){
        $('#toolsmodaltable').html($('#mattable').clone());
        $('#machinemodaltable').html($('#machtable').clone());
        $('#labourmodaltable').html($('#labtable').clone());
        $('#previewrequest').modal('show');
      });
      /********* Preview Request     ***********/
      /************ Request Type   *********************/
    </script>
    <!-- General Functions -->

    <!-- Javascrip Functions -->
    <script type="text/javascript">
      $(function () {
        //Users & Groups Switch
        $('#groups').hide();
        $('#group').click(function () {
           $('#users').hide(500);
           $('#groups').show(400); 
        });
        $('#user').click(function () {
           $('#groups').hide(500);
           $('#users').show(400); 
        });
        
        //Initialize Select2 Elements
        $("#imgupload").click(function(){
           $("#imguploadclick").click();
        });
        $("#audioupload").click(function(){
           $("#audiouploadclick").click();
        });
        $("#videoupload").click(function(){
           $("#videouploadclick").click();
        });
        

        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('.mailbox-messages input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_flat-blue',
          radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
          var clicks = $(this).data('clicks');
          if (clicks) {
            //Uncheck all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
          } else {
            //Check all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
          }
          $(this).data("clicks", !clicks);
        });
        
        //datepicker
        $('#new-stock').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoApply": true,
             "locale": {
                "format": "dddd DD MMMM, YYYY"
                }
        }, function(start, end, label) {
          console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        });
        $('.expiry').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoApply": true,
            "drops": "up",
             "locale": {
                "format": "YYYY / MM / DD"
                }
        }, function(start, end, label) {
          console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        });
        
        // Data Table
        $(function () {
            $(".example1").DataTable();
            $("#example3").DataTable();
            $("#example4").DataTable();
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false
            });
        });
        //Input Mask
        $("[data-mask]").inputmask();
        /*
        //Datemask dd/mm/yyyy
        
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
        */
        

      });

    </script>
    <script>
        $(".delete").on('click', function() {
          $('.case:checkbox:checked').parent("tr").remove();
            $('.check_all').prop("checked", false); 
          check();
        
        });
        var i=2;
        $(".addmore").on('click',function(){
          count=$('table tr').length;
            var data="<tr><td><input type='checkbox' class='case'/></td><td><span id='snum"+i+"'>"+count+".</span></td>";
            data +="<td name='cat_id[]'>"+$( "#category option:selected" ).text()+"</td><td name='prod_id[]'>"+$( "#stock option:selected" ).text()+"</td><td name='desc[]'>"+$( "#description option:selected" ).text()+"</td><td name='qty[]'>"+$('#qty').val()+"</td><td name='expiry[]'>"+$('#expiry').val()+"</td><td name='unit[]'>"+$('#unit').val()+"</td></tr>";
          $('table').append(data);
          i++;
        });
        
        function select_all() {
          $('input[class=case]:checkbox').each(function(){ 
            if($('input[class=check_all]:checkbox:checked').length == 0){ 
              $(this).prop("checked", false); 
            } else {
              $(this).prop("checked", true); 
            } 
          });
        }
        
        function check(){
          obj=$('table tr').find('span');
          $.each( obj, function( key, value ) {
          id=value.id;
          $('#'+id).html(key+1);
          });
          }

</script>
    <!--*********** Notification    *********************-->
    <script type="text/javascript">
      <?php if(!empty($_SESSION['success'])) : ?>
        /**** Success Notification ****/
        var permanotice, tooltip, _alert;
        $(function () {
          new PNotify({
              title: 'Process Successful',
              text: '<?= $this->session->flashdata("success") ?>',
              type: 'success'
          });
        });
        /**** Success Notification ****/
      <?php elseif (!empty($_SESSION['error'])) : ?>
        /**** Error Notification ****/
        var permanotice, tooltip, _alert;
        $(function () {
          new PNotify({
              title: 'An Error Occurred',
              <?php $this->session->set_flashdata("error",@$_SESSION['error']); ?>
              text: '<?= $this->session->flashdata("error") ?>',
              type: 'error'
          });
        });
        /**** Error Notification ****/
        <?php elseif (validation_errors()) : ?>
        var permanotice, tooltip, _alert;
        $(function () {
          new PNotify({
              title: 'An Error Occurred',
              text: '<?= validation_errors() ?>',
              type: 'error'
          });
        });
        /**** Error Notification ****/
        /**** Warning Notification ****/
        <?php elseif (!empty($_SESSION['warning'])) : ?>
        var permanotice, tooltip, _alert;
        $(function () {
          new PNotify({
              title: 'No Record(s) Found',
              text: '<?= $this->session->flashdata("warning") ?>',
              type: 'warning'
          });
        });
        /**** Warning Notification ****/
      <?php endif; ?>
    </script>
      <!-- Warning Notification -->
      
    <!--*********** Notification    *********************-->
    <?php unset($_SESSION['error']); ?>
  </body>
</html>
