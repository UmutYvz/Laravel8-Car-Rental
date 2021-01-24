<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Message;
use App\Models\Car;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use DateTime;

class HomeController extends Controller
{
    //

    public function Acardetail($id)
    {
        $userid = Auth::id();
        $data = Car::find($id);
        $dataList = Image::where('car_id', $id)->get();
        return view('home.car_detail', ['data' => $data, 'dataList' => $dataList, 'userid' => $userid]);

    }

    public function faq()
    {
        $dataList = Faq::all()->sortBy('position');
        return view('home.faq', ['dataList' => $dataList]);
    }

    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getSetting()
    {
        return Setting::first();
    }


    public function allcars()
    {
        $data = Car::where('status', 'True')->get();
        //print_r($data);
        //exit();
        return view('home.car_list', ['dataList' => $data]);
    }

    public function cars($id, $slug)
    {
        $data = Car::where('category_id', $id)->where('status', 'True')->get();
        //print_r($data);
        //exit();
        return view('home.car_list', ['dataList' => $data]);
    }

    public function carDetail($id, $slug)
    {
        $userid = Auth::id();
        $data = Car::find($id);
        $dataList = Image::where('car_id', $id)->get();
        if(Auth::check()){
            return view('home.car_detail', ['data' => $data, 'dataList' => $dataList, 'userid' => $userid]);
        }else{
            return view('home.car_detail_nl', ['data' => $data, 'dataList' => $dataList]);
        }
        
        // print_r($dataList);
        //exit();
        
    }

    public function getcar(Request $request)
    {
        $search = $request->input('search');

        $count = Car::where('title', 'like', '%' . $search . '%')->where('status', 'True')->get()->count();

        if ($count == 1) {
            $data = Car::where('title', 'like', '%' . $search . '%')->where('status', 'True')->first();
            return redirect()->route('cardetail', ['id' => $data->id, 'slug' => $data->slug]);
        } else {
            return redirect()->route('carlist', ['search' => $search]);
        }
    }

    public function carlist($search)
    {

        $dataList = Car::where('title', 'like', '%' . $search . '%')->where('status', 'True')->get();
        return view('home.search_cars', ['search' => $search, 'dataList' => $dataList]);
    }


    public function aboutus()
    {
        return view('home.about');
    }

    public function contactus()
    {
        return view('home.contact');
    }
    public function references()
    {
        return view('home.references');
    }

    public function index()
    {

        $setting = Setting::first();
        $slider = Car::select('id', 'title', 'image', 'price', 'slug')->limit(6)->get();
        $daily = Car::select('id', 'title', 'image', 'price', 'slug', 'brand', 'model', 'gear_type', 'engine_power', 'fuel_type')->where('status','true')->limit(4)->inRandomOrder()->get();
        $last = Car::select('id', 'title', 'image', 'price', 'slug', 'brand', 'model', 'gear_type', 'engine_power', 'fuel_type')->where('status','true')->limit(4)->orderByDesc('id')->get();
        $picked = $daily = Car::select('id', 'title', 'image', 'price', 'slug', 'brand', 'model', 'gear_type', 'engine_power', 'fuel_type')->where('status','true')->limit(5)->inRandomOrder()->get();



        $data = [
            'slider' => $slider,
            'setting' => $setting,
            'daily' => $daily,
            'last' => $last,
            'picked' => $picked,
            'page' => 'home'
        ];

        return view('home.index', $data);
    }


    public function login()
    {
        return view('admin.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function logincheck(Request $request)
    {


        if ($request->isMethod('post')) {

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                $request->session()->regenerate();
                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'the provided credentials do not match our records.'
            ]);
        } else {
            return view('admin.login');
        }
    }

    public function sendmessage(Request $request)
    {
        $data =  new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        Session::flash('message', 'this is a message');
        return redirect()->route('contactus')->with('success', 'Message successfully sended.');
    }

    public function makeReservation(Request $request, $car_id, $user_id)
    {


        $updateCar = Car::find($car_id);
        $updateCar->status = 'False';
        $slug = $updateCar->slug;
        
        

        $data = new Reservation();
        $data->phone = $request->input('phone');
        $data->payment_method = $request->input('payment_method');
        $data->comment = $request->input('comment');
        $data->car_id = $car_id;
        $data->user_id = $user_id;
        $data->r_start_date = $request->input('r_start_date');
        $data->r_end_date = $request->input('r_end_date');

            $sdate = $request->input('r_start_date');
            $edate = $request->input('r_end_date');
            $datetime1 = new DateTime($sdate);
            $datetime2 = new DateTime($edate);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');

        $data->price = $updateCar->price * $days;

        $updateCar->save();
        $data->save();
        Session::flash('message', 'this is a message');
        return redirect()->route('cardetail', ['id' => $car_id, 'slug' => $slug])->with('success', 'Reservation successfully added.');
    }
}
