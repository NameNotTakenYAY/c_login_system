<?php 
include("functions/c_main.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["password"] == $_POST["repeat_pass"]) {
            if (c_register($_POST["username"], $_POST["email"], $_POST["password"])) {
                header("Location: login.php");
            } else{
                echo c_response::$c_register; exit();
            }
        }
        else{
            echo "repeated password is wrong"; exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FODA SI</title>
</head>
<body>
    <form action="" method="post">
        <label>User</label>
        <br>
        <input type="text" name="username">
        <br>
        <label>Email</label>
        <br>
        <input type="text" name ="email">
        <br>
        <label>Pass</label>
        <br>
        <input type="password" name="password">
        <br>
		<label>Repeat Pass</label>
		<br>
        <input type="password" name="repeat_pass">
        <br>
        <button>register</button>
    </form>
</body>
</html>
