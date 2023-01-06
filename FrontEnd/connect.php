<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['age']) && $_POST['name']!="" && $_POST['age']>0 && $_POST['password']!="") {
            $name= $_POST['name'];
            $age= $_POST['age'];
            $password= $_POST['password'];
            $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:3000/register',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"name":"'.$name.'", "age":"'.$age.'", "password":"'.$password.'"}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
            $response = json_decode($response);

            if($response->message == "User Created") {
                echo '<script>alert("Account created!")</script>';
                header("Refresh:0; url=/");
            }
            else {
                echo '<script>alert("Error ocurred!")</script>';
                header("Refresh:0; url=/page4.php");
            }

        }
    }
?>


<!DOCTYPE html>

<html>

<head>
    <title>Create an account</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>

</body>

</html>