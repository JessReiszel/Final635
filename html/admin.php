<?php

session_start();


if(!isset($_SESSION['sesh_username']) || $_SESSION['usertype']!='admin') {
header("Location: index.php?sorrycantdo");
                                exit();

}	

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative Games - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">


 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 





 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>




        <script>
                $(document).ready(function() {
			 $("#b1").click(function() {
                                $("#page-content-wrapper").load("eventsched.php", {btnclick: "b1"});                             
                          });
                         $("#b2").click(function() {
                                $("#page-content-wrapper").load("edetails.php", {btnclick: "b2"});                             
                          });
			 $("#b3").click(function() {
                                $("#page-content-wrapper").load("displayinven.php", {btnclick: "b3"});                             
                          });
			$("#b4").click(function() {
                                $("#page-content-wrapper").load("equipuse.php", {btnclick: "b4"});
		          });                             
			$("#b5").click(function() {
                                $("#page-content-wrapper").load("viewpacks.php", {btnclick: "b5"});                             
			  });
			$("#b6").click(function() {
                                $("#page-content-wrapper").load("subevent.php", {btnclick: "b6"});                             
			 });

		});	

        </script>


</head>

<body style="background-color:#1a1a1a">

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="admin.php">
                        Menu
                    </a>
                </li>
                <li>
                    <button class="button adminbutton" id="b1">Event Schedule</button>
                </li>
                <li>
                    <button class="button adminbutton" id="b2">Event Details</button>
                </li>
                <li>
                    <button class="button adminbutton" id="b3">Inventory</button>
                </li>
		<li>
                    <button class="button adminbutton" id="b4">Equipment in Use</button>
                </li>
		<li>
                    <button class="button adminbutton" id="b5">View Packages</button>
                </li>
		<li>
                    <button class="button adminbutton" id="b6">Add Event</button>
                </li>

            

		<li>
		<!-- logout -->
		 <form action="logout.php" method="POST">
               	  <button class="button logoutbutton" type="submit"  name="submitout">Logout</button>
                   </form>
		</li>
		</ul>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Admin Homepage</h1>
		<h3>WELCOME USER: <?php echo $_SESSION['sesh_username']; ?> </h3>
			
 

                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

