<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <?php
      session_start();
      if(isset($_SESSION["username"])) {
        // If the user is already logged in, redirect to the homepage
        header("Location: products.php");
        exit();
      }
      if(isset($_POST["username"]) && isset($_POST["password"])) {
        // Check if the submitted username and password are correct
        $username = $_POST["username"];
        $password = $_POST["password"];
        $conn = new mysqli("localhost", "root", "", "mydb");
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 1) {
          $row = $result->fetch_assoc();
          if($password == $row["password"]) {
            // If the username and password are correct, set the session variable and redirect to the homepage
            $_SESSION["username"] = $username;
            header("Location: products.php");
            exit();
          } else {
            // If the password is incorrect, display an error message
            echo "<p>Invalid password. Please try again.</p>";
          }
        } else {
          // If the username is incorrect, display an error message
          echo "<p>Invalid username. Please try again.</p>";
        }
      }
    ?>
    <form method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br>

      <input type="submit" value="Login">
    </form>
  </body>
</html>
