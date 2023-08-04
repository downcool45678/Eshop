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
                    <th>Name</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dsn = 'mysql:host=localhost;dbname=mytable';
                $username = 'root';
                $password = '';

                try {
                    $connection = new PDO($dsn, $username, $password);
                    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $query = "SELECT email, username, cpassword FROM usertable";
                    $stmt = $connection->query($query);

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['cpassword'] . "</td>";
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
