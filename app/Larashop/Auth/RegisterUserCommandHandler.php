<?php

namespace Larashop\Auth;

use Laracasts\Commander\CommandHandler;
use Validator;
use Auth;

class RegisterUserCommandHandler implements CommandHandler
{

    /**
     * Handle the command
     *
     * @param $command
     *
     * @return mixed
     */
    public function handle($command)
    {
        $validator = Validator::make(
            array(
                'email' => $command->email,
                'password' => $command->password,
                'password_confirmation' => $command->password_confirmation,
            ),
            array(
                'email' => 'required|email',
                'password' => 'required|password|min:6',
            )
        );

        if ($validator->fails()) {
            return $validator;
        }

        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))) == false) {
            return array('message' => 'Incorrect email or password');
        }
    }

}