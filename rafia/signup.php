
<?php
$dsn = "mysql:host=localhost;dbname=test";
$username = "root";
$password = "";

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected Successfully';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email=$_POST['email'];

    $sql = "SELECT * FROM users WHERE user_name='$username'";
    $stmt = $connection->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$result) 
    {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user_name, email, password) VALUES ('$username', '$email' ,'$hash')";
            $connection->exec($sql);
            $showAlert = true;
            echo ' logged in successfully';
        } else {
           echo ' Passwords do not match';
        }
    } 
    else {
        echo 'Username not available';
    }  


} catch (PDOException $check) {
    echo 'Connection Failed ' . $check->getMessage();
}
?>"