<?php
include_once 'dbh.php';
	if(isset($_POST['btnclick']) && $_POST['btnclick']=='b6')
	{
	
		 $sql="select vname from venue;";
                $result=$conn->query($sql);
                while ($row=mysqli_fetch_array($result)){
                        $rows[]=$row;
                }
		
		echo '<h3>Create an event:</h3> <br>
			
			 <form action="addevent.php" method="POST">
                              <label>Event Title:</label> <input type="text" name="e1" placeholder="Event Name"><br>
				<label>Choose a Venue</label> <select name="e2"><option value="Select a Venue" </option> ';
               			 foreach ($rows as $row) {
                       		 echo '<option value="' . $row['vname'] . '">' . $row['vname'] . '</option>';
               				 } echo '</select> <br>';
			echo '<label>Select the date of your event:</label><input type="text" name="e3" placeholder="Event Date YYYYMMDD"><br>
                                <button type="submit" name="submitevent">Submit Event</button>
                                </form>';
}
?>
