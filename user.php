<?php include('user/user-header.php');?>

<?php 
	include('config/conn.php');

	if(isset($_POST['submit'])){

	$room = $_POST['room_type'];
	$name = $_POST['name'];
	$members = $_POST['members'];
	$email = $_POST['email'];
	$arrival = $_POST['arrival_date'];
	$departure = $_POST['departure_date'];

	$sql = "INSERT INTO booking (room_type, full_name, email, members, check_in, checkout) VALUES ('$room', '$name', '$members', '$email', '$arrival', '$departure')";

	$result = $conn->query($sql);

		if($result){
			echo "<script>
			alert('booking added successfully');
			window.location.href = 'user.php';
			</script>";
		}
		else{
			echo "<script>
			alert('booking unsuccessful');
			window.location.href = 'user.php';
			</script>";
		}

	}

	?>

<div class="page-wrapper mx-auto" style="width: 600px">
		<div class="content container-fluid">
			<div class="page-header">
				<div class="text-center ">
					<div class="col">
						<h2 class="page-title mt-5 ">Add Booking</h2> 
                    </div>
			    </div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<form action="add-booking.php" method="POST">
							<div class="form-group mt-3">
								<label>Room type</label>
								<select class="form-control border border-info" id="room_type" name="room_type" required>
									<option>Select</option>
									<option value="single">Single</option>
									<option value="double">Double</option>
									<option value="king">King</option>
									<option value="suite">Suite</option>
								</select>
							</div>

							<div class="form-group mt-3">
								<label>Name</label>
								<div>
									<input type="text" class="form-control border border-info" id="name" name="name" autocomplete="off" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Number of members</label>
								<select class="form-control border border-info" id="members" name="members" required>
									<option>Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
                                    <option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>

							<div class="form-group mt-3">
								<label>Email</label>
								<div class="cal-icon">
									<input type="email" class="form-control border border-info" id="email" name="email" autocomplete="off" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Arrival date</label>
								<div class="date-icon">
									<input type="date" class="form-control border border-info" id="arrival_date" name="arrival_date" required> 
								</div>
							</div>

							<div class="form-group mt-3">
								<label>Departure date</label>
								<div class="date-icon">
									<input type="date" class="form-control border border-info" id="departure_date" name="departure_date" required> 
								</div>
							</div>
					<div class="text-center">
						<button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg mt-4">Add Booking </button>
					</div>	
					</div>
				</form>					
			</div >
		</div>
		</div>
	</div>
</div>


<?php include('includes/scripts.php'); ?>

