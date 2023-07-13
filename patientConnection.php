<?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'DrugDistributionDb';

// Create a connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ssn = $_POST['ssn'];
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $password = $_POST['password'];

    // Insert data into the patients table
    $query = "INSERT INTO patients (SSN, Name, Address, Age, Password) VALUES ('$ssn', '$name', '$address', '$age', '$password')";

    if (mysqli_query($connection, $query)) {
        header('Location: patientLogin.php');
    } else {
        echo "Error inserting data: " . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
?>

