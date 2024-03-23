<?php
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];

    // Convert endDate to include the entire day
    $endDate = date('Y-m-d', strtotime($endDate . ' +1 day'));

    require '../functions/makeSqlConnectionToOwn.php';

    $sql = "SELECT * FROM historicoentregas WHERE `data` >= '$startDate' AND `data` < '$endDate'";
    $result = $conn->query($sql);

    $data = array(); // Create an array to hold the data

    if($result) {
        // Fetch all rows and add to the data array
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Output the data as JSON
        echo json_encode($data);
    } else {
        // Handle the error case
        echo json_encode(array('error' => 'No results found.'));
    }
?>
