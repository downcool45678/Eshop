<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <?php
$hostname = 'localhost';      // MySQL server host
$username = 'root';  // MySQL username
$password = '';  // MySQL password
$database = 'test';  // MySQL database name

// Create a new MySQLi object
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query to retrieve data from the table
$sql = "SELECT * FROM users";

// Execute the query
$result = $conn->query($sql);
print_r($result);
// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Start generating HTML markup for the table
    echo "<table>";
    echo "<tr>";
    echo "<th>Column 1</th>";
    echo "<th>Column 2</th>";
    echo "<th>Column 3</th>";
    echo "</tr>";

    // Output each row of data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["user_name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }

    // End the table
    echo "</table>";
} else {
    echo "No data found.";
}

// Close the connection
$conn->close();
?>
</body>
</html>