<?php
$name = "Felipe";
//$name = "PHP";
$isDev = true;
$age = 36;
$newAge = (bool) $age + '1';

$isOld = $age > 40;

// Ternaria
$outputAge = $isOld
    ? 'Eres viejo'
    : 'Eres joven';

// Match
$outputAge2 = match (true) {
    $age <3 => "Bebe, $name",
    $age <11 => "Niño, $name",
    $age < 18 => "Adolescente, $name",
    $age === 18 => "Mayor de edad, $name",
    $age <40 => "Adulto joven, $name",
    $age < 60 => "Adulto viejo, $name",
    default => "Viejo, $name",

};

$bestLanguages = ["PHP", "JavaScript", "Python",1,"C"];
$bestLanguages [3] = "Java";
$bestLanguages [] = "TypeScript";
//var_dump($isDev);
//var_dump($newAge);
//var_dump($age);
//var_dump($name);

//echo gettype($name);
//echo gettype($age);
//echo gettype($newAge);
//echo gettype($isDev);

$output = "Hola $name, con una edad de $age.";
//$output2 = 'Output 2: el $name no ve ya que no se interpolan las cadenas.';
//$output2 .= "Output 3: o $age";
//$output3 = "Output 3: saltando el carácter $ en: \$name";


define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

$person = [
    "name" => "Felipe",
    "age" => 36,
    "languages" => ["PHP", "JavaScript", "Python", "C", "TypeScript"],
    "isDev" => true,
];
$person["languages"][] = "Java";
$person["name"][] = "Ronaldinho";
?>

<ul>
    <?php foreach ($bestLanguages as $key => $language): ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">


<h1>
    <?= $output ?>
</h1>

<h2>
    <?= $outputAge2 ?>
</h2>

<h3>
    El mejor lenguaje es <?= $bestLanguages[0] ?>
</h3>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>