<?php

namespace Larashop\Auth;

class RegisterUserCommand {

    public $email;
    public $password;
    public $password_confirmation;

    function __construct($email, $password, $password_confirmation)
    {
        $this->email = $email;
        $this->password = $password;
        $this->password_confirmation = $password_confirmation;
    }
}