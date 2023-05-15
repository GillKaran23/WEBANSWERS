<?php
$conn = mysqli_connect("localhost:3307", "root", "", "webpractice");
if (isset($_POST['submit'])) {
    $fname       = $_POST['fname'];
    $lname       = $_POST['lname'];
    $sql = "INSERT INTO users (fname,lname) VALUES('$fname','$lname')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Registered";
    } else {
        echo '<script> alert("SignUp Failed"); </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .center {
            margin-top: 30vh;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: grey;
            border-radius: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h1 {
            text-align: center;
            margin-top: 0;
        }

        label {
            margin-top: 10px;
        }

        input[type=text] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #bd1ae2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff0069;
        }
    </style>
    <title>SignUp</title>
</head>

<body>
    <div class="center">
        <form class="container" action="21th.php" method="POST" autocomplete="off">
            <h1>SignUp</h1>
            <label>First Name</label><br>
            <input type="text" name="fname" id="fname" placeholder="Type First Name here" required><br>
            <label>Last Name</label><br>
            <input type="text" name="lname" id="lname" placeholder="Type Last Name here" required><br>
            <button name="submit">Submit</button>
        </form>
    </div>
</body>

</html>