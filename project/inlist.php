<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Database Data</title>
</head>

<body>
    <div class="container my-4">
        <h1 class="text-center">Database Data</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>password</th>

                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection settings
                $username = 'root';
                $password = '';

                try {
                    // Create a new PDO instance
                    $pdo = new PDO("mysql:host=localhost;dbname=mytable", $username, $password);

                    // Set the PDO error mode to exception
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Query to retrieve data from the database table
                    $query = "SELECT email, username, password FROM usertable";
                    $stmt = $pdo->query($query);

                    // Fetch data and display it in table rows
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
