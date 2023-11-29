<?php include('includes/header.php'); ?>
<?php 
include('config/conn.php');

if(isset($_POST['submit'])){

$staff = $_POST['staff'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$number = $_POST['number'];
$role = $_POST['role'];
$join_date = $_POST['join'];

$sql = "INSERT INTO staff (staff_id, name, sex, email, contact_num, role, join_date) VALUES ('$staff', '$name', '$sex', '$email', '$number', '$role', '$join_date')";

$result = $conn->query($sql);

	if($result){
		echo "<script>
		alert('Staff added successfully');
		window.location.href = 'all-staff.php';
		</script>";
	}
	else{
		echo "<script>
		alert('adding staff unsuccessful');
		window.location.href = 'add-staff.php';
		</script>";
	}

}






?>

<div class="page-wrapper mx-auto" style="width: 600px">
		<div class="content container-fluid">
			<div class="page-header">
				<div class="text-center ">
					<div class="col">
						<h2 class="page-title mt-5 ">Add Staff</h2> 
                    </div>
			    </div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<form action="add-staff.php" method="POST">

							<div class="form-group mt-3">
								<label>Staff ID</label>
								<div>
									<input type="text" class="form-control border border-info" id="staff" name="staff" autocomplete="off" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Full name</label>
								<div>
									<input type="text" class="form-control border border-info" id="name" name="name" autocomplete="off" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Sex</label>
								<select class="form-control border border-info" id="members" name="members" required>
									<option>Select</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>

							<div class="form-group mt-3">
								<label>Email</label>
								<div class="cal-icon">
									<input type="email" class="form-control border border-info" id="email" name="email" autocomplete="off" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Contact number</label>
								<div class="cal-icon">
									<input type="text" class="form-control border border-info" id="number" name="number" autocomplete="off" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Role</label>
								<select class="form-control border border-info" id="members" name="members" required>
									<option>Select</option>
									<option value="Manager">Manager</option>
									<option value="Staff">Staff</option>
									<option value="Room Cleaners">Room Cleaners</option>
									<option value="Accountant">Accountant</option>
									<option value="Receiptionalist">Receiptionalist</option>
											</select>
							</div>

							<div class="form-group mt-3">
								<label>Join date</label>
								<div class="date-icon">
									<input type="date" class="form-control border border-info" id="join" name="join" required> 
								</div>
							</div>

					<div class="text-center">
						<button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg mt-4">Add Staff </button>
					</div>	
					</div>
				</form>			
			</div >
		</div>
		</div>
	</div>
</div>
<?php include('includes/scripts.php'); ?>