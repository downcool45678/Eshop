<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>User Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dsn = "mysql:host=localhost;dbname=test";
                $username = "root";
                $password = "";

                // Number of rows to display per page
                $rowsPerPage = 1;

                try {
                    $connection = new PDO($dsn, $username, $password);
                    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Get the current page number from the URL query parameter
                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                    // Calculate the offset for the LIMIT clause
                    $offset = ($currentPage - 1) * $rowsPerPage;

                    // Query to retrieve limited rows based on the current page and rows per page
                    $sql = "SELECT user_id, user_name ,email FROM users LIMIT $offset, $rowsPerPage";
                    $stmt = $connection->query($sql);
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['user_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "</tr>";
                    }

                    // Query to get the total number of rows
                    $totalRowsQuery = "SELECT COUNT(*) AS total FROM users";
                    $totalRowsStmt = $connection->query($totalRowsQuery);
                    $totalRowsResult = $totalRowsStmt->fetch(PDO::FETCH_ASSOC);
                    $totalRows = $totalRowsResult['total'];

                    // Calculate the total number of pages
                    $totalPages = ceil($totalRows / $rowsPerPage);

                    // Display pagination links
                    echo "<nav>";
                    echo "<ul class='pagination'>";

                    // Previous page link
                    if ($currentPage > 1) {
                        echo "<li class='page-item'><a class='page-link' href='?page=" . ($currentPage - 1) . "'>Previous</a></li>";
                    }

                    // Page links
                    for ($i = 1; $i <= $totalPages; $i++) {
                        echo "<li class='page-item";
                        if ($i == $currentPage) {
                            echo " active";
                        }
                        echo "'><a class='page-link' href='?page=$i'>$i</a></li>";
                    }

                    // Next page link
                    if ($currentPage < $totalPages) {
                        echo "<li class='page-item'><a class='page-link' href='?page=" . ($currentPage + 1) . "'>Next</a></li>";
                    }

                    echo "</ul>";
                    echo "</nav>";

                } catch (PDOException $e) {
                    echo 'Connection failed: ' . $e->getMessage();
                }
                ?>
            </
