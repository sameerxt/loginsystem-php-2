<?php
require_once("config.php");

if(isset($_POST['submit'])){
    $name = $_POST['nam3'];
    $email = $_POST['email'];
    $desc =  $_POST['desc'];


    $query = "INSERT INTO contact_us (name, email, description) VALUES ('$name', '$email', '$desc')";
    $result = mysqli_query($conn, $query);

    if($query)
    {
        echo "<div class='alert alert-success'>Your entry has beed submitted successfully.</div>";
    }
    else {
        die("Something went wrong");
    }
    
} 





?>






<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
                        <a class="nav-link" aria-current="page" href="/new_login/home.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/new_login/search.php">Search a Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Registration</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/new_login/contact.php">Contact us</a>
                    </li>
                </ul>
                <a href="/new_login/logout.php">
                    <button class="btn btn-success">Logout</button>
                </a>


            </div>
        </div>
    </nav>

    <div class="container my-4">
        <form action="contactus.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="nam3" id="nam3">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>