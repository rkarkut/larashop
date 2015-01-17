<?php

use Laracasts\Commander\CommanderTrait;

class AuthController extends \BaseController
{
    use CommanderTrait;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function logOut()
    {
        if (Auth::check()) {
            Auth::logout();
            Flash::success('You have been logged out.');
        }

        return Redirect::route('root');
    }

    public function registerUser()
    {
        if (Auth::check()) {
            return Redirect::route('root');
        }

        $errors = $this->execute('Larashop\Auth\RegisterUserCommand');

        if(empty($errors) == false) {
            return Redirect::route('auth.register')->withErrors($errors);
        }

        Flash::success('Your account has been created.');
        return Redirect::route('root');
    }

    public function showRegisterForm()
    {
        if (Auth::check()) {
            return Redirect::route('root');
        }

        return View::make('auth/register');
    }

    public function showSignInForm()
    {
        if (Auth::check()) {
            return Redirect::route('root');
        }

        return View::make('auth/sign_in');
    }

    public function signInUser()
    {
        if (Auth::check()) {
            return Redirect::route('root');
        }

        $errors = $this->execute('Larashop\Auth\SignInUserCommand');

        if(empty($errors) == false) {
            return Redirect::route('auth.sign_in')->withErrors($errors);
        }

        Flash::success('You have been logged in.');
        return Redirect::route('root');
    }
}
