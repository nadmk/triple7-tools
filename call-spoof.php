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
    <div align="center" style="margin-top: 5%">
        <h3>Caller Spoof: Call anyone on the planet with an Anonymous Caller ID.</h3>
        <p>(Not Really Anonymous someone put their details for the Phone Gateway but anyway)</p>
        <p>As soon as you submit a call request, <br> the number you have selected from the pool will call you. <br>Then it will connect you to the number you have selected.</p>
    </div>
    <form>
        <div class="row">
            <div class="six columns">
                <label for="from">Your Number:</label>
                <input class="u-full-width" type="text" placeholder="+1504431203" id="from">
            </div>
            <div class="six columns">
                <label for="phonepool">Select a number from the Pool:</label>
                <select class="u-full-width" id="phonepool">
                    <option value="Option 1">+44735315130</option>
                </select>
            </div>

        <div class="eleven columns">
            <label for="destination">Destination:</label>
            <input class="u-full-width" type="text" placeholder="+1504431203" id="destination">
        </div>
        </div>
        <div align="center">
        <input align="center" class="button-primary" type="submit" value="Submit">
        </div>
    </form>
</div>
<hr>
<?php include 'components/footer.html'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/gh.js"></script>
</body>
</html>