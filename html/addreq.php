<?php
include_once 'dbh.php';
if(isset($_POST['submitrequest']))
                {
                        $m1=mysqli_real_escape_string($conn, $_POST['m1']);
                        $m2=mysqli_real_escape_string($conn, $_POST['m2']);
                        $m3=mysqli_real_escape_string($conn, $_POST['m3']);
                        $m4=mysqli_real_escape_string($conn, $_POST['m4']);
                        $m5=mysqli_real_escape_string($conn, $_POST['m5']);
        $sql="insert into request (email, name, eventtype, eventdate, message) values ('$m1','$m2','$m3','$m4','$m5');";
        $insert=$conn->query($sql);
                
		if($insert)
		{
                echo '<p>Request successfully submitted. Thanks!</p>';
		}
		else {
		echo '<p>ERROR, try again<p>';
		}
		echo	'<form action="user.php" method="POST">
                                  <button type="submit" name="submit">Go Back</button>';
}
?>
