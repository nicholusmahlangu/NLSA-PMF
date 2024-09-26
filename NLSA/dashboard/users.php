<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Users</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    
    <!-- Template -->
    <link rel="stylesheet" href="public/graindashboard/css/graindashboard.css">
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
<header class="header bg-body">
    <!-- Navbar content -->
</header>
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
    <!-- Sidebar content -->
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">

                <div class="card-body">
                    <!-- Breadcrumb -->
                    <!-- Breadcrumb content -->
                    <div class="mb-3 mb-md-4 d-flex justify-content-between">
                        <div class="h3 mb-0">Users</div>
                    </div>


                    <!-- Users -->
                    <div class="table-responsive-xl">
                        <table class="table text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Email</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Registration Date</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                                <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                             $servername = "localhost";
                             $username = "root"; // Default username for XAMPP
                             $password = ""; // Default password for XAMPP
                             $database = "nlsa"; // Change this to your actual database name
                            // Include the PHP code for database connection
                            include_once 'Conn.php';

                            // Create a new instance of the mysqli object
                            $Conn = new mysqli($servername, $username, $password, $database);

                            // Check connection
                            if ($Conn->connect_error) {
                                die("Connection failed: " . $Conn->connect_error);
                            }

                            // SQL query to retrieve user data
                            $sql = "SELECT * FROM users";
                            $result = $Conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td class='py-3'>" . $row["id"] . "</td>";
                                    echo "<td class='align-middle py-3'>" . $row["name"] . "</td>";
                                    echo "<td class='py-3'>" . $row["email"] . "</td>";
                                    echo "<td class='py-3'>" . $row["registration_date"] . "</td>";
                                    echo "<td class='py-3'>" . $row["status"] . "</td>";
                                    echo "<td class='py-3'>";
                                    echo "<div class='position-relative'>";
                                    echo "<a class='link-dark d-inline-block' href='#'><i class='gd-pencil icon-text'></i></a>";
                                    echo "<a class='link-dark d-inline-block' href='#'><i class='gd-trash icon-text'></i></a>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No users found</td></tr>";
                            }

                            // Close connection
                            $Conn->close();
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Users -->
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<!-- Footer content -->
<script src="public/graindashboard/js/graindashboard.js"></script>
<script src="public/graindashboard/js/graindashboard.vendor.js"></script>

</body>
</html>
