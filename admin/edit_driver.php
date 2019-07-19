<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email_id = $_GET['email_id'];

$sql = "SELECT * FROM driver WHERE email_id = '$email_id'";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exam-Tour : Tour for education</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	
	
		<link href="charisma-app.css" rel="stylesheet">
	    <link href="colorbox.css" rel="stylesheet">
	
	
	
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
     <!-- Select2 -->
    <link rel="stylesheet" href="select2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="pace.css">
    <link rel="stylesheet" href="skin-red.css">
    
    <link rel="stylesheet" href="custom-style.css">
	
	<!--time picker-->
	<link rel="stylesheet" href="bootstrap-timepicker.min.css">
    <!--time picker-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!--[validation css]-->

		
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
          <span class="hidden-xs">Exam Tour</span>
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
                      <a href="adlogin.html" class="btn btn-default btn-flat">Sign out</a>
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
      <h1>
        View Bus Management Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="adlogin.html"><i class="fa fa-bus"></i>Home</a></li>
         <li><a href="management.php">Bus Details</a></li>
         <li class="active">View Bus Details</li>
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
                  <h3 class="box-title">Edit Bus Details</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
			   <?php 
			   $email_id = $_GET['email_id'];

$sql = "SELECT * FROM driver WHERE email_id = '$email_id'";
$result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
        
?>
               <form role="form" action="submit.php" method="post"  class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-6">
					 
					      <div class="form-group has-feedback">
                           <label for="exampleInputEmail1">Email ID</label>
                            <input  tabindex="1" type="text" class="form-control required" value=<?php echo $row['email_id']; ?> data-parsley-trigger="change"	
                            data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="email_id"  placeholder="Email ID">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div> 
						
						
					 	
						<div class="form-group has-feedback">
                           <label for="exampleInputEmail1">Company Name</label>
                           <input  tabindex="5" type="text" class="form-control required" name="company_name" 
						   value="<?php echo $row['company_name']; ?> " data-parsley-trigger="change"	
                           data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z0-9\  \/]+$" required="" placeholder="Company Name">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div>
						
						 
						  
			
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button  tabindex="10" type="submit" class="btn btn-primary">Submit</button>
                  </div>
				   </div>
				   <div class="col-md-6">
				   
				        <div class="form-group has-feedback">
                           <label for="exampleInputEmail1">First Name</label>
                           <input  tabindex="2" type="text" class="form-control required" name="name" value="<?php echo $row['first_name']; ?> "data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="15"  required="" placeholder="Bus RegiNumber">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div>
						
						 <div class="form-group has-feedback">
                           <label for="exampleInputEmail1">Phone No</label>
                           <input tabindex="4" type="number" class="form-control required" name="phone_no" value="<?php echo $row['phone_no']; ?> "
						   data-parsley-trigger="change" required="" placeholder="Phone no">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div> 
						
						  	
						
						
						  
				   </div>
				   
				  </div>
               </form>
			   <?php
	}
	 }
	 ?>
            </div>
            <!-- /.box -->
         </div>
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>

     
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="#">Techware Solution</a>.</strong> All rights reserved.
      </footer>
    
    </div>
  	<script>
	
	base_url = "http://demo.truebus.co.in/admin/";
	config_url = "http://demo.truebus.co.in/admin/";
	</script>
    <!-- jQuery 2.1.4 -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    <script src="http://demo.truebus.co.in/admin/assets/js/jQuery-2.1.4.min.js"></script>
	<!--<script src="assets/js/app.min.js"></script>-->
	 <script src="http://demo.truebus.co.in/admin/assets/js/sortables.js"></script>
	  <script src="http://demo.truebus.co.in/admin/assets/js/app.js"></script>
     <script src="http://demo.truebus.co.in/admin/assets/js/app-test.js"></script>
    
    <!-- Bootstrap 3.3.5 -->
    <script src="http://demo.truebus.co.in/admin/assets/js/bootstrap.min.js"></script>
    <script src="http://demo.truebus.co.in/admin/assets/js/pace.js"></script>
    <!-- Select2 -->
    <script src="http://demo.truebus.co.in/admin/assets/js/select2.min.js"></script>
    
    <!-- DataTables -->
    <script src="http://demo.truebus.co.in/admin/assets/js/jquery.dataTables.min.js"></script>
    <script src="http://demo.truebus.co.in/admin/assets/js/dataTables.bootstrap.min.js"></script>
	
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
	
	
	<!-- plugin for gallery image view Ragu -->
   <script src="http://demo.truebus.co.in/admin//assets/js/jquery.colorbox-min.js"></script>
   <!-- application script for Charisma demo Ragu -->
   <script src="http://demo.truebus.co.in/admin//assets/js/charisma.js"></script>
   <script src="http://demo.truebus.co.in/admin//assets/js/chosen.jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
	
    <!-- FastClick 
    <script src="../../plugins/fastclick/fastclick.min.js"></script>-->
    <!-- AdminLTE App -->
    <script src="http://demo.truebus.co.in/admin/assets/js/app.min.js"></script>
    
    <script src="http://demo.truebus.co.in/admin/assets/js/custom-script.js"></script>
	
	<script src="http://demo.truebus.co.in/admin/assets/js/immanucustom-script.js"></script>
	
	
	 <script src="http://demo.truebus.co.in/admin/assets/js/jquery.raty.min.js"></script>
	
	<!--time picker-->
    <script src="http://demo.truebus.co.in/admin/assets/js/bootstrap-timepicker.min.js"></script>
	<!--[validation js]-->
	 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<script src="http://demo.truebus.co.in/admin/assets/js/parsley.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
