<?php

declare(strict_types=1); // <- esto a nivel de archivo
class SuperHero {


  public function __construct(
    private readonly string $name, 
    private readonly array $power, 
    private readonly string $planet
  ) {
}

  public function attack(): string {
    return "Atacando con {$this->power} desde {$this->planet}";
  }

  public function description(): string {
    $powers = implode(", ", $this->power);
    return "Soy {$this->name} y tengo el poder de " 
      . $powers . " y vengo de {$this->planet}.";
  }
}

$hero = new SuperHero('Superman',[ 'Super fuerza', 'Vuelo'], 'Krypton');
echo $hero->description();