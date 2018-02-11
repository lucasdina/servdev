<!DOCTYPE html>
<!--This websire template was created by Lucas Dina-->
<html>
<head>
    <title>
        Jukebox
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <?php
    include ('./db/DBAdmin.php');

    $feedbackArray = getFeedbackRequests();

    ?>


</head>



<body>
<img id="logo" src="./images/logo.png" alt="logo" style="width: 100px;height: 100px;" />
<div class="nav">
    <ul>
        <li class="home"><a href="./index.php">Portfolio</a></li>
        <li class="about"><a href="./html/about.php">Resume</a></li>
        <li class="contact"><a href="./html/contact.php">Contact</a></li>
        <li class="news"><a href="./html/news.php">News</a></li>
    </ul>
</div>
<main>
<!--    This was for easy debugging-->
<!--    <pre>--><?php //print_r($feedbackArray);?><!--</pre>-->
    <div id="mainText">
        <table class="table">
            <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>E-Mail</th>
                <th>Organization</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
            </thead>
<!--            More actions to come here-->
            <?php
            foreach($feedbackArray as $request){
                echo "<tr>
                        <th>".$request['ID']."</th>
                        <th>".$request['userEmail']."</th>
                        <th>".$request['userOrganization']."</th>
                        <th>".$request['message']."</th>
                        <th>
                            <form action='deleteFeedback.php' method='post'>
                                <input type='hidden' name='requestId' value='".$request['ID']."'>
                                <input type='submit' name='submit' value='Submit'>
                            </form>
                        </th>
                    </tr>";
            }
            ?>
        </table>
    </div>
</main>
</body>




</html>