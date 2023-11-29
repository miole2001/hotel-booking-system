<?php include('user/user-header.php'); ?>


<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title mt-3 mb-4">Update account</h3> 
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 ">
				<form action="#" method="POST">
					<div class="col-xl-5 col-md-4 mt-3">	

					<div class="card bg-success text-white mb-4">

						<div class="form-group">
						<label>Full name</label>
							<div class="cal-icon">
								<input type="text" class="form-control" id="name" name="name" value="<?php echo $users['full_name']; ?>" required> 
							</div>
						</div>

						<div class="form-group">
                        <label>Sex</label>
							<select class="form-control " id="sex" name="sex" value="<?php echo $users['gender']; ?>" required>
								<option>Select</option>
								<option value="male">male</option>
								<option value="female">female</option>
							</select>
						</div>
	
						<div class="form-group">
						<label>Email</label>
							<input type="text" class="form-control" id="email" name="email" value="<?php echo $users['email']; ?>"> 
						</div>
								
						<div class="form-group">
						<label>Username</label>
							<div>
								<input type="text" class="form-control" id="username" name="username" value="<?php echo $users['username']; ?>" required> 
							</div>
						</div>

						<div class="form-group">
						<label>Password</label>
							<div>
								<input type="text" class="form-control" id="password" name="password" value="<?php echo $users['pass']; ?>" required> 
							</div>
						</div>

						<div>
							<button type="submit" name="submit" id="submit" class="btn btn-primary btn-block mt-4 mb-4">Update account</button>
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('includes/scripts.php'); ?>