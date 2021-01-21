<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Car;
use DateTime;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resList = Reservation::all();
        return view('admin.reserved_car', [ 'resList' => $resList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation, $id)
    {
        $data = Reservation::find($id);
        return view('admin.reserved_car_edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation, $id)
    {
        $car_id = $request->input('car_id');
        $car = Car::find($car_id);


        $data = Reservation::find($id);
        $data->car_id = $request->input('car_id');
        $data->phone = $request->input('phone');
        $data->r_start_date = $request->input('r_start_date');
        $data->r_end_date = $request->input('r_end_date');
        $data->payment_method = $request->input('payment_method');

                $sdate = $request->input('r_start_date');
                $edate = $request->input('r_end_date');
                $datetime1 = new DateTime($sdate);
                $datetime2 = new DateTime($edate);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');
        
        $data->price = $car->price * $days;

        $data->save();

        return redirect()->route('admin_reserved_car');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation,$id,$car_id)
    {  
        $car = Car::find($car_id);
        $car->status = 'True';
        $car->save();
        $data = Reservation::find($id);
        $data->delete();
        return redirect()->route('admin_reserved_car');
    }
}
