<?php

class Student extends User {
    private $school;

    public function createEmail() {
        $email = strtolower($this->getFirstName() . "." . $this->getLastName() . "@student.com");
        $this->setEmail($email);
    }
}