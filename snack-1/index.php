<?php
$partite =[
    [
        'homeTeam' => 'Milano',
        'awayTeam' => 'Bologna',
        'homeScore' => rand(1,100),
        'awayScore' => rand(1,100),
    ],
    [
        'homeTeam' => 'Siena',
        'awayTeam' => 'Treviso',
        'homeScore' => rand(50,100),
        'awayScore' => rand(50,100),
    ],
    [
        'homeTeam' => 'Napoli',
        'awayTeam' => 'Benevento',
        'homeScore' => rand(50,100),
        'awayScore' => rand(50,100),
    ],
    [
        'homeTeam' => 'Catania',
        'awayTeam' => 'Torino',
        'homeScore' => rand(50,100),
        'awayScore' => rand(50,100),
    ],
    [
        'homeTeam' => 'Venezia',
        'awayTeam' => 'Potenza',
        'homeScore' => rand(50,100),
        'awayScore' => rand(50,100),
    ],
];

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
<body class="grid place-items-center h-[100vh] bg-blue-500">
    <div class="bg-blue-800 rounded-xl p-8 text-white border-4 border-white/75">
        <h1 class="text-3xl pb-4">Risultati giornata odierna:</h1>
        <ul class=" divide-y">
            <?php for($i =0 ; $i < count($partite); $i++) {?>
            <li class="py-2"><?php echo "{$partite[$i]["homeTeam"]} - {$partite[$i]["awayTeam"]} || {$partite[$i]["homeScore"]}-{$partite[$i]["awayScore"]}"?></li>
            <?php } ?>
        </ul>
    </div>
    

    <!-- sezione dump data -->
    <!-- <pre><//?php var_dump($partite)?></pre> -->
</body>
</html>