<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Bayambang District Hospital</h2>
    <h3>Patient List</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Diagnosis</th>
            <th>Status</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM patients");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['diagnosis']}</td>
                <td>{$row['status']}</td>
            </tr>";
        }
        ?>
    </table>
    <br>
    <a href="add_patient.php">Add New Patient</a>
</body>
</html>
