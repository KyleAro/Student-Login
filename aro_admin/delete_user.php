<!doctype html>
<html lang="en">
<head>
	<title>Aro Web</title>
	<meta charset  = "utf-8">
	<link rel="stylesheet" type="text/css" href="style_home.css">
	<link rel="stylesheet" type="text/css" href="style-registration.css">
	<link rel="stylesheet" type="text/css" href="style-viewuser_edituser_deleteuser.css">
	<link rel="stylesheet" type="text/css" href="tabelstyle.css">
</head>
<body>
		<div id= "container">
			
		<div id="content">
			<center><h3>Deleting Records<center></h3>
			<p>
			<?php
			// Start the session at the beginning of the file
session_start();

// Check if the user is logged in and has a user_level of 1
if (!isset($_SESSION['user_level']) || $_SESSION['user_level'] !== 1) {
    // If the user is not logged in or does not have the required level, redirect to another page (e.g., login or home)
    header('Location: login.php'); // Change this to wherever you want to redirect unauthorized users
    exit();
}
			//checking for valid id number_format
			if((isset($_GET['id'])) && (is_numeric($_GET['id']))){
				$id = $_GET['id'];
			}elseif((($_POST['id'])) && (is_numeric($_POST['id']))){
				$id = $_POST['id'];
			}else { //if no id was found, end script.
				echo '<p class = "error">This Page has been accessed by mistake.<a href="index.php" class="go-back-link">Go back</a></p>';
				include('footer.php');
				exit();
			}
			 include ('header-admin.php');
			 include ('info-col-view.php'); 
			require('mysqli_connect.php');
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if($_POST['sure'] == 'Yes'){
					//delete the user indefinitely
					$q = "DELETE FROM users WHERE user_id = '$id'";
					$result = @mysqli_query($dbcon,$q);
					if(mysqli_affected_rows($dbcon) == 1){
						//if no problem delete will be successful
						echo '<h3>The record has been deleted. <a href = "register-view-use-admin.php">Go Back</a></h3>';
					}else{
						//if not deleted
						echo '<h3>Record failed to be deleted</h3>';
					}
				}else{
						header("Location: register-view-use-admin.php");
						exit();
				}
			}else{
				//display information of the user to be deleted
				$q = "SELECT CONCAT(fname, '', lname) FROM users WHERE user_id = '$id'";
				$result = @mysqli_query($dbcon, $q);
				if (mysqli_affected_rows($dbcon) == 1) {
					$row = mysqli_fetch_array($result,MYSQLI_NUM);
					echo "<h3>Are you sure you want to permanently delete $row[0]?</h3>";
					echo' 
					<form action = "delete_user.php" method ="post">
					<input id = "submit-yes" type = "submit" name = "sure" value = "Yes">
					<input id = "submit-no" type = "submit" name = "sure" value = "No">
					<input type = "hidden" name = "id" value="'.$id.'">
					</form>
					';
				}else{
					echo 'User does not exist.';
				}
				mysqli_close($dbcon);
			}
			?>
			
			</p>
		</div>
	</div>
	<?php include ('footer.php'); ?>
</body>
</html>