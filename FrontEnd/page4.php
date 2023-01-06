<!DOCTYPE html>
<html>

<head>
    <title>P4 Create a new account</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oleo+Script:wght@700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="page4.css">
</head>

<body>
    <h1>Welcome to our website! Create a new account!</h1>

    <form action = 'connect.php' method = "POST">
        <div>
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" placeholder="Bipo" required>
        </div>

        <br>

        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" required>
        </div>

        <br>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" maxlength="10" required> 
        </div>

        <br>

        <div>
            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" id="confirmpassword" name="confirmpassword" maxlength="10" required> 
        </div>

        <br>

        <div>
            <input type="reset" id="mybutton2">
        </div>

        <div>
            <input type="submit" name="submit" id="mybutton2"></input>
        </div>

       
    </form>

    <script src="page4.js"></script>
</body>

</html>