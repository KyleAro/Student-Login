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
		<?php include ('header-admin.php'); ?>
		<?php include ('info-col-view.php'); ?>
		
		<div id="content">
			<center><h3>REGISTERED USERS<center></h3>
			<p>
			<?php
			require('mysqli_connect.php');
			$q = "SELECT user_id,fname,lname,email, 
			DATE_FORMAT(registration_date, '%M %d, %Y') as regdate 
			from users ORDER BY registration_date ASC";
			$result = @mysqli_query ($dbcon, $q);
			if ($result){
			echo '<table class="my-table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Registration Date</th>
            <th colspan="2">Actions</th> <!-- "Actions" span across two columns -->
        </tr>';

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		echo '<tr>
            <td>' . $row['fname'] . ' ' . $row['lname'] . '</td> <!-- Combine first and last name -->
            <td>' . $row['email'] . '</td>
            <td>' . $row['regdate'] . '</td>
            <td><a href="edit_user.php?id=' . $row['user_id'] . '"><img src="Edit.svg" alt="home page" width="20" height="20" class="nav-icon">Edit</img></a></td>
            <td><a href="delete_user.php?id=' . $row['user_id'] . '"><img src="Trash.svg" alt="home page" width="20" height="20" class="nav-icon">Delete</img></a></td>
        </tr>';
}

		echo '</table>';

			mysqli_free_result($result);
			}
			else{
				echo '<p class = "error"> The Current User could not be retrieved due to system Error. Please Report this incident to the admin</p>';
			}
			mysqli_close($dbcon);
			?>
			</p>
		</div>
	</div>
</body>
<?php include ('footer.php'); ?>
</html>