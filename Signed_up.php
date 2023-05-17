<!-- import "../partials/_dbconnect.php"; -->
<?php
if(isset($_POST['sb']))
{
    require 'partials/_dbconnect.php';
    $username = $_POST['txt'];
    $email = $_POST['email1'];
    $password = $_POST['pswd1'];
    $sql = "INSERT INTO `sign_up`(`username`, `email`, `passwrd`) values ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        header("Location: SignedupSuccessfully.html");
    }
    else{

    }
}
?>

