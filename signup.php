<?php include('config/conn.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pass = $_POST["password"];
    $cpass = $_POST["confirm_password"];
    $type = $_POST["user_type"];

    if($pass == $cpass)
    {

    $register = "INSERT INTO users (full_name, gender, email, username, pass, user_type) 
                VALUES ('$name','$gender','$email','$username','$pass','$type')";

    $result = mysqli_query($conn, $register);

    header("Location: login.php");
    }
    else
    {

        echo " <script> alert('password does not match'); </script> ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup User</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>

    <div class="login">
        <h3>Signup</h3>

        <form action="#" method="POST">
            <div class="input_box">
                <input type="text" placeholder="Full Name" name="name" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="text" placeholder="Gender" name="gender" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="email" placeholder="Email Address" name="email" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="text" placeholder="Username" name="username" autocomplete="off" required>     
            </div>

            <div class="input_box">
                <input type="password" placeholder="Password" name="password" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="password" placeholder="Confirm Password" name="confirm_password" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="text" placeholder="user" name="user_type" value="user" autocomplete="off" required>
            </div>

            <div>
            <button type="submit" name="signup_btn" class="button">Signup</button>
            </div>

            <div class="link">
                <p>
                    Not yet Registered? <a href="login.php">Login</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>