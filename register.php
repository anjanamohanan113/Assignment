
<?php
ob_start();
session_start();
include "conn.php";

if(isset($_POST['btn_sub'])) {

    $type = $_POST['seltype'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $block = $_POST['block'];
    $village = $_POST['village'];
    $ins = "insert into tbl_registration (type, name, dob,
    email, phone, state, district, block, village) values 
    ('$type', '$name', '$dob', '$mail', '$phone',
    '$state', '$district', '$block', '$village')";
    if(mysqli_query($conn, $ins)) {
        echo "<script>alert('Registration completed');</script>";
    } else {
        echo "<script>alert('Registration failed');</script>";
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
    <script src="app.js"></script>
    <title>Registration</title>
</head>

<body>
    <nav>
        <a href="login.php"><i class="fas fa-arrow-left"></i></a>
        <h3><a href="register.php">Registration</a></h3>
    </nav>
    <main>
        <div class="registration">
            <form action="register.php" method="post" onsubmit="return validation_fn();">
                <table class="tbl_full">
                    <tr>
                        <td>Select Type:</td>
                        <td><input type="radio" name="seltype" id="type1" value="Indivudual" class="radio-padding">Individual
                        </td>
                        <td><input type="radio" name="seltype" id="type2" value="Organization"
                                class="radio-padding">Organization</td>
                    </tr>
                </table>
                <table  class="tbl_full padding-cell">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" id="name" ></td>
                    </tr>
                    <tr>
                        <td>Date of birth</td>
                        <td><input type="date" name="dob" max="<?php echo date("Y-m-d"); ?>" id="dob"></td>
                    </tr>
                    <tr>
                        <td>Mail id</td>
                        <td><input type="text" name="mail" id="mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter valid email id"></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="text" name="phone" id="phone" required pattern="[0-9]{10}" title="Enter 10 digit mobile number"></td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td>

                            <select name="state" id="state">
                                <option value=""></option>
                                <option value="Kerala">Kerala</option>
                                <option value="Tamilnadu">Tamilnadu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td>

                            <select name="district" id="district">
                                <option value=""></option>
                                <option value="Ernakulam">Ernakulam</option>
                                <option value="Kollam">Kollam</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Block</td>
                        <td>

                            <select name="block" id="block">
                                <option value=""></option>
                                <option value="Kothamangalam">Kothamangalam</option>
                                <option value="Muvattupuzha">Muvattupuzha</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Ward/Village</td>
                        <td>

                            <select name="village" id="village">
                                <option value=""></option>
                                <option value="Kothamangalam">Malappuram</option>
                                <option value="Muvattupuzha">Paravoor</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="button-center">
                    <button type="submit" name="btn_sub">
                        SUBMIT
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>