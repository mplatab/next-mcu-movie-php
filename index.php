<?php
const API_URL = 'https://whenisthenextmcufilm.com/api';
# Incializar una nueva sesión de cURLM ch = cURL handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición y no mostrala en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición
  y guardamor el resultado
*/

$result = curl_exec($ch);

// una alternativa sería utilzar file_get_contents
// $result = file_get_contents(API_URL); // si solo quieres hacer un GET de una API
$data = json_decode($result, true);
curl_close($ch);

?>

<head>
  <title>La próxima película de marvel</title>
  <meta charset="UTF-8">
  <meta name="description" content="La próxima película de Marvel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Centered viewport -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
  />
</head>
<main>
  <section>
    <img src="<?= $data['poster_url']; ?>" width="200"  alt="Poster de <?= $data['title']; ?>" 
    style="border-radius: 16px"/>
  </section>
  <hgroup>
    <h3><?= $data['title']; ?> se estrena en <?= $data['days_until']; ?> días</h3>
    <p>Fecha de estreno: <?= $data['release_date']; ?></p>
    <p>La siguiente es: <?= $data['following_production']["title"]; ?></p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }
  hgroup {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  
</style>