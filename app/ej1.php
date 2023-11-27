<?php

/**Ejemplos de clases en PHP.
 * Ejemplos de creacion de clases e instancias de una clase en PHP.
 */

class User {
    public String $name;
    public int $age;
    public String $role = 'user';
    public static int $count = 0;

    public function __construct(String $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        echo "Hello, my name is " . $this->name . "<br>";
    }

    public static function makeAdmin(String $name, int $age) {
        $user = new User($name, $age);
        $user->role = 'admin';
        return $user;
    }

    public static function makeUser(String $name, int $age) {
        $user = new User($name, $age);
        return $user;
    }

    public static function makeGuest(String $name, int $age) {
        $user = new User($name, $age);
        $user->role = 'guest';
        return $user;
    }
}

$Kevin = new User('Kevin', 24);
$Kevin->greet();

$admin = User::makeAdmin('Admin', 0);
$admin->greet();

$count = User::$count;
echo $count;
