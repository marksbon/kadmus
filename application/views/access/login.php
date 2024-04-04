<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login - Kadmus</title>

  <!-- Bootstrap core CSS -->

  <link href="<?= base_url(); ?>resources/login/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?= base_url(); ?>resources/login/fonts/css/font-awesome.min.css" rel="stylesheet">
 <link href="<?= base_url(); ?>resources/login/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?= base_url(); ?>resources/login/css/custom.css" rel="stylesheet">
  <link href="<?= base_url(); ?>resources/login/css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?= base_url(); ?>resources/login/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<link href="<?= base_url(); ?>resources/login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= base_url(); ?>resources/login/css/animate.min.css" rel="stylesheet">
<script src="<?= base_url(); ?>resources/login/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>resources/login/js/easyResponsiveTabs.js" type="text/javascript"></script>

</head>



  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">

    <div class="sap_tabs w3ls-tabs" style="   margin-left: -119%;width: 60%;">
      <h1><b style="color:red;">Kad</b>mus</h1>
    </div>
     <div class="clearfix"></div>
        <h1 style=" font-size:30px;margin-top:-119px;"><center>Mawums</center></h1>
    <div class="login-form" style="width:120%;">
      <div class="sap_tabs w3ls-tabs">
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
          <ul class="resp-tabs-list">
            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><a href="#toregister" class="to_register"><span>Login</span></a></li> 
          </ul>
          
          <?php 

            if($this->session->flashdata('error'))
              print "<h3 class='label label-warning' style='color:red'>".@$this->session->flashdata('error')."</h3>";

            elseif($this->session->flashdata('attemptleft') > 0)
              print "<h3 class='label label-warning' style='color:red'>Invalid Login Credentials. <b>Login Attempt Left: ".@$this->session->flashdata('attemptleft').".</b></h3>";
            
            else
              print "<h3 class='label label-warning' style='color:red'>Authorized Personnels Only</h3>";

          ?>
          <div class="clear"> </div>
          <div class="resp-tabs-container">
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
              <div class="login-agileits-top"> 
                <form action="Login_validation" method="post">
                  <p>Username </p>
                  <input type="text" name="username" required/>
                  <p>Password</p>
                  <input type="password" name="passwd" required/>   
                  <input type="checkbox" id="brand" value="">
                <div class="login-agileits-bottom"> 
            
              </div> 
                  <input type="submit" name="login" value="LOGIN">
                </form>  
              </div>
               
            </div> 
          
          </div>              
        </div>   
      </div> 
      <!-- ResponsiveTabs js -->
      <script type="text/javascript">
        $(document).ready(function () {
          $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
          });
        });
      </script>
      <!-- //ResponsiveTabs js -->
    </div>  

        <!-- content -->
      </div>
      <div id="register" class="animate form">
        <div class="sap_tabs w3ls-tabs" style="   margin-left: -119%;width: 60%;">
      <h1><b style="color:red;">Kad</b>mus<b style="font-size:15px;">MIS</b></h1>
    </div>
        <section class="login_content" style=" font-size:30px;margin-top:-100px;"s>
          <form>
            <h1 syle="color:red ;">Administrator</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Security Code" required="" />
            </div>
            <div class="login-agileits-top">
              <input  type="submit"  width="200px" value="Login" />
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p style="font-size:14px;">Already a Staff  ?
                <a href="#tologin" class="to_register"> Users</a>
              </p>
              <div class="clearfix"></div>
              <br />
             
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>
