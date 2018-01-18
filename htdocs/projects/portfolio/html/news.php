<!DOCTYPE html>
<!--This websire template was created by Lucas Dina-->
<html>
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <title>
        Jukebox
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div id="container">
    <img id="logo" src="../images/logo.png" alt="logo" style="width: 100px;height: 100px;" />
    <div class="nav">
        <ul>
            <li class="home"><a href="../index.html">Portfilio</a></li>
            <li class="about"><a href="about.html">Resume</a></li>
            <li class="contact"><a href="contact.html">Contact</a></li>

            <li class="news"><a href="news.html">News</a></li>
        </ul>
    </div>
    <main>
        <div id="mainText">
            <h1>Send me an email and I will <br>get back to you as soon as possible.</h1>
            <br>
            <div class="container" style="margin-top: 10px;">
                <form action="thankYouNews.php" method="post">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="fname" placeholder="John">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control" id="lname" placeholder="Doe">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control" id="email" placeholder="john.doe@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn" style="color: #5CB85C"><a href="thankYouContact.html">Submit</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </main>
    <footer>
        <p>&copy; Copyright 2017. Ghawdrop<br>
    </footer>
</div>
</body>


</html>