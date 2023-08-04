!DOCTYPE HTML 
<html>
    <body><form action="api.php" method="POST">
    <input type="text" name="param1" value="value1">
    <input type="text" name="param2" value="value2">
    <input type="submit" value="Submit">
</form><?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Access the data sent via the POST request
    $param1 = $_POST['param1'];
    $param2 = $_POST['param2'];

    // Process the parameters or perform any necessary actions
    // ...

    // Return the response as JSON
    $response = array('result' => 'success');
    echo json_encode($response);
}
?>
</body>
</html>
