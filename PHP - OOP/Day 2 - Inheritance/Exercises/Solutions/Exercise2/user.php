<?php

class User
{
    private $id;
    private $name;
    private $mail;
    private $password;

    /*
    public function __construct($id, $name, $mail, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;
        $this->password = $password;
        
    }
    */

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function get_id($id)
    {
        $this->id = $id;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name($name)
    {
        $this->id = $name;
    }

    public function set_password($password)
    {
        $this->password = $password;
    }

    public function get_password($password)
    {
        $this->password = $password;
    }

    public function set_mail($mail)
    {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL))
            $this->mail = $mail;
    }

    public function get_mail()
    {
        return $this->mail;
    }
}
