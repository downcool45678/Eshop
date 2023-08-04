        <?php
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            
            $username1 = $_POST['username'];
            $password1 = $_POST['password'];
            $password2 = $_POST['cpassword'];
            header('Location: success.php');
            
            print_r($username1);
            exit;
        }?>
