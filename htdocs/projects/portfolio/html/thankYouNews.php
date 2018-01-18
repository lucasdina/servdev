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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $servername = 'localhost';
    $username = 'projectone_admin';
    $passwd = '1qazxsw2';
    $dbname = 'project1';

    $link = mysqli_connect($servername, $username, $passwd, $dbname);
    if($link->connect_error){
        die('Not connected : '.$link->connect_error);
    }

    $query = "INSERT INTO newslettersubscribers (fname, lname, email) VALUES ('$fname', '$lname', '$email')";
    $response = $link->query($query);

    if (!$response){
        $message = 'Invalid query: '. mysql_error(). '/n';
        $message .= 'Whole query: '. $query;
        die($message);
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
        <h1>Thank you for signing up for our weekly news letter, <?php echo $fname; ?>. We look forward to spamming your inbox with emails!</h1>
    </div>
</main>
</body>




</html>