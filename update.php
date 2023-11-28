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

if(isset($_POST['submit'])) {
    
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

<div class="profile-container">
    <h1>Update User Profile</h1>

        <!-- The form action is this file itself -->
        <form action="" method="post">
        Staff ID: <input type="text" name="id" value="<?php echo $user['staff_id']; ?>"><br>
        Full Name: <input type="text" name="name" value="<?php echo $user['name']; ?>"><br>
        Email Address: <input type="text" name="email" value="<?php echo $user['email']; ?>"><br>
        Role: <input type="text" name="role" value="<?php echo $user['role']; ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>

<?php include('includes/scripts.php') ?>