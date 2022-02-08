<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;

    public function __construct($data)
    {
        echo 'hello';
        $this->firstName = $data;
        $this->lastName = 'Sara';
    }

    public function index()
    {
        header('Location:action.php?pages=full-name');
    }


}