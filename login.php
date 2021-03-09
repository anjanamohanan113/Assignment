
<?php
ob_start();
session_start();
include "conn.php";
if(isset($_POST['btn_sub'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sel = "select * from tbl_login where username='$username' and password='$password';";
    $sel_row = mysqli_query($conn, $sel);
    if($row_data = mysqli_fetch_array($sel_row)) {
        $_SESSION['id']=$row_data['id'];
        header('Location: ./success.php');
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/efe2579d94.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>
    <nav>
        <h3><a href="login.php">Login</a></h3>
    </nav>
    <main>
        <div class="container">
            <form action="login.php" method="post">
                <div class="icon">
                    <i class="fas fa-running" style="font-size: 60px;"></i>
                </div>
                <p>portfolio LOGIN</p>
                <div class="fields">
                    <div class="input-group">
                        <span class="input-icon"> <i class="far fa-user"></i></span>
                        <input type="text" name="username" id="" class="login-txt" placeholder="Username" required>
                    </div>

                </div>
                <div class="fields">
                    <div class="input-group">
                        <span class="input-icon"> <i class="fas fa-lock"></i></span>
                        <input type="password" name="password" id="" class="login-txt" placeholder="Password" required>
                    </div>

                </div>
                <div class="fields">
                    <button type="submit" name="btn_sub">
                        Sign in
                    </button>
                </div>

                <div class="link">
                    <p>New user?</p>
                    <a href="register.php">Register now</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>