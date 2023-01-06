<?php 
require("config.php");
if (!(isset($_SESSION['name']) && isset($_SESSION['id']))) {
    header("Location:/page3.php");
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:3000/user?id=' . $_SESSION['id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);

$response = json_decode($response);

$user = $response->data;

$name= $user->name;
$age = $user->age;
$rank = "";
if ($user->isadmin == 1) {
    $rank = "Admin";
}
else {
    $rank = "User";
}

?>


<!DOCTYPE html>

<html>

<head>

    <title>My account</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oleo+Script:wght@700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="page7.css">
</head>

<body>

    <h1>My account</h1>
    <br>

    <p>Username: <?= $name ?></p>
    <p>Age: <?= $age ?></p>
    <p>Rank: <?= $rank ?></p>
    

</body>

</html>