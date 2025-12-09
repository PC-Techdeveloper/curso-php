<?php
/* Métodos mágicos: métodos especiales que sobreescriben por omision de PHP cuando se realizan ciertas acciones sobre un objeto. */

# uso de sleep() y wakeup()
class Connection
{
  protected $link;
  private $dsn, $username, $password;

  public function __construct(
    $dsn,
    $username,
    $password
  ) {
    $this->dsn = $dsn;
    $this->username = $username;
    $this->password = $password;
    $this->connect();
  }

  private function connect()
  {
    $this->link = new PDO($this->dsn, $this->username, $this->password);
  }

  public function __sleep()
  {
    return array('dsn', 'username', 'password');
  }

  public function __wakeup()
  {
    $this->connect();
  }
}

$conn = new Connection(
  'mysql:host=localhost;dbname=test',
  'root',
  'root'
);

var_dump(serialize($conn));
