<?php include('includes/header.php'); ?>
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
		window.location.href = 'all-booking.php';
		</script>";
	}
	else{
		echo "<script>
		alert('booking unsuccessful');
		window.location.href = 'add-booking.php';
		</script>";
	}

}

?>

<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title mt-5">Add Booking</h3> 
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form action="add-booking.php" method="POST">
					<div class="row formtype mt-3">							
                    	<div class="col-md-4 mt-3">
							<div class="form-group">
								<label>Room type</label>
								<select class="form-control " id="room_type" name="room_type" required>
									<option>Select</option>
									<option value="single">Single</option>
									<option value="double">Double</option>
									<option value="king">King</option>
									<option value="suite">Suite</option>
								</select>
							</div>
						</div>

						<div class="col-md-4 mt-3">
							<div class="form-group">
								<label>Name</label>
								<div>
									<input type="text" class="form-control" id="name" name="name" autocomplete="off" required> 
								</div>
							</div>
						</div>

						<div class="col-md-4 mt-3">
							<div class="form-group">
								<label>Number of members</label>
								<select class="form-control " id="members" name="members" required>
									<option>Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
                                    <option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
						</div>

						<div class="col-md-4 mt-3">
							<div class="form-group">
								<label>Email</label>
								<div class="cal-icon">
									<input type="email" class="form-control" id="email" name="email" autocomplete="off" required> 
								</div>
							</div>
						</div>
						<div class="col-md-4 mt-3">
							<div class="form-group">
								<label>Arrival date</label>
								<div class="date-icon">
									<input type="date" class="form-control " id="arrival_date" name="arrival_date" required> 
								</div>
							</div>
						</div>
						<div class="col-md-4 mt-3">
							<div class="form-group">
								<label>Departure date</label>
								<div class="date-icon">
									<input type="date" class="form-control" id="departure_date" name="departure_date" required> 
								</div>
							</div>
						</div>
					</div >		
					<div>
						<button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Add Booking </button>
					</div>	
				</form>					
			</div >
		</div>
	</div>
</div>



<?php include('includes/scripts.php'); ?>