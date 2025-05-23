<?php

declare(strict_types=1); // <- esto a nivel de archivo

class NextMovie {
  public function __construct(
    private string $title,
    private string $following_production,
    private string $release_date,
    private string $poster_url,
    private string $overview,
    private int $days_until,
  ) 
  {}
  
  public function get_until_message(): string {
    $days = $this->days_until;

    return match (true) {
      $days < 0 => 'ya se estrenó',
      $days === 0 => 'Hoy se estrena',
      $days === 1 => 'mañana se estrena',
      $days < 7 => "esta semana se estrena 😅",
      default => "se estrena en {$days} días 👌",
    };
  }

  public static function fetch_and_create_movie(string $api_url): NextMovie {
    $result = file_get_contents($api_url); // si solo quieres hacer un GET de una API
    $data = json_decode($result, true); // decodifica el JSON a un array asociativo
    return new self(
      $data['title'],
      $data['following_production']['title'] ?? "Desconocido",
      $data['release_date'],
      $data['poster_url'],
      $data['overview'],
      $data['days_until']
    );
  }

  public function get_data() {
    return get_object_vars($this);
  }
}