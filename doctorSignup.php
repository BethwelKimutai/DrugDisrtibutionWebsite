<!DOCTYPE html>
<html>
    <head>
        <h3>Doctor's Signup</h3>
        <link rel="stylesheet" href = "signup.css">
    </head>
    <body>
    <form action="doctorLogin.php" method="POST">
    <label for="ssn">SSN:</label>
  <input type="text" id="ssn" name="ssn" required>
  <br>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>
  <br>
  <label for="specialty">Specialty:</label>
  <input type="text" id="specialty" name="specialty" required>
  <br>
  <label for="experience">Years of Experience:</label>
  <input type="number" id="experience" name="experience" required>
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  <br>
  <input type="submit" value="Sign Up">
</form>

    </body>
</html>