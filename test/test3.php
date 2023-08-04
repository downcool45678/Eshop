<!doctype html>
<html>
    <head></head>
    <body>
        <?php
        $username="root";
        $password="";
        $dsn="mysql.host=localhost,dbname=test";
        try{
            $connection=new PDO($dsn,$username,$password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected to db";
        }
        catch(PDOException $e){
            echo "can not link to database";
        }
        ?>
    </body>
</html>