<?php
include_once 'dbh.php';
	if(isset($_POST['btnclick']) && $_POST['btnclick']=='b3')
	{
		
		echo '<h3>Please enter your information and message below:</h3> <br>
			
			 <form action="addreq.php" method="POST">
                              <label style="color:white">Email:</label><input type="text" name="m1" placeholder="Email"> &nbsp &nbsp
				<label style="color:white">Name:</label><input type="text" name="m2" placeholder="Full Name"><br>
				
				<label style="color:white">Event Type:</label><input type="text" name="m3" placeholder="Event Type"> &nbsp &nbsp
				<label style="color:white">Choose a Date:</label><input type="date" name="m4" placeholder="Event Date"><br><br>
				<p style="color:white;margin:0px">What do you want us to know?:</p><textarea name="m5" placeholder="Message" rows="15" cols="70"></textarea><br>
                                <button type="submit" name="submitrequest">Submit Request</button>
                                </form>';
		
}
?>
