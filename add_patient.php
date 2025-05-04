<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
</head>
<body>
    <h2>Add New Patient</h2>
    <form method="POST" action="save_patient.php">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>
        <label>Diagnosis:</label><br>
        <input type="text" name="diagnosis" required><br><br>
        <label>Status:</label><br>
        <select name="status">
            <option value="Admitted">Admitted</option>
            <option value="Discharged">Discharged</option>
        </select><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
