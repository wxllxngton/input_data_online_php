<?php
    // Establish a connection to the MySQL server
    $connection = mysqli_connect('localhost', 'root', '');

    // Check if the connection is successful
    if ($connection) {
    echo "<p class='text-center text-green m-0'>Connection successful</p>";
    } else {
    echo "<p class='text-center text-red m-0'>Connection failed: " . mysqli_connect_error() . "</p>";
    }


    // Select the 'student' database
    mysqli_select_db($connection, 'kca');

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $f_name = $_POST['f_name'];
        $m_name = $_POST['m_name'];
        $l_name = $_POST['l_name'];
        $age = $_POST['age'];
        $phone_no = $_POST['phone_no'];
        $reg_no = $_POST['reg_no'];
        $course = $_POST['course'];
        $guardian_name = $_POST['guardian_name'];

        // Insert data into the 'student_details' table
        $query = "INSERT INTO student_details (f_name, m_name, l_name, age, phone_no, reg_no, course, guardian_name) VALUES ('$f_name', '$m_name', '$l_name', $age, '$phone_no', '$reg_no', '$course', '$guardian_name')";

        // Execute the query
        $result = mysqli_query($connection, $query);

        // Check if the query was successful
        if ($result) {
            echo "<p class='text-center text-green m-0'>Data inserted successfully</p>";
        } else {
            echo "<p class='text-center text-red m-0'>Error: " . mysqli_error($connection). "</p>";
        }

        header('location:index.php'); // Redirects to index page

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />

        <!-- Font Awesome Script -->
        <script
            src="https://kit.fontawesome.com/321779f561.js"
            crossorigin="anonymous"
        ></script>

        <title>Input Details Online | Home</title>

        <!-- External CSS -->
        <link rel="stylesheet" href="./static/css/style.css" />
    </head>
    <body style="overflow: hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-dark bg-dark sticky-top">
            <div class="container-fluid d-flex justify-content-center">
                <span class="navbar-brand mb-0 h1"
                    ><a href="./index.php" class="nav-link"
                        ><i class="fa-solid fa-plus" style="color: #e5dbff"></i>
                        Input Details Online</a
                    ></span
                >
            </div>
        </nav>

        <div class="jumbotron">
            <div class="container">
                <form method="POST" action="" onsubmit="return validateForm()">
                    <div class="form-row">
                        <div class="col col-3-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="First name"
                                name="f_name"
                                required
                            />
                        </div>
                        <div class="col col-3-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Middle name"
                                name="m_name"
                            />
                        </div>
                        <div class="col col-3-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Last name"
                                name="l_name"
                                required
                            />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col col-3-2">
                            <input
                                type="number"
                                class="form-control"
                                placeholder="Age"
                                min="16"
                                name="age"
                                required
                            />
                        </div>
                        <div class="col col-3-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Phone No."
                                name="phone_no"
                                required
                            />
                        </div>
                        <div class="col col-3-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Reg. No"
                                name="reg_no"
                                required
                            />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col col-alone">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Course"
                                name="course"
                                required
                            />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col col-alone">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Guardian Name"
                                name="guardian_name"
                                required
                            />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-outline-light">
                                Add
                            </button>
                            <a
                                class="btn btn-outline-light"
                                href="./view-all.php"
                            >
                                View All Registered
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>

        <!-- External script -->
        <script src="./static/js/script.js"></script>
    </body>
</html>

