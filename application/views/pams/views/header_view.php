<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?> - CheetahCorp</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>resources/dist/img/icon.png">
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url(); ?>resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>resources/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>resources/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- Chosen style -->
    <link href="<?php echo base_url(); ?>resources/dist/css/chosen.css" rel="stylesheet" type="text/css" />

    <!-- Datepicker -->
    <link href="<?php echo base_url(); ?>resources/dist/css/jquery.datepick.css" rel="stylesheet">

    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>resources/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>resources/dist/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    
    <!-- Text Editor -->
    <link href="<?php echo base_url(); ?>resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
      
    <!-- DATA TABLES -->
    <link href="<?php echo base_url(); ?>resources/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

     <script>
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10<br>
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}

   function displayDate()
    {
      document.getElementById("demo").innerHTML=Date();
    }

</script>
<style type="text/css">
  .form-control {
    width: 100%;
  }
  .col{
    margin-bottom: 7px;
      margin-left: 9px;
  }
  img#profile {
    vertical-align: text-top;
    border: 10px;
    width: 180px;
    height: 180px;
  }
  img.img-circle#profile {
    background-color:#fff;
  }
  .admin{
    color: red;
  }
.label {
    font-size: 85%;
    }
    textarea{
        resize: none;
    }
    select option[default] {
      color: #333;
    }
    
</style>

  </head>
  <!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
  <body class="skin-blue sidebar-collapse fixed" onload="startTime()">
    <div class="wrapper">
      
      <header class="main-header">
        <!--<a href="#" class="logo"><b>Pams</b>       v0.1</a> -->
       <a href="#" class="logo">
          <?php 
              if (!empty($_SESSION['CompanyName'])) 
                # code...
                echo $_SESSION['CompanyName'];

              else
                #code
                echo "CompanyName";
              
          ?>
       </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
           
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul>
                  </li>
                
                </ul>
              </li>
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>resources/dist/img/user.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $_SESSION['fullname']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>resources/dist/img/user.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php 
                          //Display Username / Job Title / Position
                          echo $_SESSION['jobtitle']."<br>";
                          echo "<em style='color:rgba(34, 243, 143, 1);'>".$_SESSION['position']."</em><br>";
                          
                      ?> 
                      <!--<small>Member since Nov. 2012</small>-->
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="" class="btn btn-default btn-flat" data-toggle="modal" data-target="#ChangePwd">Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== --> 
        

      <!-- =============================================== -->

