<?php

include('includes/header.php');

$id = $_GET['id'];
include('config/conn.php');

$sql = "SELECT * FROM staff WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$staff = $result->fetch_assoc();
} else {
	die('User not found.');
}

if (isset($_POST['submit'])) {

	$id_staff = $_POST['staff-id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$role = $_POST['role'];
	$contact = $_POST['contact'];
	$sex = $_POST['sex'];

	// Update the user's data
	$sql = "UPDATE staff SET staff_id ='$id_staff', name='$name', sex='$sex', email='$email', contact_num='$contact', role ='$role' WHERE id=$id";

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
				<div class="text-center ">
					<div class="col">
						<h2 class="page-title mt-5 ">Update Staff</h2> 
                    </div>
			    </div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<form action="add-staff.php" method="POST">

							<div class="form-group mt-3">
								<label>Staff ID</label>
								<div>
									<input type="text" class="form-control border border-info" id="staff" name="staff" autocomplete="off" value="<?php echo $staff['staff_id']; ?>" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Full name</label>
								<div>
									<input type="text" class="form-control border border-info" id="name" name="name" autocomplete="off" value="<?php echo $staff['name']; ?>" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Sex</label>
								<select class="form-control border border-info" id="members" name="members" value="<?php echo $staff['sex']; ?>" required>
									<option>Select</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>

							<div class="form-group mt-3">
								<label>Email</label>
								<div class="cal-icon">
									<input type="email" class="form-control border border-info" id="email" name="email" autocomplete="off" value="<?php echo $staff['email']; ?>" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Contact number</label>
								<div class="cal-icon">
									<input type="text" class="form-control border border-info" id="number" name="number" autocomplete="off" value="<?php echo $staff['contact_num']; ?>" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Role</label>
								<select class="form-control border border-info" id="members" name="members" value="<?php echo $staff['role']; ?>" required>
									<option>Select</option>
									<option value="Manager">Manager</option>
									<option value="Staff">Staff</option>
									<option value="Room Cleaners">Room Cleaners</option>
									<option value="Accountant">Accountant</option>
									<option value="Receiptionalist">Receiptionalist</option>
								</select>
							</div>
					</div>

			</div>
			<div class="text-center">
				<button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg mt-3">Update Staff</button>
			</div>
			</form>
		</div>

		<?php include('includes/scripts.php') ?>