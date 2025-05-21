<?php
$name = "Marcos";
$isDev = true;
$age = 26;


$isOld = $age > 40;

/* if ($isOld) {
  echo "<h2>Eres viejo, lo siento</h2>";
} elseif ($isDev) {
  echo "<h2>No eres viejo, pero eres dev.</h2>";
} */


define('PI', 3.1416);

$output = "Hola $name, con una edad de $age.";
/* $outputAge = $isOld 
  ? 'Eres viejo, lo siento' 
  : 'Eres joven, felicidades 😎' */

$output = match(true) {
  $age < 2 => "Eres un bebé, $name 👶",
  $age < 11 => "Eres un niño, $name 👦",
  $age < 18 => "Eres un adolescente, $name 👦",
  $age < 31 => "Eres un joven adulto, $name 👩‍🎓",
  default => "Eres un adulto, $name 👨‍🦳"
};

// Array Indexado
$bestLanguage = ["PHP", "JavaScript", "Python", "Java"];
$bestLanguage[] = "C#"; 
$bestLanguage[] = "C++";

// Array Associativo
$person = [
  "name" => "Marcos",
  "age" => 26,
  "isDev" => true,
  "languages" => ["PHP", "JavaScript", "Python"]
];
$person["languages"][] = "C#";
?>

<ul>
  <?php foreach($bestLanguage as $key => $language) : ?>
    <li><?= $key . " " . $language ?></li>
  <?php endforeach; ?>
</ul>

<h2><?= $output ?></h2>

<!-- <?php if ($isOld) : ?>
  <h2>Eres viejo, lo siento</h2>
<?php elseif ($isOld) : ?>
  <h2>No eres viejo, pero eres dev.</h2>
<?php else : ?>
  <h2>Eres joven</h2>
<?php endif; ?> -->

<h1>
  <?= "Hola " . $name; ?>
</h1>


<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>