<?php

namespace Larashop\Auth;

use Laracasts\Commander\CommandHandler;
use Validator;
use Input;
use Auth;
use Redirect;

class SignInUserCommandHandler implements CommandHandler
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
                'email' => Input::get('email'),
                'password' => Input::get('password'),
            ),
            array(
                'email' => 'required|email',
                'password' => 'required|min:6'
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