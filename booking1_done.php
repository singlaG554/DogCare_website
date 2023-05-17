<!-- import "../partials/_dbconnect.php"; -->
<?php
if(isset($_POST['sb']))
{
    require 'partials/_dbconnect.php';
    $username = $_POST['bname'];
    $email = $_POST['bmail'];
    $phone = $_POST['bphone'];
    $in = date('Y-m-d', strtotime($_POST['check_in']));
    $out = date('Y-m-d', strtotime($_POST['check_out']));
    $sql = "INSERT INTO `booking`(Name, Email, Contact, Check_in, Check_out) values ('$username', '$email', '$phone', '$in', '$out')";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        header("Location: Booking2.html");
    }
    else{

    }
}
?>

