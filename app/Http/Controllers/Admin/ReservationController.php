<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservation = new Reservation();
        $tables = Table::where('status',TableStatus::Avalaiable)->get();
        return view('admin.reservations.create',
            ['reservation' => $reservation, 'tables' => $tables]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose the table base on guests.');
        }
        $request->validate($this->rules());
//        $request_date = Carbon::parse($request->res_date);
//        foreach ($table->reservations as $res) {
//            if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
//                return back()->with('warning', 'This table is reserved for this date.');
//            }
//        }

        Reservation::create($request->all());
        return redirect()->route('admin.reservations.index')
            ->with('success', 'Reservation Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * ccccccccccccccccccc     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $tables = Table::all();
        return view('admin.reservations.edit',
            ['reservation' => $reservation, 'tables' => $tables]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate($this->rules());
        $reservation->update($request->all());
        return redirect()->route('admin.reservations.index')
            ->with('success', 'Reservation Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('admin.reservations.index')
            ->with('warning', 'Reservation Deleted Successfully');
    }

    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'res_date' => ['required', 'date', new DateBetween(), new TimeBetween()],
            'tel_number' => ['required'],
            'table_id' => ['required'],
            'guest_number' => ['required'],
        ];
    }
}
