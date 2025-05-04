<?php
include 'db.php';

$name = $_POST['name'];
$diagnosis = $_POST['diagnosis'];
$status = $_POST['status'];

$sql = "INSERT INTO patients (name, diagnosis, status) VALUES ('$name', '$diagnosis', '$status')";

if ($conn->query($sql) === TRUE) {
    header("Location: patient_list.php");
} else {
    echo "Error: " . $conn->error;
}
?>
