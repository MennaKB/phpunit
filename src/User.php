<?php

class User
{
 
    public function name($name = 'Menna')
    {
        return $name;
    }
    public function email($email = 'menna@gmail.com')
    {
        return $email;
    }
}

$user = new User;