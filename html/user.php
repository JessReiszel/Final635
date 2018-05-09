<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">



 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>




        <script>
                $(document).ready(function() {
			 $("#b1").click(function() {
                                $("#page-content-wrapper").load("viewcal.php", {btnclick: "b1"});                             
                          });
                         $("#b2").click(function() {
                                $("#page-content-wrapper").load("userpacks.php", {btnclick: "b2"});                             
                          });
			 $("#b3").click(function() {
                                $("#page-content-wrapper").load("subrequest.php", {btnclick: "b3"});                             
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
                    <a href="user.php">
                        Menu
                    </a>
                </li>
                <li>
                    <button class="button userbutton" id="b1">View Event Calendar</button>
                </li>
                <li>
                    <button class="button userbutton" id="b2">View Packages</button>
                </li>
                <li>
                    <button class="button userbutton" id="b3">Submit Request</button>
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
                <h1>User Homepage</h1>
                
			<h3>WELCOME USER: <?php echo $_SESSION['sesh_username']; ?> </h3>

	<!--	<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> -->
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
