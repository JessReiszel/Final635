<!DOCTYPE html>
<html>
<head>
	<title>MogoDB Insert Example</title>
</head>
<body>

	<form method="post">	

		<?php 

			/* MongoDB Connection */
			$mongoCon=new MongoClient();
			/* MongoDB Connection */

			/* Selecting Database */
			$db=$mongoCon->cgimongo;
			/* Selecting Database */
		?>

		<!-- Insert Operation -->
		<?php 

			if(isset($_REQUEST["btnSubmit"]))
			{
				$email=$_REQUEST["email"];
				$fullname=$_REQUEST["fullname"];
				$eventtype=$_REQUEST["eventtype"];
				$eventdate=$_REQUEST["eventdate"];
				$message=$_REQUEST["message"];

				$collection=$db->request; //Here, data is the name of table and $db is variable of selected database.

				//Now, Creating a array document which will be inserted in database.

				$document=array(
					"Email"=>$email,
					"Name"=>$fullname,
					"Event"=>$eventtype,
					"Date"=>$eventdate,
					"Message"=>$message);

				//Now, Insert this document into database using insert function of collection object.

				$collection->Insert($document);

				//Printing Message for user on the screen.

				echo "Document/Record inserted successfully.";
				header("Location: insert.php");
			}
		?>
		<!-- Insert Operation -->

		<table border="2" align="center">
			<input type="hidden" name="txtHidden" value='<?php if(isset($ID)) echo $ID; ?>'>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="txtemail" value='<?php if(isset($FN)) echo $FN; ?>'></td>
			</tr>
			<tr>
				<td>Full Name: </td>
				<td><input type="text" name="txtname" value='<?php if(isset($LN)) echo $LN; ?>'></td>
			</tr>
			<tr>
				<td>Event Type: </td>
                                <td><input type="text" name="txteventtype" value='<?php if(isset($LN)) echo $LN; ?>'></td>

			</tr>
			<tr>
				<td>Event Date: </td>
				<td><input type="text" name="txteventdate" value='<?php if(isset($Age)) echo $Age; ?>'></td>
			</tr>
			 <tr>
                                <td>Message: </td>
                                <td><input type="text" name="txtmessage" value='<?php if(isset($Age)) echo $Age; ?>'></td>
                        </tr>


			<tr>
				<td></td>
				<td>
					<?php if (isset($_REQUEST["EditID"])) { ?>
						<input type="submit" value="Update" name="btnUpdate">	
					<?php }else{ ?>
						<input type="submit" value="Submit" name="btnSubmit">
					<?php } ?>
				</td>
			</tr>
		</table>

		<br>
		<br>

		<table border="2" align="center">
			<tr>
				<td><strong>Email</strong></td>
				<td><strong>Name</strong></td>
				<td><strong>Event</strong></td>
				<td><strong>Date</strong></td>
				<td><strong>Message</strong></td>

			</tr>
			<?php 

				/* Display Data(SELECT Operation) */
				$collection=$db->data;
				$obj=$collection->find();

				foreach ($obj as $document) { 

			?>

			<tr>
				<td><?php echo $document["Email"]; ?></td>
				<td><?php echo $document["Name"];  ?></td>
				<td><?php echo $document["Event"];  ?></td>
				<td><?php echo $document["Date"];  ?></td>
				<td><?php echo $document["Message"];  ?></td>

			</tr>

			<?php 
				} 
			?>
		</table>

	</form>	
</body>
</html>
