<?php
// Database connection configuration
$host = "localhost";
$username = "root";
$password = "";
$dbName = "drugdistributiondb";

// Establish a database connection
$conn = new mysqli($host, $username, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a form submission is made to update a record in the Drugs table
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['drug_update'])) {
    $id = $_POST['drug_id'];
    $tradeName = $_POST['trade_name'];
    $formula = $_POST['formula'];
    $companyID = $_POST['company_id'];

    // Update record in the Drugs table
    $query = "UPDATE Drugs SET TradeName = '$tradeName', Formula = '$formula', CompanyID = '$companyID' WHERE ID = '$id'";

    if ($conn->query($query) === TRUE) {
        echo "Record updated in Drugs table successfully.";
    } else {
        echo "Error updating record in Drugs table: " . $conn->error;
    }
}

// Check if a form submission is made to delete a record from the Drugs table
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['drug_delete'])) {
    $id = $_POST['drug_id'];

    // Delete record from the Drugs table
    $query = "DELETE FROM Drugs WHERE ID = '$id'";

    if ($conn->query($query) === TRUE) {
        echo "Record deleted from Drugs table successfully.";
    } else {
        echo "Error deleting record from Drugs table: " . $conn->error;
    }
}

// Check if a form submission is made to update a record in the Pharmacies table
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pharmacy_update'])) {
    $id = $_POST['pharmacy_id'];
    $name = $_POST['pharmacy_name'];
    $address = $_POST['pharmacy_address'];
    $phoneNumber = $_POST['pharmacy_phone_number'];

    // Update record in the Pharmacies table
    $query = "UPDATE Pharmacies SET Name = '$name', Address = '$address', PhoneNumber = '$phoneNumber' WHERE ID = '$id'";

    if ($conn->query($query) === TRUE) {
        echo "Record updated in Pharmacies table successfully.";
    } else {
        echo "Error updating record in Pharmacies table: " . $conn->error;
    }
}

// Check if a form submission is made to delete a record from the Pharmacies table
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pharmacy_delete'])) {
    $id = $_POST['pharmacy_id'];

    // Delete record from the Pharmacies table
    $query = "DELETE FROM Pharmacies WHERE ID = '$id'";

    if ($conn->query($query) === TRUE) {
        echo "Record deleted from Pharmacies table successfully.";
    } else {
        echo "Error deleting record from Pharmacies table: " . $conn->error;
    }
}

// Check if a form submission is made to update a record in the Patients table
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['patient_update'])) {
    $id = $_POST['patient_id'];
    $name = $_POST['patient_name'];
    $address = $_POST['patient_address'];
    $age = $_POST['patient_age'];
    $primaryPhysicianID = $_POST['patient_primary_physician_id'];

    // Update record in the Patients table
    $query = "UPDATE Patients SET Name = '$name', Address = '$address', Age = '$age', PrimaryPhysicianID = '$primaryPhysicianID' WHERE ID = '$id'";

    if ($conn->query($query) === TRUE) {
        echo "Record updated in Patients table successfully.";
    } else {
        echo "Error updating record in Patients table: " . $conn->error;
    }
}

// Check if a form submission is made to delete a record from the Patients table
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['patient_delete'])) {
    $id = $_POST['patient_id'];

    // Delete record from the Patients table
    $query = "DELETE FROM Patients WHERE ID = '$id'";

    if ($conn->query($query) === TRUE) {
        echo "Record deleted from Patients table successfully.";
    } else {
        echo "Error deleting record from Patients table: " . $conn->error;
    }
}

// Retrieve and display Drugs information
$queryDrugs = "SELECT * FROM Drugs";
$resultDrugs = $conn->query($queryDrugs);

if ($resultDrugs->num_rows > 0) {
    echo "<h2>Drugs</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Trade Name</th><th>Formula</th><th>Company ID</th><th>Actions</th></tr>";

    while ($row = $resultDrugs->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["TradeName"] . "</td>";
        echo "<td>" . $row["Formula"] . "</td>";
        echo "<td>" . $row["CompanyID"] . "</td>";
        echo "<td>
                <form action='' method='POST'>
                    <input type='hidden' name='drug_id' value='" . $row["ID"] . "'>
                    <input type='submit' name='drug_update' value='Update'>
                    <input type='submit' name='drug_delete' value='Delete'>
                </form>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No drugs found.";
}

// Retrieve and display Pharmacies information
$queryPharmacies = "SELECT * FROM Pharmacies";
$resultPharmacies = $conn->query($queryPharmacies);

if ($resultPharmacies->num_rows > 0) {
    echo "<h2>Pharmacies</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Phone Number</th><th>Actions</th></tr>";

    while ($row = $resultPharmacies->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Address"] . "</td>";
        echo "<td>" . $row["PhoneNumber"] . "</td>";
        echo "<td>
                <form action='' method='POST'>
                    <input type='hidden' name='pharmacy_id' value='" . $row["ID"] . "'>
                    <input type='submit' name='pharmacy_update' value='Update'>
                    <input type='submit' name='pharmacy_delete' value='Delete'>
                </form>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No pharmacies found.";
}

// Retrieve and display Patients information
$queryPatients = "SELECT * FROM Patients";
$resultPatients = $conn->query($queryPatients);

if ($resultPatients->num_rows > 0) {
    echo "<h2>Patients</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Age</th><th>Primary Physician ID</th><th>Actions</th></tr>";

    while ($row = $resultPatients->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Address"] . "</td>";
        echo "<td>" . $row["Age"] . "</td>";
        echo "<td>" . $row["PrimaryPhysicianID"] . "</td>";
        echo "<td>
                <form action='' method='POST'>
                    <input type='hidden' name='patient_id' value='" . $row["ID"] . "'>
                    <input type='submit' name='patient_update' value='Update'>
                    <input type='submit' name='patient_delete' value='Delete'>
                </form>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No patients found.";
}

// Close the database connection
$conn->close();
?>


