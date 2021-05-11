<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;



use App\SepidarRequest ;



class ProductController extends Controller
{





    public function sepidarAccounting()
    {
        return view('products.sepidar');
    }

    public function sepidarAccountingSoftwarw()
    {
        return view('products.sepidarsoftware');
    }


    public function sendSepidarRequest(Request $request)
    {
        $inputs = $request->all();

        $systems = [];
        for($i = 1 ; $i <=15 ;$i++)
        {
            if($request['system'.$i] == 'on')
            {
                $systems[$i] = true ;
            }else{
                $systems[$i] = false ;
            }
        }

        $subsystems = [];
        for($i = 1 ; $i <=15 ;$i++)
        {
            if($request['subsystem'.$i] == 'on')
            {
                $subsystems[$i] = true ;
            }else{
                $subsystems[$i] = false ;
            }
        }


        
        $data = [
            'name'=>'test' ,
            'company'=>'test' ,
            'city'=>$request->city ,
            'phone_number'=>'test' ,
            'email'=>$request->email ,
            'system1' => $systems['1'] ,
            'system2' => $systems['2'] ,
            'system3' => $systems['3'] ,
            'system4' => $systems['4'] ,
            'system5' => $systems['5'] ,
            'system6' => $systems['6'] ,
            'system7' => $systems['7'] ,
            'system8' => $systems['8'] ,
            'system9' => $systems['9'] ,
            'system10' => $systems['10'] ,
            'system11' => $systems['11'] ,
            'system12' => $systems['12'] ,
            'system13' => $systems['13'] ,
            'system14' => $systems['14'] ,
            'system15' => $systems['15'] ,

            'subsystem1' => $subsystems['1'] ,
            'subsystem2' => $subsystems['2'] ,
            'subsystem3' => $subsystems['3'] ,
            'subsystem4' => $subsystems['4'] ,
            'subsystem5' => $subsystems['5'] ,
            'subsystem6' => $subsystems['6'] ,
            'subsystem7' => $subsystems['7'] ,
            'subsystem8' => $subsystems['8'] ,
            'subsystem9' => $subsystems['9'] ,

            'tool1' => $request->tools1 ,
            'tool2' => $request->tools2 ,
            'tool3' => $request->tools3 ,
            'tool4' => 0 ,
            'tool5' =>0 ,



            'condition' => 'waiting' ,


            
        ];


        
       SepidarRequest::create($data);

       return view('forms.register');

    }

    public function showRequests()
    {
        $sepidarRequests = SepidarRequest::all();
        return view('sepidar.show')->with('sepidarRequests' , $sepidarRequests );
    }

    public function products()
    {
        
    }



    public function getImageInformation()
    {
        $dir = '/projects/hamkaran/public/image/users';
        $users = scandir($dir);
        foreach($users as $user)
        {
            if($user == '.' || $user == '..')
            {
                continue ;
            }
            $file = base_path() . "/public/image/users/" . $user . "/" . "$user" . ".jpg" ;
            if(!file_exists($file)){
                continue ;
            }
            $userinformation[$user] = [
                'user' => $user ,
                'width' => getimagesize($file)[0] ,
                'height' => getimagesize($file)[1] ,
            ];
        }
        return $userinformation;
    }
}
