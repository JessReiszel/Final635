<?php
	include_once 'dbh.php';
	if(isset($_POST['btnclick']) && $_POST['btnclick']=='b2')
	{
		

		 $sql="select eventid from event;";
                $result=$conn->query($sql);
                while ($row=mysqli_fetch_array($result)){
                        $rows[]=$row;
                }

                
                        
		echo '<h3> Select a contract ID to view details about that event:</h3> <br>
			
			<form action="eresults.php" method="POST">

				<select name="enamesearch"><option value="Select a Venue" </option> ';
                                 foreach ($rows as $row) {
                                 echo '<option value="' . $row['eventid'] . '">' . $row['eventid'] . '</option>';
                                         } echo '</select> <br>

                                <button type="submit" name="eventsearch">Display Event Details</button>
                                </form>';


	}

?>
