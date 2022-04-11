<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Test App</title>
  </head>
  <body>
      
      <form action="process.php" method = "POST">
        <fieldset>
          <legend>Register</legend>

          <label for="Fname">First Name</label>
          <input type="text" name ="Fname" placeholder="Enter firstname">
          <label for="Lname">Last Name</label>
          <input type="text" name ="Lname" placeholder="Enter lastname">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder ="Enter email">
          <label for="num">Phone Number</label>
          <input type="number" name="num" placeholder ="phone number" min="0">
          <label for="address">address</label>
          <input type="text" name="add" placeholder ="address">
            
          <div>
            <input type="submit" value ="Submit">
          </div>

        </fieldset>
        
      </form>
  </body>
</html>