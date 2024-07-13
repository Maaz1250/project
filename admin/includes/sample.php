<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db = "backpackers";
$conn = mysqli_connect($localhost, $username, $password, $db);

if($conn){
    echo 'database connected';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $password = ($_POST['pass']);

    $sql = "INSERT INTO dummy (username, password) VALUES ('$uname', '$password')";
    if(mysqli_query($conn, $sql)){
        echo 'data inserted';
    } else {
        echo 'data not inserted';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="uname" name="uname">
        <label for="password">Password:</label>
        <input type="password" id="pass" name="pass">
        <input type="submit">
    </form>
</body>
</html>
