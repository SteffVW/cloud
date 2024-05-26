<?php
include 'config.php';

// Insert visit date into the database
$sql = "INSERT INTO visitTime (visit_date) VALUES (CURRENT_TIMESTAMP)";
if ($mysqli->query($sql) === TRUE) {
    echo "Visit date recorded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
