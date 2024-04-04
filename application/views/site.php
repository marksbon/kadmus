  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Site
            <small>Request</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Site</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- MAILBOX BEGIN -->
          <div class="mailbox row">
            <div class="col-xs-12">
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3 col-sm-4">
                      <!-- BOXES are complex enough to move the .box-header around.
                                This is an example of having the box header within the box body -->
                      <div class="box-header">
                        <i class="fa fa-inbox"></i>
                        <h3 class="box-title">New Request</h3>
                      </div>
                      <!-- compose message btn -->
                      <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i> Compose Message</a>
                      <!-- Navigation - folders-->
                      <div style="margin-top: 15px;">
                        <ul class="nav nav-pills nav-stacked">
                          <li class="header">Folders</li>
                          <li class="active"><a href="#"><i class="fa fa-inbox"></i> Completed (14)</a></li>
                          <li><a href="#"><i class="fa fa-pencil-square-o"></i> New</a></li>
                          <li><a href="#"><i class="fa fa-mail-forward"></i> Sent</a></li>
                          <li><a href="#"><i class="fa fa-star"></i> Track Request</a></li>
                          <li><a href="#"><i class="fa fa-folder"></i> Deleted</a></li>
                        </ul>
                      </div>
                    </div><!-- /.col (LEFT) -->

                    <div class="col-md-9 col-sm-8">
                      <div class="row pad">
                        <div class="col-sm-6">
                          <label style="margin-right: 10px;">
                            <input type="checkbox" id="check-all"/>
                          </label>
                          <!-- Action button -->
                          <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                              Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Mark as read</a></li>
                              <li><a href="#">Mark as unread</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Move to junk</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Delete</a></li>
                            </ul>
                          </div>

                        </div>
                        <div class="col-sm-6 search-form">
                          <form action="#" class="text-right">
                            <div class="input-group">
                              <input type="text" class="form-control input-sm" placeholder="Search">
                              <div class="input-group-btn">
                                <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div><!-- /.row -->

                      <div class="table-responsive">
                        <!-- THE MESSAGES -->
                        <table class="table table-mailbox">
                          <tr class="unread">
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr class="unread">
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr class="unread">
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr class="unread">
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                        </table>
                      </div><!-- /.table-responsive -->
                    </div><!-- /.col (RIGHT) -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <div class="pull-right">
                    <small>Showing 1-12/1,240</small>
                    <button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button>
                    <button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>
                  </div>
                </div><!-- box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col (MAIN) -->
          </div>
          <!-- MAILBOX END -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


      <!-- COMPOSE MESSAGE MODAL -->
    <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Request Forms</h4>
          </div>
          <form action="#" method="post">
            <div class="modal-body">
               <div class="col-md-6">
                  <div class="box-body">
                     <div class="form-group">
                  
                      <select class="form-control">
                        <option>Select  Type</option>
                        <option>Service of Equip.</option>
                        <option>Purchase of Equip.</option>
                      
                      </select>
                    </div>
                     <div class="input-group">
                     <span class="input-group-addon" >Requested by:</span>
                     <input name="email_to" type="email" class="form-control" placeholder="Requested by">
                    </div></br>
                    <div class="input-group">
                      <span class="input-group-addon">Item Name:</span>
                      <input name="email_to" type="email" class="form-control" placeholder="Item Name">
                   </div></br>
                    <div class="input-group">
                    <span class="input-group-addon">Site:</span>
                    <input name="email_to" type="email" class="form-control" placeholder="Site">
                   </div></br>
                      <div class="input-group">
                      <span class="input-group-addon">Reg/Serial No:</span>
                      <input name="email_to" type="email" class="form-control" placeholder="Reg/Serial No">
                    </div></br>
                    <div class="input-group">
                    <span class="input-group-addon">Purpose:</span>
                    <input name="email_to" type="email" class="form-control" placeholder="Purpose">
                    </div>
                     


                  </div>
               </div>
            <!--second-->
             <div class="col-md-6">
                  <div class="box-body">

                    <div class="form-group">
                  
                      <select class="form-control">
                        <option>Select Request Type</option>
                        <option>Vehicle/Equip/Machines</option>
                        <option>Materials</option>
                      
                      </select>
                    </div>
                    <div class="input-group">
                     <span class="input-group-addon">Date:</span>
                     <input name="email_to" type="email" class="form-control" placeholder="Date">
                    </div></br>
                    <div class="input-group">
                    <span class="input-group-addon">Item Quantity:</span>
                    <input name="email_to" type="email" class="form-control" placeholder="Item Quantity">
                   </div></br>
                   <div class="input-group">
                      <span class="input-group-addon">Amount:</span>
                      <input name="email_to" type="email" class="form-control" placeholder="GHC">
                    </div></br>
                      <div class="input-group">
                     <span class="input-group-addon">Driver's Name:</span>
                     <input name="email_to" type="email" class="form-control" placeholder="Driver's Name">
                    </div></br>
                     <div class="input-group">
                      <button type="submit" class="btn btn-warning pull-left "><i class="fa fa-envelope"></i>Save</button>       
                      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-envelope"></i> Add</button>
                     </div>

                  </div>
             </div>
           
                 
                
              </div>

<div style="height:10%;">
              <table class="table table-striped" >
                <thead class=" btn-warning " >
                  <tr style="">
                    
                 <th>ID</th>
                    <th>Item Name</th>
                    <th>Item Quantity</th>
                    <th>Requested by</th>
                     <th>Amount</th>
                    <th>Prepared By</th>
                    
                   
                     <th>Request Type</th>
                      <th>    <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                              Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Remove</a></li>
                              <li><a href="#">Edit</a></li>
                              <li class="divider"></li>
                           
                            </ul>
                          </div></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Call of Duty</td>
                    <td>455-981-221</td>
                    <td>El snort testosterone trophy driving gloves handsome</td>
                    <td>$64.50</td>
                     <td>1</td>
                    <td>Call of Duty</td>
                    <td><input type="checkbox"/></td>
                     
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Need for Speed IV</td>
                    <td>247-925-726</td>
                    <td>Wes Anderson umami biodiesel</td>
                    <td>$50.00</td>
                     <td>1</td>
                    <td>Call of Duty</td>
                    <td><input type="checkbox"/></td>
                     
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Monsters DVD</td>
                    <td>735-845-642</td>
                    <td>Terry Richardson helvetica tousled street art master</td>
                    <td>$10.70</td>
                     <td>1</td>
                    <td>Call of Duty</td>
                    <td><input type="checkbox"/></td>
                   
                  </tr>
       
             
             
                </tbody>
              </table>
             
        

            </div>
            <div class="modal-footer clearfix">

              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>

              <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Send Message</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --