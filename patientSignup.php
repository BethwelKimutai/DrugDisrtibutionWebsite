<!DOCTYPE html>
<html>
<head>
  <title>Patient Signin</title>
</head>
<body>
  <h2>patient Signin</h2>
  
  <form method="POST" action="patientConnection.php">
    <label for="ssn">SSN:</label>
    <input type="text" id="ssn" name="ssn" required><br><br>
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required><br><br>
    
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <button type="submit">Sign In</button>
  </form>
</body>
</html>