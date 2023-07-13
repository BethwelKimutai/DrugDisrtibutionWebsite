<?php
// Database connection configuration
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "drugdistributiondb";

// Establish a database connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ssn = $_POST["ssn"];
    $password = $_POST["password"];

    // Query the database to check user credentials
    $query = "SELECT * FROM patients WHERE SSN = '$ssn' AND Password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Patient login successful
        $row = $result->fetch_assoc();
        $patientID = $row["ID"];
        // Redirect to patient main page
        header("Location: patientMainPage.php?id=$patientID");
        exit();
    } else {
        $query = "SELECT * FROM doctors WHERE SSN = '$ssn' AND Password = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            // Doctor login successful
            $row = $result->fetch_assoc();
            $doctorID = $row["ID"];
            // Redirect to doctor main page
            header("Location: doctorMainPage.php?id=$doctorID");
            exit();
        } else {
            $query = "SELECT * FROM pharmacies WHERE Name = '$ssn' AND Password = '$password'";
            $result = $conn->query($query);

            if ($result->num_rows == 1) {
                // Pharmacy login successful
                $row = $result->fetch_assoc();
                $pharmacyID = $row["ID"];
                // Redirect to pharmacy main page
                header("Location: pharmacyMainPage.php?id=$pharmacyID");
                exit();
            } else {
                // Invalid credentials, redirect to login page
                header("Location: login.php?error=Invalid Credentials");
                exit();
            }
        }
    }
}
?>
