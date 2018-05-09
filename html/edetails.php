<?php
	include_once 'dbh.php';
	if(isset($_POST['btnclick']) && $_POST['btnclick']=='b2')
	{
		


		$sql='select e.eventname, e.eventdate, ii.itemname from inven_checkout ic, inventory i, item_info ii, event e, venue v where v.vid=e.eventvenue and e.eventid=ic.eventid and ic.iid=i.iid and i.itype=ii.itemid;';
                $response=$conn->query($sql);
                while ($row=mysqli_fetch_array($result)){
                        $rows[]=$row;
                }

               


		echo " <table class='table table-dark table-striped table-condensed'>		

			<tr>
			<th>Event Name</th>
			<th>Event Date</th>
			<th>Item</th>
			</tr>";
		while($result=$response->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>" . $result['eventname'] . "</td>";
			echo "<td>" . $result['eventdate'] . "</td>";
			echo "<td>" . $result['itemname'] . "</td>";
		}
		echo "</table>";

                        
		/*echo '<h3> Select a contract ID to view details about that event:</h3> <br>
			
			<form action="eresults.php" method="POST">

				<select name="enamesearch"><option value="Select a Venue" </option> ';
                                 foreach ($rows as $row) {
                                 echo '<option value="' . $row['eventid'] . '">' . $row['eventid'] . '</option>';
                                         } echo '</select> <br>

                                <button type="submit" name="eventsearch">Display Event Details</button>
                                </form>';
		*/


		

	}

?>

