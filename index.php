<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP-st</title>
</head>

<body>
    <h3>Your mini-cv from Mrcyberpython</h3>
    <form id="main-form" action="action.php" method="post">
        <label for="name">Your name:</label>
        <input name="name" id="name" type="text">
        <br><br>

        <label for="lastname">Your last name:</label>
        <input name="lastname" id="lastname" type="text">
        <br><br>

        <label for="nick">Your nickname:</label>
        <input name="nick" id="nick" type="text">
        <br><br>

        <label for="age">Your age:</label>
        <input name="age" id="age" type="number">
        <br><br>

        <label for="country">Your country:</label>
        <input name="country" id="country" type="text">
        <br><br>

        <label for="gender">Your gender:</label>
        <select class="gender" name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <input type="text" id="gender-other" name="" class="gender-other">
        <br><br>

        <label for="hobby">Your hobby:</label>
        <textarea name="hobby" id="hobby" rows="3" cols="28"></textarea>
        <br><br>

        <label for="ab-me">About me:</label>
        <textarea name="ab-me" id="ab-me" rows="3" cols="28"></textarea>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <script src="./gender.js"></script>
</body>

</html>