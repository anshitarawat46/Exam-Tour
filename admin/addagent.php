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
        <a href="login.php" class="logo">
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
				                                  <a href="login.php" class="btn btn-default btn-flat">Profile</a>
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

						<span>Bus/Car Management</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="managementdtl.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="addbus.php"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
						
		</ul>
                 </li>
						
				  <li class="treeview">
					  <a href="#">
						<i class="fa fa-hand-o-up"></i> <span>Location Details</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="locationdtl.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="http://demo.truebus.co.in/admin/Borderpoint_details/add_boardpointdetails"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>				   
				  
				        <li>
                            <a href="http://demo.truebus.co.in/admin/gallery_details/add_gallery"><i class="glyphicon glyphicon-picture"></i><span>Gallery</span></a>
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
                            <a href="http://demo.truebus.co.in/admin/Settings_details/view_settings"><i class="fa fa-wrench" aria-hidden="true"></i><span>Settings</span></a>
                        </li>
																	   <li>
                            <a href="student.php"><i class="fa fa-users" aria-hidden="true"></i><span>Customer</span></a>
                        </li>
												
						<li>
                           <a href="#">                     
							<i class="fa fa-ban" aria-hidden="true"></i><span>Cancellation</span><i class="fa fa-angle-left pull-right"></i> </a>
							<ul class="treeview-menu">
							<li><a href="http://demo.truebus.co.in/admin/Cancellation_details/view_cancellation"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
							<li><a href="http://demo.truebus.co.in/admin/Cancellation_details/add_cancellation"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
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
   <h1>
         Add Agent/Driver Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-bus"></i>Home</a></li>
         <li><a href="#">Driver Details</a></li>
         <li class="active">Add Driver</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
                     </div>
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-warning">
               <div class="box-header with-border">
                  <h3 class="box-title">Add Agent/Driver Details</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
			    <form role="form" action="" method="post"  class="validate" enctype="multipart/form-data">
                  <div class="box-body">
                     <div class="col-md-6">
                        <div class="form-group has-feedback" >
                           <label for="exampleInputEmail1">Email ID</label>
                           <input tabindex="1" type="text" class="form-control required" data-parsley-trigger="change"	
                            data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="username"  placeholder="username">
                           <span class="glyphicon  form-control-feedback"></span>

                        </div>         
						
						<div class="form-group has-feedback">
                           <label for="exampleInputEmail1">First Name</label>
                            <input tabindex="3" type="text" class="form-control required" data-parsley-trigger="change"	
                            data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="first_name"  placeholder="First Name">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div> 
						
					
						
					    <div class="box-footer">
                     <button  tabindex="10" type="submit" class="btn btn-primary" >Submit</button>
                  </div>             
                        </div>                   
                   <div class="col-md-6">
				   
				      	<div class="form-group has-feedback">
                           <label for="exampleInputEmail1">Company Name</label>
                            <input  tabindex="5"type="text" class="form-control required" data-parsley-trigger="change"	
                            data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="company_name"  placeholder="Company Name">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div> 

						
                        <div class="form-group has-feedback">
                           <label for="exampleInputEmail1">Mobile Number</label>
                            <input tabindex="8" type="text" class="form-control required" data-parsley-trigger="keyup" data-parsley-type="digits" data-parsley-minlength="10" data-parsley-maxlength="15" data-parsley-pattern="^[0-9 \/]+$" required=""  name="phone_number"  placeholder="Phone Number">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div>


			
                  <!-- /.box-body -->
                  
				  </div>
               </form>
            </div>
            <!-- /.box -->
         </div>
      </div>
     </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
<script>
	
	base_url = "adlogin.html";
	config_url = "adlogin.html";
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
