<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title><?php echo $_POST['name'] ?>'s CV.</title>
</head>

<body>
    <h3>Your mini-cv.</h3>
    Name: <span class="user-info"><?php echo htmlspecialchars($_POST['name']); ?></span>
    <br><br>

    Last Name: <span class="user-info"><?php echo htmlspecialchars($_POST['lastname']); ?></span>
    <br><br>

    Nickname: <span class="user-info"><?php echo htmlspecialchars($_POST['nick']); ?></span>
    <br><br>

    <?php
        $age = (int) $_POST['age'];

        if ($age == 0) {
            $ageOutput = "of none ;)";
        } else {
            $ageOutput = $_POST['age'];
        }
    ?>
    Age: <span class="user-info"><?php echo $ageOutput; ?> yrs old</span>
    <br><br>

    Country: <span class="user-info"><?php echo htmlspecialchars($_POST['country']) ?></span>
    <br><br>

    Gender: <span class="user-info"><?php echo htmlspecialchars($_POST['gender']) ?></span>
    <br><br>

    Hobby: <span class="user-info">"<?php echo htmlspecialchars($_POST['hobby']) ?>"</span>
    <br><br>

    About me: <span class="user-info">"<?php echo htmlspecialchars($_POST['ab-me']) ?>"</span>

    <hr>
    Your the best, <?php echo $_POST['name'] ?> bro! Good luck to you!
</body>

</html>