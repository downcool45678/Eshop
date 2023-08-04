<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    
    {
        // Retrieve form data
        $user = $_POST['name'];
        $pass= $_POST['password'];
        $email = $_POST['email'];
    
        // Use the variables as needed
        echo "Name: " . $user . "<br>";
        echo "Password: " . $pass . "<br>";
        echo "email: " . $email . "<br>";

        //connection of database
       
        $dsn = 'mysql:host=localhost;dbname=mytable';
$username = 'root';
$password = '';
//connection to the database.........
try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database successfully.";

    // Prepare and execute the SQL query to insert data
    $query = "INSERT INTO usertable (username, cpassword, email) VALUES (:user, :pass, :email)";
    $statement = $connection->prepare($query);
    $statement->bindParam(':user', $user);
    $statement->bindParam(':pass', $pass);
    $statement->bindParam(':email', $email);
    $statement->execute();

    echo "Data saved successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
}
?>
</body>
</html>
