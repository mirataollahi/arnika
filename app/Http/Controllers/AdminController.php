<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product ;
use App\System;
use App\Pre ;
use App\Tool ;
use App\preTool ;
use App\User ;
use App\SepidarRequest ;
use App\Services\ChangeTime ;

use function PHPSTORM_META\type;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }


    public function products()
    {
        $products = Product::all();
        return view('admin.products.index')->with('products' , $products);
    }


    public function createProductview()
    {
        return view('admin.products.createProduct');
    }

    public function createProduct(Request $request)
    {
        $data = [
            'title' => $request->title ,
            'condition' => 'active',
        ];
        product::create($data);
        return redirect('/admin/products')->with('success' , 'محصول مورد نظر با موفقیت اضافه شد  ');
    }


    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/products')->with('error' , 'محصول مورد نظر شما حذف شد ');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('admin.products.editeProduct')->with('product' , $product);
    }

    public function createSystemView($id)
    {
        $product = Product::find($id);
        return view('admin.products.createSystem')->with('product' , $product);
    }

    public function createSystem(Request $request)
    {
        if($request['type'] == 'سیستم')
        {
            $type = 'system' ;
        }
        if($request['type'] == 'زیرسیستم')
        {
            $type = 'subsystem';
        }
        $data = [
            'title' => $request->title ,
            'price' => $request->price ,
            'type' => $type ,
            'product_id' => $request->product_id
        ];

        System::create($data);
        return redirect('admin/products/edit/' . $request->product_id);
    }


    public function editSystemView($id)
    {
        $system = System::find($id);
        return view('admin.products.editSystem')->with('system' ,$system );
    }

    public function editSystem($id , Request $request)
    {
        if($request->type == 'سیستم')
        {
            $type = 'system';
        }
        if($request->type == 'زیرسیستم')
        {
            $type = 'subsystem' ;
        }

        $system = System::find($id);
        $system->title = $request->title ;
        $system->price = $request->price ;
        $system->type = $type ;
        $system->save();

        return redirect('/admin/products/edit/' . $system->product_id);
    }

    public function deleteSystem($id)
    {
        $system = System::find($id);
        $system->delete();

        return redirect('/admin/products/edit/' . $system->product_id)->with('error' , 'سیستم مورد نظر حذف شد');
    }

    public function presview($id)
    {
        $system = System::find($id) ;
        $pres = DB::table('systems')
            ->join('pres', 'pres.pre_system_id', '=', 'systems.id')
            ->where('system_id' , $system->id)
            ->get();
        $product = Product::find($system->product_id);

        $systems = System::where('product_id' , $system->product_id)->get();


        return view('admin.products.pres')->with('system' , $system)->with('pres' , $pres)->with('product' ,$product)->with('systems' , $systems);
    }

    public function createPreView($id)
    {
        $system = System::find($id);
        $systems = System::where('product_id' , $system->product_id)->get();
        return view('admin.products.createpre')->with('systems' , $systems)->with('system' , $system);
    }

    public function createPre($id , Request $request)
    {
        $pres = Pre::where('system_id' , $id)->where('pre_system_id' ,  $request->pre_system_id)->get();

        if(count($pres))
        {
            return redirect('/admin/products/systems/pers/' . $id)->with('error' , 'پیشنیاز مورد نظر قبلا اضافه شده است ') ; 
        }
        $data = [
            'system_id' => $id ,
            'pre_system_id' => $request->pre_system_id
        ];
        Pre::create($data);
        return redirect('/admin/products/systems/pers/' . $id)->with('پیشنیاز به سیستم مورد نظر اضافه شد ');
    }

    public function deletePre($id)
    {
        $pre = Pre::find($id);
        $pre->delete();
        return redirect('admin/products/systems/pers/' . $pre->system_id)->with('error' , 'پیش نیاز مورد نظر با موفقبت حذف شد ');
    }

    public function createToolView($id)
    {
        $product = Product::find($id);
        return view('admin.products.createTool')->with('product' ,$product);
    }

    public function createTool($id,Request $request)
    {
        $product = Product::find($id);
        $data = [
            'title' => $request->title ,
            'count_title' => $request->count_title ,
            'default_count' => $request->default_count ,
            'max_count' =>  $request->max_count ,
            'price' => $request->price , 
            'product_id' => $product->id
             
        ];
        Tool::create($data);
        return redirect('/admin/products/edit/' . $product->id)->with('success' , 'امکان جانبی مورد نظر با موفقیت اضافه شد ');
    }

    public function deleteTool($id)
    {
        $tool = Tool::find($id);
        $tool->delete();

        return redirect('/admin/products/edit/' . $tool->product_id)->with('error' , 'امکان جانبی مورد نظر حذف شد');
    }

    public function editToolView($id)
    {
        $tool = Tool::find($id);
        $product = Product::find($tool->product_id);
        return view('admin.products.editTool')->with('tool' , $tool) ->with('product' , $product);
    }

    public function editTool($id ,Request $request)
    {
        $tool = Tool::find($id);
        $tool->title = $request->title ;
        $tool->count_title = $request->count_title ;
        $tool->default_count = $request->default_count ;
        $tool->max_count = $request->max_count ;
        $tool->price = $request->price ;
        $tool->save();

        return redirect('/admin/products/edit/' . $tool->product_id);
    }

    public function preToolView($id)
    {
        $tool = Tool::find($id) ;
        $product = Product::find($tool->product_id);
        $pres = DB::table('systems')
            ->join('pre_tools', 'pre_tools.pre_system_id', '=', 'systems.id')
            ->where('pre_tools.tool_id' , $tool->id)
            ->get();

        $systems = System::where('product_id' , $tool->product_id)->get();

        return view('admin.products.toolpers')->with('product' ,$product) ->with('pres' , $pres)->with('systems' , $systems) ->with('tool' ,$tool);

    }


    public function preToolCreate($id , Request $request)
    {

        $presTool = PreTool::where('tool_id' , $id)->where('pre_system_id' ,$request->pre_system_id )->get();
        if(count($presTool) > 0)
        {
            return redirect('/admin/products/tool/pers/' . $id)->with('error' , 'پیش نیاز مورد نظر قبلا اضافه شده است ');
        }



        $data = [
            'tool_id' => $id ,
            'pre_system_id' => $request->pre_system_id
        ];
        PreTool::create($data);
        return redirect('/admin/products/tool/pers/' . $id)->with('پیشنیاز به امکان حانبی مورد نظر اضافه شد ');
    }

    public function preTooldelete($id)
    {
        $preTool= preTool::find($id);
        $preTool->delete();
        return redirect('admin/products/tool/pers/' . $preTool->tool_id)->with('error' , 'پیش نیاز مورد نظر با موفقبت حذف شد ');
    }


    public function users()
    {
        $users = User::all();
        return view('admin.users.index')->with('users' ,$users);
    }


    public function orders(){

        $SepidarRequests = SepidarRequest::all();
        return view('admin.order.order')->with('SepidarRequests' , $SepidarRequests );
    }
   


}
