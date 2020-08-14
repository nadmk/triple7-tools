<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Triple7 Utils - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//fonts.googleapis.com/css?family=Roboto:400,300,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/gh.css">

    <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
<?php include 'components/header.php'; ?>

<div class="container">
    <div align="center">
    <h3>Welcome to Triple7 Online Swiss Army Knife.</h3>
    <p>Are you ready for your next extorsion or/and you want to be creepy to random people? You are in the right place!</p>
    </div>
    <div class="row" style="margin-left: 25%; margin-right: 25%">
        <div align="justify" class="one-half column" style="margin-top: 5%">
            <h4 align="">Online tools:</h4>
            <p> To be added.... </p>
        </div>
        <div class="one-half column" style="margin-top: 5%">1/2</div>
    </div>
</div>
<hr>
<?php include 'components/footer.html'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/gh.js"></script>
</body>
</html>
