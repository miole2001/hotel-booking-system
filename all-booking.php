<?php include('includes/header.php'); ?>

    <div class="page-wrapper">
		<div class="content container-fluid">
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<div class="mt-5">
							<h2 class="card-title float-left mt-2">Booking</h2>
                        </div>
					</div>
				</div>
			</div>
				<div class="row">
					<div class="col-sm-12 mt-4">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>ID</th>
												<th>Room Type</th>
												<th>Name</th>
												<th>Members</th>
												<th>Arrival Date</th>
												<th>Depature Date</th>
												<th>Email</th>
												<th >Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php
											include("config/conn.php");

											if (isset($_GET['delete_id'])) {
												$delete_id = $_GET['delete_id'];
												// Prepare statement to avoid SQL injection
												$stmt = $conn->prepare("DELETE FROM booking WHERE id = ?");
												$stmt->bind_param("i", $delete_id); // "i" for integer type
												$result = $stmt->execute();
									
												if ($result) {
													echo "<script type='text/javascript'>
													alert('Delete Successful!');
													window.location = 'all-booking.php';
												</script>";
												} else {
													echo "<p>Error: Could not delete booking.</p>";
												}
									
												$stmt->close();
											}
	
											
											$sql = "SELECT * FROM booking "; // Assuming you have an 'id' field for each user
											$result = $conn->query($sql);
											$conn->query("SET @num := 0");
                                            $conn->query("UPDATE booking SET id = @num := @num + 1");


											
	
										if ($result->num_rows > 0) 	
										{
											// output data of each row
											while($row = $result->fetch_assoc()) 
											{
													echo "<tr>";
													echo "<td>" . $row['id'] . "</td>";
													echo "<td>" . $row['room_type'] . "</td>";
													echo "<td>" . $row['full_name'] . "</td>";
													echo "<td>" . $row['email'] . "</td>";
													echo "<td>" . $row['members'] . "</td>";
													echo "<td>" . $row['check_in'] . "</td>";
													echo "<td>" . $row['checkout'] . "</td>";
													echo "<td>";
													echo "<a href='?delete_id=".$row['id']."' class='btn btn-delete btn-danger' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a></td>";
													echo "</td>";
													echo "</tr>";
											}
										} else 
										{
											echo "<tr><td colspan='8'>No results found</td></tr>"; // Updated colspan to match the number of <th> elements
										}
										$conn->close();
											
											?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	

<?php include('includes/scripts.php'); ?>