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
		
			<center><h3>Editing Records<center></h3>
			<p>
			<?php
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
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
					//error array to store errors.
					$errors = array();
					//check if there is first name
					if(empty ($_POST['fname'])){
						$errors[] = 'Please Input your First Name';
					}
					else{
						$fn = trim($_POST['fname']);
					}
					if(empty ($_POST['lname'])){
						$errors[] = 'Please Input your Last Name';
					}
					else{
						$ln = trim($_POST['lname']);
					}
					if(empty ($_POST['email'])){
						$errors[] = 'Please Input your Email Address';
					}
					else{
						$e = trim($_POST['email']);
					}
					
					if(empty($errors)){
						$q = "UPDATE users SET fname = '$fn', lname = '$ln', email = '$e' WHERE user_id = '$id' LIMIT 1";
						$result = @mysqli_query($dbcon, $q);
						if (mysqli_affected_rows($dbcon)== 1 ){
							echo '<h>The User was Edited Successfully. <a href = "register-view-use-admin.php">Go Back</a></h>';
							
						}else{
							echo '<h> The User edit is not successful</h>';
						}
					}else{
								//may error pls
						echo '<h3>An Error has occured</h3>
						<p class = "errors">The following error(s) has occured:<br/>';
						foreach($errors as $msg){
							echo " - $msg</br>\n";
						}
					}
			} $q = "SELECT fname, lname,email from users WHERE user_id = $id";
			$result = @mysqli_query($dbcon, $q);
			if((mysqli_num_rows($result) ) == 1){
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				echo '
				<form action = "edit_user.php" method = "post">
				<p><label class="label" for="fname">First Name: </label>
				<input type = "text" id = "fname" name= "fname" size = "30" maxlength = "40" value= "'.$row['fname'].'">
				</p>
				<p><label class="label" for="lname">Last Name: </label>
				<input type = "text" id = "lname" name= "lname" size = "30" maxlength = "40" value= "'.$row['lname'].'">
				</p>
				<p><label class="label" for="email">Email Address: </label>
				<input type = "text" id = "email" name= "email" size = "30" maxlength = "50" value= "'.$row['email'].'">
				</p>
				<p><input type="submit" id="submit" name="submit" value="Edit"></input>
				</p>
				<p> <input type="hidden" name="id" value="'.$id.'"></input>
				</p>
						</form>
					';	
			}else {
				echo '<h2>This user does not exist. Be Part of Us <a href = "index.php">Click Here</a></h2>';
			}
			mysqli_close($dbcon);
			?>
		</div>
	</div>
	<?php include ('footer.php'); ?>
</body>
</html>