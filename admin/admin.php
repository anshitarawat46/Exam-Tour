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
$result =$conn->query('SELECT * FROM management');

 if(!$result) {
      die('Could not get data: ' . mysql_error());
   }
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exam Tour: Tour for education</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap.min.css">
	<link href="charisma-app.css" rel="stylesheet">
    <link href="colorbox.css" rel="stylesheet">
	
	
	
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome.min.css">
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
          <span class="logo-mini"><b>T</b>B</span>
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

						<span>Bus Management</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="view_busdetails.php"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="add_busdetails.php"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
						
		</ul>
                 </li>
						
				  <li class="treeview">
					  <a href="#">
						<i class="fa fa-hand-o-up"></i> <span>Location Details</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="http://demo.truebus.co.in/admin/Borderpoint_details/view_borderdetails"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
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
						<li><a href="http://demo.truebus.co.in/admin/Agent_details/view_Agent_details"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="http://demo.truebus.co.in/admin/Agent_details/add_agent_details"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
                     
					  					   <li>
                            <a href="http://demo.truebus.co.in/admin/Settings_details/view_settings"><i class="fa fa-wrench" aria-hidden="true"></i><span>Settings</span></a>
                        </li>
																	   <li>
                            <a href="http://demo.truebus.co.in/admin/Customer_details/view_customerdetails"><i class="fa fa-users" aria-hidden="true"></i><span>Customer</span></a>
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
						   <a href="http://demo.truebus.co.in/admin/Booking_details/view_bookingdetails"><i class="fa fa-book" aria-hidden="true"></i><span>Booking Details</span></a>                     
                        </li>
						

					  
                     <li>
						   <a href="http://demo.truebus.co.in/admin/Rating_details/view_ratingdetails"><i class="fa fa-star" aria-hidden="true"></i><span>Rating</span></a>                     
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
         <li><a href="#"><i class="fa fa-bus"></i>Home</a></li>
         <li><a href="#">Bus Details</a></li>
         <li class="active">View Bus Details</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
                     </div>
         <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">View Bus Management Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
                                                                                                   
                           <th>Bus/Car RegiNumber</th>
						   <th>Bus/Car Name</th>     
                           <th>Start Point</th>                        
                           <th>Start Time</th>
						    <th>End Point</th>                        
                            <th>Maximum Seats</th>                
                            <th width="200px;">Action</th>
                        </tr>
                     </thead>
<?php 
     while($row = $result->fetch_array(MYSQL_ASSOC)) {
        
?>
		 
                     <tbody>
                           <tr>
                            <td><?php echo $row['bus/carRegi_no']; ?></td>
						   <td><?php echo $row['Bus/Car_name']; ?></td>
						  
						   <td><?php echo $row['pickup_loc']; ?></td>
						   <td><?php echo $row['start_time']; ?></td>
						   <td><?php echo $row['destination_loc']; ?></td>
						   <td><?php echo $row['max_seat']; ?></td>
                                                
                           <td class="center">	  
<?php 
	 }
?>	 
                           		  
                         <a class="btn btn-sm bg-olive show-busgetdetails"  href="javascript:void(0);"  data-id="1">
                              <i class="fa fa-fw fa-eye"></i> View </a>							
                              <a class="btn btn-sm btn-primary" href="edit_bus.php">
                              <i class="fa fa-fw fa-edit"></i>Edit</a>
                              <a class="btn btn-sm btn-danger" href="http://demo.truebus.co.in/admin/Bus_details/delete_bus/1" onClick="return doconfirm()">
                              <i class="fa fa-fw fa-trash"></i>Delete</a>							
                           </td>
                        </tr>
                                               
                    
                  </table>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>

<div class="modal fade modal-wide" id="popup-busModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">View Bus Management Details</h4>
         </div>
         <div class="modal-busbody">
         </div>
         <div class="business_info">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
      
     
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
