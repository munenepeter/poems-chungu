<?php

namespace Chungu\Core\Mantle;

use Chungu\Models\User; 
use Chungu\Core\Mantle\Session;

class Auth {

    public static function login(string $email, string $password) {

        $user =  User::query("select id, email, password  from users where email = \"$email\"");

        if (empty($user)) {
            logger("Info","Login: No account with {$email} email with {$password}");
            Session::make('_msg_error', "Wrong credentials, Please try again!");
            return redirectback();
        }
        $user = (object)$user[0];

    
        if (password_verify($password, $user->password)) {

            logger("Info","Login: Logged in {$email} with {$password}");

            Session::make('loggedIn', true);
            Session::make('user_id', $user->user_id);
            Session::make('email', $user->email);

            Session::make('_msg_success', "Successfull login");
            return;
        } else {
            logger("Info","Login: Wrong Credentials; Email: {$email} Password: {$password}");
            Session::make('_msg_error', "Wrong credentials, Please try again!");
            return redirectback();
        }
    }
    public static function logout(string $user) {
        
        Session::unset($user);
        Session::make('loggedIn', false);

        logger("Info","Login: logged out $user");
        Session::destroy();
    }
}
