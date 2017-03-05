<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class HomeController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function getIndex()
    {
        return View('home.index');
    }

    public function postIndex()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return Redirect::intended('/user');
        }

        return Redirect::back()
            ->withInput()
            ->withErrors('That username/password combo does not exist.');
    }

    public function getLogin()
    {
        return Redirect::to('/');
    }

    public function getLogout()
    {
        Auth::logout();

        return Redirect::to('/');
    }

}
