<?php
class User {
    private $email;
    private $password;
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = "$firstName.$lastName@user.com";
    }

    public function createEmail() {
        $email = strtolower("$this->firstName.$this->lastName@user.com");
        $this->setEmail($email);
    }

    public function sayHello($user) {
        echo "$this->firstName $this->lastName say hello to $user->firstName";
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }
}