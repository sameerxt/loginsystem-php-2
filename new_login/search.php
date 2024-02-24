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
            <a class="navbar-brand" href="hhome.php">Mini</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/new_login/hhome.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/new_login/search.php">Search a Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Registration</a>
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

    <div class="container mt-3 text-center">
        <h3>Search Student by ID or Phone Number</h3>
    </div>

    <div class="container my-4 text-center">
        <div class="container">
            <nav class="navbar bg-body-tertiary">
                <div class="container">
                    <form class="d-flex" role="search" action="search.php" method="post">
                        <input class="form-control me-2" name="get_id" type="search" placeholder="Search" aria-label="Search" required>
                        <button class="btn btn-outline-success" name="search" type="submit">Search</button>
                    </form>
                </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("config.php");
                if (isset($_POST['search'])) {
                    $id = $_POST['get_id'];
                    $query = "SELECT * FROM students WHERE CONCAT(id,name,email,subject,phone) LIKE '%$id%' ";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_array($query_run)) {
                ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                            </tr>
                        <?php


                        }
                    } else {

                        ?>
                        <tr>
                            <td collspan="4">No record found</td>
                        </tr>
                <?php
                    }
                }



                ?>
            </tbody>
        </table>
    </div>

</body>