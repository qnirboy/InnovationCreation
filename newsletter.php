<!DOCTYPE html>
<html>

<!-- <head>
    <title>Insert Page</title>
</head> -->

<body>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost:4306", "root", "", "newsletter");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $email = $_REQUEST['email'];
        // $last_name = $_REQUEST['last_name'];
        // $gender = $_REQUEST['gender'];
        // $address = $_REQUEST['address'];
        // $email = $_REQUEST['email'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO subscription_form VALUES ('$email')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            // echo "<h3>data stored in a database successfully."
            //     . " Please browse your localhost php my admin"
            //     . " to view the updated data</h3>";


            include 'index-copy.php';

            echo '<script>alert("Subscribed successfully")</script>';

            // header("Location: index-copy.php");



        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
