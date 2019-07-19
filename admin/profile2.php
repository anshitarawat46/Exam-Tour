<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exam Tour: Tour for education</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="charisma-app.css" rel="stylesheet">
    <link href="colorbox.css" rel="stylesheet">
	<link href="glyphicons-halflings-regular.woff2" rel="stylesheet">
	
	
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 
    <link rel="stylesheet" href="ionicons.min.css">-->
     <!-- Select2 -->
    <link rel="stylesheet" href="select2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="pace.css">
    <link rel="stylesheet" href="skin-red.css">
    
    <link rel="stylesheet" href="custom-style.css">
	
	<!--time picker-->
	<link rel="stylesheet" href="timepicker.min.css">
    <!--time picker-->

   
		
	<script src="jquery.min.js"></script>	
	<link href="parsley.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--[validation css]-->
  </head>
  

  <body class="hold-transition skin-red sidebar-mini">
  	<div class="wrapper">
	        <header class="main-header">
        <!-- Logo -->
        <a href="adlogin.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>E</b>T</span>
          <!-- logo for regular state and mobile devices -->
          <span class="hidden-xs">Exam-Tour</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">				          
                  <img src="man.png" class="user-image" >
                  <span class="hidden-xs">
                    admin                  </span>
                </a>
				
				
			                  <ul class="dropdown-menu">
                  <!-- User image --> 
                  <li class="user-header">
                      <img src="man.png" class="img-circle">
                  </li>				  
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                   <li class="user-footer">
                    <div class="pull-left">
				                                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
					 </div>

                    <div class="pull-right">
                      <a href="login.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
  
  <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
		  
	<div class="user-panel">
            <div class="pull-left image">
              <img src="man.png" class="user-image left-sid" >
            </div>
            <div class="pull-left info">
              <p>admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
		  
          <!-- sidebar menu: : style can be found in sidebar.less -->
             <ul class="sidebar-menu">
			 
			 
			       <li class="treeview">
					  <a href="#">
						<i class="fa fa-bus"></i>

						<span>Bus Management</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="management.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="addbus.php"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
						
		</ul>
                 </li>
						
				  <li class="treeview">
					  <a href="#">
						<i class="fa fa-hand-o-up"></i> <span>Location Details</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="locationdtl.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="add1.php"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>				   
				  
				        <li>
                            <a href="#"><i class="glyphicon glyphicon-picture"></i><span>Gallery</span></a>
                        </li>
					
					 	
						
						 <li class="treeview">
					  <a href="#">
						<i class="fa fa-asterisk" aria-hidden="true"></i><span>Agent/Driver Details</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="driverdtl.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="addagent.php"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
                     
					  					   <li>
                            <a href="#"><i class="fa fa-wrench" aria-hidden="true"></i><span>Settings</span></a>
                        </li>
																	   <li>
                            <a href="student.php"><i class="fa fa-users" aria-hidden="true"></i><span>Customer</span></a>
                        </li>
												
						<li>
                           <a href="#">                     
							<i class="fa fa-ban" aria-hidden="true"></i><span>Cancellation</span><i class="fa fa-angle-left pull-right"></i> </a>
							<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
							<li><a href="#"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
						  </ul>
                        </li>
						
						
						<li>
						   <a href="bookingdtl.php"><i class="fa fa-book" aria-hidden="true"></i><span>Booking Details</span></a>                     
                        </li>
						  
             </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
	
	
	<div class="content-wrapper" >
   <!-- Content Header (Page header) -->
   <section class="content-header">
    View Profile Details
            <small></small>
          </h1>
    
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
			 <div class="alert alert-danger">
                <p>Password doesn't match or Invalid password</p>
            </div>
						</div>
                   
				   
	<div class="col-md-7">
              <!-- general form elements -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">View Profile Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                 
				 <div class="box-body box-profile">
				 
				 
<div class="user-profile-pic">
    <div class="user_pic">
        <img class="profile-user-img img-responsive img-circle" src="man.png">
            </div>
    <div class="change-profile-pic">  
        <div class="uploadFile">
            <form method="post" id="profilepic-form-img" enctype="multipart/form-data">
                <input type="file" name="profile_pic" id="profileimg-form" class="custom-file-input">
            </form>
        </div>
    </div>
</div>


                </br>
				   
				   <div class="form-group has-feedback">
                     <li class="list-group-item">
                      <b>Username</b> <a class="pull-right">admin</a>
                    </li>
				   </div>

                 
                 

                </div><!-- /.box-body -->
				
				
				
				
         
              </div><!-- /.box -->
            </div> 
			
			
			   <div class="col-md-5">
              <!-- general form elements -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Reset Password</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="chpass.php" method="post" data-parsley-validate="" class="validate" enctype="multipart/form-data">
                 
				 <div class="box-body">
				 <div class="col-md-6">
                 <div class="form-group col-md-12">
	
                      <label>Old Password</label>
                      <div class="input-group">
                      <input type="password" name="password" class="form-control input_size required" data-parsley-trigger="change"	
                      data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z0-9\  \/]+$" required="" placeholder="Enter Old Password">
                      <span class="input-group-btn">
							<button class="btn btn-flat show-pwd-btn" type="button">
								<i class="fa fa-eye"></i>
							</button>
					  </span>
                      </div>
                      </div>

                      <div class="form-group col-md-12">
                      <label>New Password</label>
                      <div class="input-group">
                      <input type="password" name="n_password" class="form-control input_size required" data-parsley-trigger="change"	
                   data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z0-9\  \/]+$" required=""placeholder="Enter New Password">
                      <span class="input-group-btn">
							<button class="btn btn-flat show-pwd-btn" type="button">
								<i class="fa fa-eye"></i>
							</button>
					  </span>
                      </div>
                      </div>

                      <div class="form-group col-md-12">
                      <label>Confirm Password</label>
                      <div class="input-group">
                      <input type="password" name="c_password" class="form-control input_size required" data-parsley-trigger="change"	
                   data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z0-9\  \/]+$" required="" placeholder="Enter Password Again">
                      <span class="input-group-btn">
							<button class="btn btn-flat show-pwd-btn" type="button">
								<i class="fa fa-eye"></i>
							</button>
					  </span>
                      </div>
                      </div>				  
						  <div class="box-footer">
							<button type="submit" class="btn btn-primary" name="reset_pwd">Update</button>
						  </div>				  

		              </div>
					   
                   </div><!-- /.box-body -->
                </form>
              </div><!-- /.box -->
            </div> 
			
			
			
			
			
			
			
			
			
			
			
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div>
	  
     
    
    
    </div>
  	<script>
	
	base_url = "http://demo.truebus.co.in/admin/";
	config_url = "http://demo.truebus.co.in/admin/";
</script>
    <!-- jQuery 2.1.4 -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="jquery-ui.js"></script>
  <script src="angular.min.js"></script>
    <script src="jquery.min.js"></script>
	<!--<script src="assets/js/app.min.js"></script>-->
	 <script src="sortables.js"></script>
	  <script src="app.js"></script>
     <script src="app-test.js"></script>
    
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap.min.js"></script>
    <script src="pace.js"></script>
    <!-- Select2 -->
    <script src="select2.min.js"></script>
    
    <!-- DataTables -->
    <script src="jquery.dataTables.min.js"></script>
    <script src="dataTables.bootstrap.js"></script>
	
    <script type="text/javascript" src="googleapis.js"></script>
	
	
	<!-- plugin for gallery image view Ragu -->
   <script src="jquery.colorbox-min.js"></script>
   <!-- application script for Charisma demo Ragu -->
   <script src="charisma.js"></script>
   <script src="chosen.jquery.min.js"></script>

    <script src="angular.min.js"></script>
	
    <!-- FastClick 
    <script src="../../plugins/fastclick/fastclick.min.js"></script>-->
    <!-- AdminLTE App -->
    <script src="app.min.js"></script>
    
    <script src="custom-script.js"></script>
	
	<script src="immanucustom.js"></script>
	
	
	 <script src="jquery.raty.min.js"></script>
	
	<!--time picker-->
    <script src="bootstrap-timepicker.min.js"></script>
	<!--[validation js]-->
	 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<script src="parsley.min.js"></script>
    <script src="jquery-ui.js"></script>
    <!--[validation js]-->
	<script>
	 $(function () {
	   $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
    <script>
   $(function () {
    $( "#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
     $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
	<!--time picker-->
<!--Cancellation Time Picker-->	
	<script>
	 $(function () {
	   $("#timepicker_cancellation").timepicker({
          showInputs: false,
		  //defaultTime: false,
		  showMeridian: false,
		 /* $('#timepicker_cancellation').timepicker({
                minuteStep: 1,
                template: 'modal',
                appendWidgetTo: 'body',
                //showSeconds: false,
                //showMeridian: false,
                defaultTime: false
            });*/
		  
		  
		  
		  
		  
        });
 });
    </script>
<!--time picker-->

    
    <!-- CK Editor -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
		
		$('.datatable').DataTable({
			"ordering" : $(this).data("ordering"),
			"order": [[ 0, "desc" ]]
        });
		
	  });
	</script>
	
	 <script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
     if(job!=true)
    {
        return false;
    }
}
</script>
	 <script>
 
//Multi Select Box 				   
$(document).ready(function() {			
				 
$(".js-example-basic-multiple").select2();   
				   
});
</script>
<script type="text/javascript">
    /*tinymce.init({
         selector: "textarea",
   
  height: 230,
  plugins: 'link image code',
  relative_urls: false,
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]

    });*/
</script>
</body>
</html>