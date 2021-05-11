<?php

namespace App\Services;

use App\User ;
use Illuminate\Support\Facades\Auth;



class AdminAuth
{
    public function CheckAdmin($user)
    {
        dd($user);
        $user = User::find(Auth::user()->id);
        if($user == null)
        {
            redirect('/login')->with('error' , 'شما دسترسی به این صفحه را ندارید');
        }
        if($$user->getAccessAdmin == null)
        {
            redirect('/login')->with('error' , 'شما دسترسی به این صفحه را ندارید');
        }
    }
    
}
