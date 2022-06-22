<?php
$allowed = 'Immettere le credenziali:';

$userName = $_GET["userName"];
$userMail = $_GET["userMail"];
$userAge = $_GET["userAge"];

if (strlen($userName) >= 3 && is_numeric($userAge) && filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
    $allowed = "Accesso consentito";
} else {
    $allowed = "Accesso negato";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <form>
        <input type="text" name="userName" placeholder="Inserisci nome...">
        <input type="text" name="userMail" placeholder="Inserisci email...">
        <input type="text" name="userAge" placeholder="Inserisci eta...">
        <button type="submit">submit</button>
    </form>
    <h1><?php if (!count($_GET)) {
            echo 'Inserire le credenziali';
        } else {
            echo $allowed;
        } ?></h1>



    <!-- <pre>
        <//?php var_dump($_GET) ?>
    </pre> -->
</body>

</html>