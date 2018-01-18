<!DOCTYPE html>
<!--This websire template was created by Lucas Dina-->
<html>
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
    <title>
        Jukebox
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        function validate(idArray, msgId) {
            var isValid = true;
            idArray.forEach(function(element){
                if(document.getElementById(element).value === ""){
                    isValid = false;
                }
            });
            if(!isValid){
                document.getElementById(msgId).style.display = 'block';
            }
            else{
                document.getElementById(msgId).style.display = 'none';
            }
            return isValid;

        }
    </script>
</head>

<body>
<div id="container">
    <img id="logo" src="../images/logo.png" alt="logo" style="width: 100px;height: 100px;"/>
    <div class="nav">
        <ul>
            <li class="home"><a href="../index.php">Portfilio</a></li>
            <li class="about"><a href="about.php">Resume</a></li>
            <li class="contact"><a href="contact.php">Contact</a></li>
            <li class="news"><a href="news.php">News</a></li>
        </ul>
    </div>
    <main>
        <div id="mainText">
            <h1>Sign up for our weekly email <br>and we'll fill your inbox with spam!</h1>
            <br>
            <div class="container" style="margin-top: 10px;">
                <form action="thankYouNews.php" method="post" onsubmit="return validate(['fname', 'lname', 'email'], 'errorMsg')">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="John">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Doe">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" id="email"
                                   placeholder="john.doe@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn" style="color: #5CB85C"><a>Submit</a></button>
                            <h5 id="errorMsg" style="color: red; display: none;">All fields must be filled and valid.</h5>
                        </div>
                    </div>
                </form>
                <form action="sorryToSeeYouGo.php" method="post" onsubmit="return validate(['fname', 'lname', 'email'], 'errorMsgUnSub')">
                    <h2>I hate everything and would like to unsubscribe!<br>
                    Enter your email to unsubscribe.</h2>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group row" style="margin-top: 10px">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn" style="color: #5CB85C"><a>Unsubscribe</a></button>
                            <h5 id="errorMsgUnSub" style="color: red; display: none;">All fields must be filled and valid.</h5>
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