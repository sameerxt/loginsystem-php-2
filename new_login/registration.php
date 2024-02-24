<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/new_login/hhome.php">Mini</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/new_login/hhome.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/new_login/search.php">Search a Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="registration.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/new_login/contactus.php">Contact us</a>
                    </li>
                </ul>
                <a href="/new_login/logout.php">
                    <button class="btn btn-success">Logout</button>
                </a>


            </div>
        </div>
    </nav>

    <h3 class="text-center my-4">Register Here</h3>

    <div class="container my-4">


    <?php
require_once("config.php");

if (isset($_POST['submit'])) {
    $name = $_POST["namee"];
    $fname = $_POST["fname"];
    $email = $_POST['email'];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $user_Type = $_POST["userType"];
    

    $query = "INSERT INTO stf (`name`, `f_name`, `email`, `address`, `phone_no`, `subject`, `user_type`) VALUES ('$name', '$fname', '$email', '$address', '$phone', '$subject', '$user_Type')";
    $result = mysqli_query($conn, $query);

    if ($query) {
        echo "<div class='alert alert-success'>Your entry has beed submitted successfully.</div>";
    } else {
        echo "Something went wrong";
    }
}



?>



        <form class="row g-3" action="registration.php" method="post">
            <div class="col-md-6">
                <label for="namee" class="form-label"></label>
                <input type="text" placeholder="Name" class="form-control" id="name" name="namee">
            </div>
            <div class="col-md-6">
                <label for="fname" class="form-label"></label>
                <input type="text" placeholder="Father Name" class="form-control" name="fname" id="fname">
            </div>
            <div class="col-12">
                <label for="address" class="form-label"></label>
                <input type="email" placeholder="Email" class="form-control" name="email" id="email" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="address" class="form-label"></label>
                <input type="text" placeholder="Address" class="form-control" name="address" id="address" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label"></label>
                <input type="phone" placeholder="Phone No" class="form-control" name="phone" id="phone">
            </div>
            <div class="col-md-4">
                <label for="subject" class="form-label"></label>
                <select id="subject" name="subject" class="form-select">
                    <option selected>Subject...</option>
                    <option>Math</option>
                    <option>Science</option>
                    <option>Computer</option>
                    <option>Physics</option>
                </select>
            </div>
            <div class=" form-group lead container my-1">
                <label for="UserType">i'm a : </label>
                <input type="radio" name="userType" value="Student" class="custom-radion">&nbsp;Student |
                <input type="radio" name="userType" value="Teacher" class="custom-radion">&nbsp;Teacher |
                <input type="radio" name="userType" value="Staff" class="custom-radion">&nbsp;Staff
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</body>