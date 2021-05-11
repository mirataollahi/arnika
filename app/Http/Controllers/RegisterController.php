<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User ;
use App\Services\ChangeTime ;
use App\Customer ;
use DateTime;
use Carbon\Carbon;



class RegisterController extends Controller
{
    public function RealUserRegister(Request $request)
    {
        return 'order added';
        $birthdayData = explode('/' , $request->birthday); 
        $birthdayData = ChangeTime:: jalaliToGregorian($birthdayData[0] ,$birthdayData[1] ,$birthdayData[2] );
        

        //$dateSrc = $birthdayData[0] . '-' . $birthdayData[1] . '-' . $birthdayData[2];
        //$date = str_replace('.', '-', $dateSrc);

        $dateformat= Carbon::createFromFormat('d-m-Y H:i:s', $dateSrc);


        dd($dateformat);
        dd($request->all());
        if($request->user_password == $request->user_re_password)
        {
            return redirect('/register')->with('error' , 'کلمه عبور و تکرار ان یکسان نیست ');
        }


        // $validated = $request->validate([
        //     'name' => 'required|max:255',
        //     'national_code' => 'required|max:255',
        //     'birthday' => 'required|max:255',
        //     'state' => 'required|max:255',
        //     'city' => 'required|max:255',
        //     'addres' => 'required|max:255',
        //     'user_zip_code' => 'max:255',
        //     'phone' => 'max:255',
        //     'mobile' => 'required|max:255',
        //     'business_title' => 'required|max:11|min:11',
        // ]);

        $data = [
            'name' => $request->name,
            'national_code' => $request->name,
            'birthday' => $request->name,
            'state' =>$request->name,
            'city' => $request->name,
            'addres' => $request->name,
            'user_zip_code' => $request->name,
            'phone' => $request->name,
            'mobile' => $request->name,
            'business_title' => $request->name,
        ];

        

        $user = new User;
        $user->name = $request->name ; 
        $user->mobile = $request->mobile ; 
        $user->password = Hash::make($data['user_password']) ; 
        $user->save();


        $customer = new Customer;
        $customer->national_code = $request->national_code ;
        $customer->

        

        dd($request->all());
        
    }

    public function LegalUserRegister(Request $request)
    {
        dd($request->all());
        
    }
}
