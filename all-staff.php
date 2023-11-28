<?php include('includes/header.php'); ?>
    <div class="page-wrapper">
	    <div class="content container-fluid">
			  <div class="page-header">
				  <div class="row">
					  <div class="col">
						  <div class="mt-4">
							  <h2 class="card-title float-left ">STAFF LIST</h2> 
					    </div>
				    </div>
			    </div>
		    </div>
		<div class="row">
			<div class="col-lg-12 mb-4">
				<form>
					<div class="col-md-3 ms-auto">
						<div class="form-group">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    						<button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
						</div>
					</div>
				</form>
			</div>

				<div class="row">
					<div class="col-sm-12 mt-5">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Staff ID</th>
												<th>Name</th>
												<th>Sex</th>
												<th>Email</th>
												<th>Contact #</th>
												<th>Role</th>
												<th>Join Date</th>
												<th>Actions</th>
											</tr>
										</thead>
										<?php 
										include("config/conn.php");

										if (isset($_GET['delete_id'])) {
											$delete_id = $_GET['delete_id'];
											// Prepare statement to avoid SQL injection
											$stmt = $conn->prepare("DELETE FROM staff WHERE id = ?");
											$stmt->bind_param("i", $delete_id); // "i" for integer type
											$result = $stmt->execute();
								
									if ($result) {
										echo "<script type='text/javascript'>
										alert('Delete Successful!');
										window.location = 'all-staff.php';</script>";
									}
									else{
										echo "<p>Error: Could not delete user.</p>";
									}
								
									$stmt->close();
								}

										$sql = "SELECT * FROM staff";
        								$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
												
												echo "<tr>";
												echo "<td>" . $row['id'] . "</td>";
												echo "<td>" . $row['staff_id'] . "</td>";
												echo "<td>" . $row['name'] . "</td>";
												echo "<td>" . $row['sex'] . "</td>";
												echo "<td>" . $row['email'] . "</td>";
												echo "<td>" . $row['contact_num'] . "</td>";
												echo "<td>" . $row['role'] . "</td>";
												echo "<td>" . $row['join_date'] . "</td>";
												echo "<td>";
												echo "<a href='update.php?id=".$row['staff_id']."' class='btn btn-update btn-primary'>Update</a> "; // The Update operation would typically be done on a separate page, hence we're using a link to navigate there.
												echo "<a href='?delete_id=".$row['staff_id']."' class='btn btn-delete btn-danger' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a></td>";
												echo "</td>";
												echo "</tr>";
											}
										} else 
										{
											echo "<tr><td colspan='8'>No results found</td></tr>";
										}
										$conn->close();									
									// output data of each row
									while($row = $result->fetch_assoc()){

										echo "<tr>";
										echo "<td>" . $row['staff_id'] . "</td>";
										echo "<td>" . $row['name'] . "</td>";
										echo "<td>" . $row['email'] . "</td>";
										echo "<td>" . $row['role'] . "</td>";
										echo "<td>" . $row['join_date'] . "</td>";
										echo "<td>";
										echo "<a href='update.php?id=".$row['staff_id']."' class='btn btn-update btn-primary'>Update</a> "; // The Update operation would typically be done on a separate page, hence we're using a link to navigate there.
										echo "<a href='?delete_id=".$row['staff_id']."' class='btn btn-delete btn-danger' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a></td>";
										echo "</td>";
										echo "</tr>";
									}
								} 
								else{
									echo "<tr><td colspan='8'>No results found</td></tr>";
								}
								$conn->close();		
								?>
							</table>
						</div>
					</div>
				</div>
        </div>
			</div>
    </div>
</div>

<?php include('includes/scripts.php'); ?>