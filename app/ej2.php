<?php

/**Ejemplo de clases abstractas, funciones abstractas y extensiones de clases
 * Se muestra como crear una clase abstracta, una función abstracta y como extender una clase
 * de otra y acceder a metodos y atributos de la clase padre que pueden ser abstractos o no.
 * Ademas, se muestran implementaciones de interfaces y como se pueden usar en clases.
 */

class LoggedUser {

}

/**
 * Clase abstracta que representa a un usuario del sistema y evita que se hagan instancias
 * de ella para evitar que se creen usuarios que no tengan un rol específico.
 */
abstract class User {
    public String $name;

    public function login(): LoggedUser {
        // Implementar el login del usuario
        echo "User logged in";
        return new LoggedUser();
    }

    public abstract function interactWithPatient();
}

interface Notyfiyable {
    public function notify();
}

class Nurse extends User implements Notyfiyable {
    public function __construct() {
        $this->name = "Nurse";
    }

    public function interactWithPatient() {
        // Implementar la interacción con el paciente
        echo "Nurse interacting with patient";
    }

    public function login(): LoggedUser {
        // Implementar el login del usuario
        echo "Nurse logged in";
        return new LoggedUser();
    }

    /**
     * Implementar la notificación obligarotia por ser Notyfiyable
     */
    public function notify() {
        // Implementar la notificación
        echo "Nurse notified";
    }
}

class Physician extends User implements Notyfiyable {
    public function interactWithPatient() {
        // Implementar la interacción con el paciente
        echo "Physician interacting with patient";
    }

    /**
     * Implementar la notificación obligarotia por ser Notyfiyable
     */
    public function notify() {
        // Implementar la notificación
        echo "Physician notified";
    }
}

class HhRrUser extends User {
    public function logAdministrativeContent() {
        // Implementar el registro de contenido administrativo
        echo "Administrative content logged";
    }

    // Debe tener la función interactWithPatient() porque es abstracta en la clase padre
    public function interactWithPatient() {
        // Implementar la interacción con el paciente
        echo "HhRrUser interacting with patient";
    }
}

$nurse1 = new Nurse();
$nurse1->login();
echo "<br>" . $nurse1->name . "<br>";
