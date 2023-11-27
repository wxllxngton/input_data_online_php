<?php
    // Establish connection to the MySQL Server
    $connection = mysqli_connect('localhost', 'root');

    // Check if the connection is successful
    if ($connection) {
        echo "<p class='text-center text-green m-0'>Connection successful.</p>";
    } else {
        echo "<p class='text-center text-red m-0'>Connection failed.</p>";
    }

    // Select the 'student' database
    mysqli_select_db($connection, 'kca');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Retrieve all records from the table "student_details" and store them in an array called $records
        $query = "SELECT * FROM student_details";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "<p class='text-center text-green m-0'>Data retrieved successfully</p>";
        } else {
            echo "<p class='text-center text-red m-0'>Error: " . mysqli_error($connection) . "</p>";
        }
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

        <title>Input Details Online | View</title>

        <!-- External CSS -->
        <link rel="stylesheet" href="./static/css/style.css" />
    </head>
    <body>
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

        <section class="container">
            <!-- Table -->
            <div class="table-responsive mx-auto">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Reg No.</th>
                            <th scope="col">Course</th>
                            <th scope="col">Guardian Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($result) {
                        // Fetch and display data
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <th scope='row'>{$row['id']}</th>
                                    <td>{$row['f_name']}</td>
                                    <td>{$row['m_name']}</td>
                                    <td>{$row['l_name']}</td>
                                    <td>{$row['age']}</td>
                                    <td>{$row['phone_no']}</td>
                                    <td>{$row['reg_no']}</td>
                                    <td>{$row['course']}</td>
                                    <td>{$row['guardian_name']}</td>
                                </tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
