<?php

class Teacher extends User {
    private $school;

    public function createEmail() {
        $email = strtolower($this->getFirstName() . "." . $this->getLastName() . "@teacher.com");
        $this->setEmail($email);
    }
}