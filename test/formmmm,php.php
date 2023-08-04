<!DOCTYPE html>
<html>
    <head></head>
    <body>
      <?php
      class User {
        private $conn; // Database connection object
        
        public function __construct($conn) {
            $this->conn = $conn;
        }
        
        public function register($name, $email, $password) {
            // Hash the password for security
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            // Prepare and execute the SQL query
            $stmt = $this->conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashedPassword);
            $stmt->execute();
            
            // Check if the registration was successful
            if ($stmt->affected_rows > 0) {
                return true; // Registration successful
            } else {
                return false; // Registration failed
            }
        }
    }
?>    
            <h2>Registration Form</h2>
    <form method="post" action="register.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];
    $password2 = $_POST['cpassword'];
    header('Location: success.php');
    
    print_r($username1);
    
$database = "your_database_name";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

// Create an instance of the User class
$user = new User($conn);

// Register the user
if ($user->register($name, $email, $password)) {
    echo "Registration successful!";
} else {
    echo "Registration failed!";
}

// Close the database connection
$conn->close();
?>
/
<?php
require_once 'User.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Create a database connection
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mytable";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

// Create an instance of the User class
$user = new User($conn);

// Register the user
if ($user->register($name, $email, $password)) {
    echo "Registration successful!";
} else {
    echo "Registration failed!";
}

// Close the database connection
$conn->close();

}?>






        </body>
        </html>
        