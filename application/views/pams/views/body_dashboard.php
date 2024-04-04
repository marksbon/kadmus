  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>  Dashboard
            <small class="pull-right">
              <button class="btn notification" id="notification-sticky">Sticky Notification</button>
              <button class="btn notification" id="notification-header">Notification With Header</button>
            </small>
       
          
          </h1>
          <ol class="breadcrumb">
         
       
          </ol>
        </section>
        <!-- Main content -->

        <section class="content">
         <div class="row">
         <?php 

            if(!empty($_SESSION['roles_unexploded'])) {
                //Exploding Roles  
                $roles_exploded = explode("|", $_SESSION['roles_unexploded']);
                foreach ($roles_exploded as $roles) {
                  # code...
                  $_SESSION['Role'][$roles]  = $roles;
                  //load model and fn for tab info retrieval
                  $tab = $this->settings_model->retrieve_priviledges($roles);

                  //Retrieving tabs info for display
                  foreach ($tab as $tab_info) {
                    # code...
                    $FrameTemplate = "
                          <div class='col-lg-3 col-xs-6'>
                          <!-- small box -->
                            <div class='small-box bg-{$tab_info->bg}'>
                              <div class='inner'>
                                <h3 id='notification-header'>{$tab_info->name}</h3>
                                <p>{$tab_info->comment}</p>
                              </div>
                              <div class='icon'>
                                <i class='{$tab_info->icon}'></i>
                              </div>
                            <a href='{$tab_info->link}' class='small-box-footer'>More info <i class='fa fa-arrow-circle-right'></i></a>
                            </div>
                        </div>";

                      print $FrameTemplate;
                  }

                }
                 //Exploding Priviledges
                $priv_exploded = explode("|", $_SESSION['priv_unexploded']);
                foreach ($priv_exploded as $priv) {
                  # code...
                  $_SESSION['Priviledge'][$priv] = $priv;
                }
            }

          //Hacked
          else {
            echo "SORRY!!!! NO VIEWS ARE SET FOR THE POSITION {$_SESSION['position']} :)";
          }
              
         ?>

          </div>
          <!-- Default box -->
        </div>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

      