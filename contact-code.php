<?php
session_start();
$con = mysqli_connect("localhost:4306", "root", "", "newsletter");

// Saves Information from contact.php to backend
if(isset($_POST['save_datetime']))
{

    $name = $_POST['name'];

    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $info = $_POST['info'];


    $query = "INSERT INTO contact (name,email,phone,info) VALUES ('$name','$email','$phone','$info')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Submitted successfully";
        include 'contact.php';
        echo "<script> alert('Submitted successfully')</script>";
        // header("Location: contact.php");

    }
    else
    {
        $_SESSION['status'] = "Enter All the details";
        header("Location: index.php");
    }
}
?>
