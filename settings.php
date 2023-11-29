<?php include('user/user-header.php'); 
session_start();


$id = $_SESSION['id'];
include('config/conn.php');

$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$users = $result->fetch_assoc();
} else {
	die('User not found.');
}

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Update the user's data
	$sql = "UPDATE users SET name='$name', gender='$sex', email='$email', username='$username', pass ='$password' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		echo "<script type='text/javascript'>
        alert('Updated Successful!');
        window.location = 'all-staff.php';
    </script>";
	} else {
		echo "Error updating record: " . $conn->error;
	}
}

$conn->close();
?>


<div class="page-wrapper mx-auto" style="width: 600px">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="text-center">
				<div class="col">
					<h2 class="page-title mt-5">Update account</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 ">


				<form action="settings.php" method="POST">
					<div class="form-group mt-3">
						<label>Full name</label>
						<div class="cal-icon">
							<input type="text" class="form-control border border-info" id="name" name="name" value="<?php echo $users['full_name']; ?>" required>
						</div>
					</div>
			</div>

			<div class="form-group mt-3">

				<label>Sex</label>
				<select class="form-control border border-info" id="sex" name="sex" value="<?php echo $users['gender']; ?>" required>
					<option>Select</option>
					<option value="male">male</option>
					<option value="female">female</option>
				</select>
			</div>

			<div class="form-group mt-3">
				<label>Email</label>
				<div class="cal-icon">
					<input type="email" class="form-control border border-info" id="email" name="email" value="<?php echo $users['email']; ?>" autocomplete="off" required>
				</div>
			</div>

			<div class="form-group mt-3">
				<label>Username</label>
				<div>
					<input type="text" class="form-control border border-info" id="username" name="username" value="<?php echo $users['username']; ?>" required>
				</div>
			</div>
		</div>

		<div class="form-group mt-3">
			<label>Password</label>
			<div>
				<input type="text" class="form-control border border-info" id="password" name="password"  required>
			</div>
		</div>
		<div class="text-center">
			<button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg mt-4">Update account</button>
		</div>
	</div>
	</form>
</div>
</div>
</div>
</div>
<?php include('includes/scripts.php'); ?>