<?php

include "connection.php";

$successMsg = '';
$errorMsg = '';
$eventsFromDB = [];

$result = $conn->query("SELECT * FROM appointments");

if ($result instanceof mysqli_result) {
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Free the result set
    $result->free();
}

$conn->close();

?>