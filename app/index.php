<?php

/**Ejemplo de encapsulación y visibilidad */
class Person {
    public String $name; // Accesible desde cualquier lugar
    public int $age; // Accesible desde cualquier lugar
    protected String $role = 'user'; // Accesible desde la clase y sus hijos
    private String $password; // Solo accesible desde la clase

    public function login() {
        // Implementar el login del usuario
        if (!$this->password) {
            $this->password = "123456";
        }
        echo $this->role . " logged in with... " . $this->password;
    }

    public function setPassword(String $password) {
        $this->password = $password;
    }
}

class Nurse extends Person {
    public function __construct() {
        $this->role = "Nurse";
    }
}

$nurse = new Nurse();
$nurse->setPassword("Nurses123");
echo $nurse->login();
