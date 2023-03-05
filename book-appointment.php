<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirend/Book Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
a, a:hover, a:focus, a:active {
     text-decoration: none;
     color: #fff;
}

.home-btn{
  background-color: #07C295;
  color: #fff;
}

.home-btn:hover{
  background-color: #2b6777;
  color: #fff;
}
</style>
<body>

  <!-- Status shown if submit successful -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                  <!-- Form Section -->
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Fill In Your Details</h4>
                    </div>
                    <button type="button" class="btn btn-lg btn-outline-light home-btn" ><a href="index-copy.php">Click Here To Go Back To Home</a></button>

                    <div class="card-body">

                        <form action="code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="occassion">Occasion</label>

                                <!-- <input type="text" name="occassion" class="form-control"> -->
                                <select name="occassion" id="occassion-types" class="form-control">
                                  <option value="wedding" >Wedding</option>
                                  <option value="prewedding">Pre-Wedding</option>
                                  <option value="oneyear" >One Year Birthday</option>
                                  <option value="birthday">Birthdays</option>
                                  <option value="family">Family Pictures</option>
                                  <option value="vacation">Vacation</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Date and Time you want to shoot?</label>
                                <input type="datetime-local" name="event_dt" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Where should we meet?</label>
                                <input type="text" name="place" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Number of Hours Required</label>
                                <select name="hours" id="hours-types" class="form-control">
                                  <option value="1" >1</option>
                                  <option value="2">2</option>
                                  <option value="3" >3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Full Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone Number</label>
                                <input type="int" name="phone" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Additional Info</label>
                                <input type="text" name="info" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_datetime" class="btn btn-primary home-btn">Make An Appointment</button>
                            </div>
                        </form>
                          </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
