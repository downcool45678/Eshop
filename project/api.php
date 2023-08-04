<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if the required parameters are present
    if (isset($_GET['param1']) && isset($_GET['param2'])) {
        // Access the parameters sent via the URL
        $param1 = $_GET['param1'];
        $param2 = $_GET['param2'];

        // Process the parameters or perform any necessary actions
        // ...

        // Return the response as JSON
        $response = array('result' => 'success');
        echo json_encode($response);
    } else {
        // Required parameters are missing
        $response = array('error' => 'Missing parameters');
        echo json_encode($response);
    }
}
?>
