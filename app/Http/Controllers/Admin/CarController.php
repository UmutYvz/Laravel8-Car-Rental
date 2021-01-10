<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = Car::all();
        return view('admin.car', ['dataList' => $dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$dataList = Category::with('children')->get();
        $dataList = Category::all();
        return view('admin.car_add', ['dataList' => $dataList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Car;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        $data->user_id = Auth::id();
        $data->brand = $request->input('brand');
        $data->brand_id = $request->input('brand_id');
        $data->model = $request->input('model');
        $data->year = $request->input('year');
        $data->licance_plate = $request->input('licance_plate');
        $data->engine_power = $request->input('engine_power');
        $data->fuel_type = $request->input('fuel_type');
        $data->color = $request->input('color');
        $data->gear_type = $request->input('gear_type');
        $data->slug = $request->input('slug');
        if ($request->file('image') != null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        
        $data->save();
        return redirect()->route('admin_cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car, $id)
    {
        $data = Car::find($id);
        $dataList = Category::all();
       // $dataList = Category::with('children')->get();
        //return view('admin.car_edit', ['data' => $data, 'dataList' => $dataList]);
        return view('admin.car_edit', ['data' => $data,'dataList'=>$dataList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car, $id)
    {
        $data = Car::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        $data->user_id = Auth::id();
        $data->brand = $request->input('brand');
        $data->brand_id = $request->input('brand_id');
        $data->model = $request->input('model');
        $data->year = $request->input('year');
        $data->licance_plate = $request->input('licance_plate');
        $data->engine_power = $request->input('engine_power');
        $data->fuel_type = $request->input('fuel_type');
        $data->color = $request->input('color');
        $data->gear_type = $request->input('gear_type');
        $data->slug = $request->input('slug');
        if ($request->file('image') != null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car, $id)
    {
        $data = Car::find($id);
        $data->delete();
        return redirect()->route('admin_cars');
    }
}
