<?php
class Student
{
    private $user_id;

    private $class_id;

    private $name;

    private $phone;

    private $email;

    public function __construct($user_id, $class_id, $name, $phone, $email)
    {
        $this->user_id = $user_id;
        $this->class_id = $class_id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getuser_id()
    {
        return $this->user_id;
    }

    public function setuser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getclass_id()
    {
        return $this->class_id;
    }

    public function setclass_id($class_id)
    {
        $this->class_id = $class_id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getphone()
    {
        return $this->phone;
    }

    public function setphone($phone)
    {
        $this->phone = $phone;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }
}