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

<body class="h-[100vh] bg-blue-500 grid place-items-center ">
    <div class="rounded-xl bg-blue-800 p-8">
        <h1 class="text-3xl pb-8 text-white">
            <?php if (!count($_GET)) {
                echo 'Inserire le credenziali';
            } else {
                echo $allowed;
            } ?></h1>
        <form class=" flex flex-col gap-4 uppercase">
            <input class="py-2 px-2 rounded" type="text" name="userName" placeholder="Inserisci nome...">
            <input class="py-2 px-2 rounded" type="text" name="userMail" placeholder="Inserisci email...">
            <input class="py-2 px-2 rounded" type="text" name="userAge" placeholder="Inserisci eta...">
            <button class="py-2 px-2 rounded bg-purple-600 hover:bg-purple-500 text-white capitalize text-xl" type="submit">submit</button>
        </form>

    </div>





    <!-- <pre>
        <//?php var_dump($_GET) ?>
    </pre> -->
</body>

</html>