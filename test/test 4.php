<!doctype html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Sign up page</h1>
        <h6>User Name<h6>
        <div class="first">
           <input  type="text" name="UserName" placeholder="Enter your UserName">
        </div>
        <h6>Password<h6>
        <div class="first">
           <input  type="text" name="password" placeholder="ENTER YOUR PASSWORD">
        </div>
        <h6>Confirm Password<h6>
        <div class="first">
           <input  type="text" name="cpassword" placeholder="CONFIRM YOUR PASSWORD">
        </div>
        <h6></h6>
        <div>
        <button type="submit">Submit</button>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $username1 = $_POST['username'];
            $password1 = $_POST['password'];
            $password2 = $_POST['cpassword'];
            print_r($username1);
          
            // Process the form data and perform necessary actions
            // e.g., validate, save to a database, send an email, etc.
          
            // Redirect the user to a different page after processing
            header('Location: success.php');
        }
        $username="root";
        $password="";
        $dsn="mysql:host=localhost;dbname=test";
        try{
            $connection=new PDO($dsn,$username,$password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected to db";
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
        $sql="insert into users(user_name,email) values('Ayesha','ayesha@gmail.com')";
        if($connection->query($sql)===true)
        {
            echo "added successfully";
        } ?>
    </body>
</html>