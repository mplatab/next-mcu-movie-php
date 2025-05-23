<?php
declare(strict_types=1); // <- esto a nivel de archivo

function render_template(string $template, array $data = []) {
  extract($data); // extrae las variables del array $data
  
  require "templates/$template.php"; // <- esto a nivel de archivo
}




