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
                <form action="#" method="POST">
                    <div class="col-md-4 mt-3">
                        <div class="form-group">
                            <label>Staff ID</label>
                            <div>
                                <input type="text" class="form-control" id="staff-id" name="staff-id" value="<?php echo $staff['staff_id']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Full name</label>
                            <div>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $staff['name']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Sex</label>
                            <select class="form-control " id="sex" name="sex" value="<?php echo $staff['sex']; ?>" required>
                                <option>Select</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <div class="cal-icon">
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $staff['email']; ?>" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Contact number</label>
                            <div class="cal-icon">
                                <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $staff['contact_num']; ?>" required>
                            </div>
                        </div>

                        <label>Role</label>
                        <select class="form-control " id="role" name="role" value="<?php echo $staff['role']; ?>" required>
                            <option>Select</option>
                            <option value="Manager">Manager</option>
                            <option value="Staff">Staff</option>
                            <option value="Room Cleaners">Room Cleaners</option>
                            <option value="Accountant">Accountant</option>
                            <option value="Receiptionalist">Receiptionalist</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block mt-3">Update Staff</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/scripts.php') ?>