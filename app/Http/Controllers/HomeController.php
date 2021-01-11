<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Message;
use App\Models\Car;
use App\Models\Image;

class HomeController extends Controller
{
    //


    public static function categoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getSetting(){
        return Setting::first();
    }

    
    public function cars($id,$slug)
    {
        $data = Car::where('category_id',$id)->get();
        //print_r($data);
        //exit();
        return view('home.car_list',['dataList'=>$data]);
    }

    public function carDetail($id,$slug){
        $data = Car::find($id);
        $dataList = Image::where('car_id',$id)->get();
       // print_r($dataList);
        //exit();
        return view('home.car_detail',['data'=>$data,'dataList'=>$dataList]);
    }



/*    public function sendmessage(Request $request){
        $data =  new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        Session::flash('message','this is a message');
        return redirect()->route('contactus')->with('success','Message successfully sended.');
    }*/

    public function aboutus(){
        return view('home.about');
    }

    public function contactus(){
        return view('home.contact');
    }
    public function references(){
        return view('home.references');
    }

    public function index(){
        
        $setting = Setting::first();

        $daily = Car::select('id','title','image','price','slug','brand','model','gear_type','engine_power','fuel_type')->limit(4)->inRandomOrder()->get();
        $last = Car::select('id','title','image','price','slug','brand','model','gear_type','engine_power','fuel_type')->limit(4)->orderByDesc('id')->get();
        $picked = $daily = Car::select('id','title','image','price','slug','brand','model','gear_type','engine_power','fuel_type')->limit(2)->inRandomOrder()->get();

        $data =[
            'setting'=>$setting,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'page' => 'home'
        ];

        return view('home.index',$data);
    }


    public function login(){
        return view('admin.login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function logincheck(Request $request){


        if($request->isMethod('post')){

            $credentials = $request->only('email','password');

            if(Auth::attempt($credentials)){

                $request->session()->regenerate();
                return redirect()->intended('admin');
            }

            return back()->withErrors([
               'email' => 'the provided credentials do not match our records.'
            ]);


        }else{
            return view('admin.login');
        }

    }

    public function sendmessage(Request $request){
        $data =  new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        Session::flash('message','this is a message');
        return redirect()->route('contactus')->with('success','Message successfully sended.');
    }

}
