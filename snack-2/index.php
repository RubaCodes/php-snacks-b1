<?php

$userName = $_GET["userName"];
$userMail = $_GET["userMail"];
$userAge = $_GET["userAge"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <input type="text" name="userName" placeholder="Inserisci nome...">
        <input type="text" name="userMail" placeholder="Inserisci email...">
        <input type="text" name="userAge" placeholder="Inserisci eta...">
        <button type="submit">submit</button>
    </form>

    <pre>
        <?php echo $userAge?>
        <?php echo $userName?>
        <?php echo $userMail?>
    </pre>
</body>
</html>