<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
if(empty($_SESSION['status'])){
    $_SESSION['status'] = " ";
}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Triple7 Control Panel - Sms Spoof</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//fonts.googleapis.com/css?family=Roboto:400,300,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/gh.css">

    <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
<?php include 'components/header.php'; ?>

<!-- The above form looks like this -->
<form action="components/sms-send.php" method="GET" align="center" style="margin-left: 35%; margin-right: 35%;">
    <h3> SMS Spoof: Send an Anonymous SMS anywhere on the planet!</h3>
    <p>(Not Really Anonymous someone put their details for the SMS Gateway but anyway)</p>
    <p style="color: darkcyan;">Status: <?php echo $_SESSION['status'];
    $_SESSION['status'] = "";
    ?></p>
    <div class="row">
        <div class="six columns">
            <label for="sender">CallerID: (11 Characters maximum)</label>
            <input class="u-full-width" name="sender" type="text" placeholder="FlabourasCorp" id="sender">
        </div>
        <div class="six columns">
            <label for="destination">Destination: (Include 2 number country code)</label>
            <input class="u-full-width" type="text" name="destination" id="destination" placeholder="306947300351">
            </input>
        </div>
    </div>
    <label for="message">Message:</label>
    <textarea class="u-full-width" accept-charset="UTF-8" placeholder="Hi Dave …" name="message" id="message"></textarea>
    <input class="button-primary" type="submit" value="Send">
    <p>
    <i>Please do not use the service for illegal purposes. We have the right to suspend the Service at any time.</i>
    </p>
</form>


<!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

<!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->

<hr>
<?php include 'components/footer.html'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/gh.js"></script>
</body>
</html>
