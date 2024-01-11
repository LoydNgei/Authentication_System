<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $sql = "SELECT * FROM `registration` WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if($result) {
        $num = mysqli_num_rows($result);
        if($num > 0) {
            echo "Login successful";
        } else {
            echo "Invalid data";
        }
    }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>







    <h1 class="text-center mt-3">Login to our website</h1>
    <div class="container mt-5">
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter userName" name="username">
            </div>

            <div class="form-group">
                <label for="inputPassword6" class="col-form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Login</button>
        </form>
    </div>
  </body>
</html>