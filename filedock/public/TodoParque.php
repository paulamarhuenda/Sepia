<?php

class Animal {
  protected $nombre;
  protected $edad;
  
  public function __construct($nombre, $edad) {
    $this->nombre = $nombre;
    $this->edad = $edad;
  }
  
  public function getNombre() {
    return $this->nombre;
  }
  
  public function getEdad() {
    return $this->edad;
  }
}

class Persona {
  protected $nombre;
  protected $edad;
  
  public function __construct($nombre, $edad) {
    $this->nombre = $nombre;
    $this->edad = $edad;
  }
  
  public function getNombre() {
    return $this->nombre;
  }
  
  public function getEdad() {
    return $this->edad;
  }
}

class Cuidador extends Persona {
  private $animalesAsignados;
  
  public function __construct($nombre, $edad) {
    parent::__construct($nombre, $edad);
    $this->animalesAsignados = array();
  }
  
  public function asignarAnimal($animal) {
    $this->animalesAsignados[] = $animal;
  }
  
  public function getAnimalesAsignados() {
    return $this->animalesAsignados;
  }
}

$leon = new Animal("León", 5);
$elefante = new Animal("Elefante", 10);

$jose = new Cuidador("José", 30);
$jose->asignarAnimal($leon);
$jose->asignarAnimal($elefante);

echo "Cuidador: " . $jose->getNombre() . "\n";
echo "Edad: " . $jose->getEdad() . "\n";
echo "Animales asignados: \n";

foreach ($jose->getAnimalesAsignados() as $animal) {
  echo "- " . $animal->getNombre() . " (" . $animal->getEdad() . " años)\n";
}
echo "Algooooooooo x";
echo "NOS VIMOS EN BERLÍN"
echo "A tomar por cleta"
  
?>
