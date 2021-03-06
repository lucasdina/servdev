<!DOCTYPE html>
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
    include ('../db/DBNewsletter.php');
    if(!addUserToNewsLetter($_POST['fname'], $_POST['lname'], $_POST['email'])){
        echo "<script>alert('Unable to add user to news letter subscriber list.');</script>";
        include("news.php");
        exit;
    }
    ?>
</head>



<body>
<img id="logo" src="../images/logo.png" alt="logo" style="width: 100px;height: 100px;" />
<div class="nav">
    <ul>
        <li class="home"><a href="../index.php">Portfolio</a></li>
        <li class="about"><a href="about.php">Resume</a></li>
        <li class="contact"><a href="contact.php">Contact</a></li>
        <li class="news"><a href="news.php">News</a> </li>
    </ul>
</div>
<main>
    <div id="mainText">
        <h1>Thank you for signing up for our weekly news letter, <?php echo $_POST['fname']; ?>. We look forward to spamming your inbox with emails!</h1>
    </div>
</main>
</body>




</html>