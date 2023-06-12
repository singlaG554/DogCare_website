<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
if(isset($_POST['sb2']))
 {
    require '_dbconnect.php';
    
    //login form
    $user_email = $_POST["lemail"];
    $luser_password = $_POST["lpswd"];

    //values from db
    $lsql = "SELECT * FROM `sign_up` WHERE `email` = '$user_email'";
    $lresult = mysqli_query($conn,$lsql);
    $rownum = mysqli_num_rows($lresult);
    if ($rownum == 1)
    {
        $row  = mysqli_fetch_assoc($lresult);
        if ($luser_password == $row['passwrd']) 
        {
            header("Location:../booking.html") ;
        }
        else
        {
            header("Location: ../Sign up.html") ;
        } 
    }
    else
    {
        echo"Incorrect email";
        header("Location: ../Sign up.html") ;
    }
}

?>