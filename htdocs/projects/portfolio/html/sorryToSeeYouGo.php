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
    $email = $_POST['email'];

    $servername = 'localhost';
    $username = 'projectone_admin';
    $passwd = '1qazxsw2';
    $dbname = 'project1';

    $link = mysqli_connect($servername, $username, $passwd, $dbname);
    if($link->connect_error){
        die('Not connected : '.$link->connect_error);
    }

    $subName = null;
    $query0 = "SELECT fname FROM newslettersubscribers WHERE email = '$email'";
    $response = $link ->query($query0);
    if($response->num_rows >0){
        while($row = $response->fetch_assoc()){
            $subName = $row['fname'];
        }
    }

    $query = "DELETE * FROM newslettersubscribers WHERE email = '$email'";
    $response0 = $link ->query($query);
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
        <li class="news"><a href="news.php">News</a></li>
    </ul>
</div>
<main>
    <div id="mainText">
        <h1>If you didn't like our news letter, we don't like you. <br>
        Have fun with your miserable life, <?php echo $subName?>.</h1>
    </div>
</main>
</body>




</html>