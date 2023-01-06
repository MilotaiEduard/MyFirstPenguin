<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    require("config.php");
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];



        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'http://localhost:3000/login',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{"name": "' . $name . '", "password": "' . $password . '"}',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            )
        );

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        if ($response->message == "Login Successful") {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://localhost:3000/user?id=' . $response->id,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            )
            );

            $response = curl_exec($curl);
            $response = json_decode($response);

            curl_close($curl);

                echo '<script>alert("Welcome, ' .$response->data->name. '")</script>';
                $_SESSION['id'] = $response->data->id;
                $_SESSION['name'] = $response->data->name;
                header("Refresh:0; url=/page2.php");
      } else {
                echo '<script>alert("Invalid username and password!")</script>';
            }
        }
    }

?>


<!DOCTYPE html>

<html>
<head>
    <title>P3 Penguins page</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oleo+Script:wght@700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="page3.css">
</head>

<body>
    
    <h2>Welcome to our website! Sign in! </h2>

    <form action = "page3.php" method="POST">
        <div>
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" placeholder="Bipo" required>
        </div>

        <br>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" maxlength="10" required> 
        </div>

        <div>
            <input type="submit" name="submit" id="mybutton2"></input>
        </div>

    </form>
    
    <br> 
    
    
    <script src="page3.js"></script>
</body>
</html>