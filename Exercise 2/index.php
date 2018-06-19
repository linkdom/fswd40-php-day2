<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 2</title>
  </head>
  <body>
    <!--
      Create a PHP script which will accept two parameters from form (name and surname). User must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname.
    -->
    <form action="output.php" method="POST" accept-charset="utf-8">
      <label>
        <input type="text" name="firstname" placeholder="Firstname">
      </label>
      <label>
        <input type="text" name="lastname" placeholder="Lastname">
      </label>
      <input type="submit" name="submit" value="submit" href="output.php">
    </form>
  </body>
</html>
