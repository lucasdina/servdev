<!DOCTYPE html>
<!--This websire template was created by Lucas Dina-->
<html>
<head>
    <title>
        Jukebox
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    ?>
</head>



<body>
<img id="logo" src="../images/logo.png" alt="logo" style="width: 100px;height: 100px;" />
<div class="nav">
    <ul>
        <li class="home"><a href="../index.html">Portfolio</a></li>
        <li class="about"><a href="about.html">Resume</a></li>
        <li class="contact"><a href="contact.html">Contact</a></li>
    </ul>
</div>
<main>
    <div id="mainText">
        <h1>Thank you for signing up for our weekly news letter, <?php echo $fname; ?>. We look forward to spamming your inbox with emails!</h1>
    </div>
</main>
</body>




</html>