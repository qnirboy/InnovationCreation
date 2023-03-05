<?php
session_start();
$con = mysqli_connect("localhost:4306", "root", "", "newsletter");

// Saves Details from book-appointment.php to backend
if(isset($_POST['save_datetime']))
{
    $occassion = $_POST['occassion'];
    $event_dt = $_POST['event_dt'];
    $place = $_POST['place'];
    $hours = $_POST['hours'];
    $name = $_POST['name'];

    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $info = $_POST['info'];


    $query = "INSERT INTO appointment (occassion,eventdt,place,hours,name,email,phone,info) VALUES ('$occassion','$event_dt','$place','$hours','$name','$email','$phone','$info')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Appointment Confirmed";
        echo "<script> alert('Appointment Confirmed')</script>";
        include 'book-appointment.php';

    }
    else
    {
        $_SESSION['status'] = "Enter All the details";
        include 'index-copy.php';
    }
}
?>
