<?php
$allowed = false;

$userName = $_GET["userName"];
$userMail = $_GET["userMail"];
$userAge = $_GET["userAge"];

if (strlen($userName) >= 3 && is_numeric($userAge) && filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
    $allowed = true;
} else {
    $allowed = false;
}
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
    <form>
        <input type="text" name="userName" placeholder="Inserisci nome...">
        <input type="text" name="userMail" placeholder="Inserisci email...">
        <input type="text" name="userAge" placeholder="Inserisci eta...">
        <button type="submit">submit</button>
    </form>

    <p>
        <?php $allowed == true ?  "Accesso acconsentito" :  "Accesso negato"; ?>
    </p>
    <pre>
        <?php echo $userAge ?>
        <?php echo $userName ?>
        <?php echo $userMail ?>
        <?php var_dump($allowed) ?>
    </pre>
</body>

</html>