<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::all();
        return view('layouts.Dashbord', compact('reservations'));
    }
    



    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'address' => 'required|string',
            'day' => 'required|string',
            'hour' => 'required|integer',
            'date_time' => 'required|date',
        ]);
        
        Reservation::create($validatedData);
        // connectify('success', 'Connection Found', 'Success Message Here');
        return redirect()->back()->with('info', 'Reservation create successfully');
        
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'address' => 'required|string',
            'day' => 'required|string',
            'hour' => 'required|integer',
            'date_time' => 'required|date',
        ]);

        $reservation->update($validatedData);
        return redirect('/reservations')->with('info', 'Reservation update successfully');
    }

    public function destroy($id)
{
    $reservation = Reservation::findOrFail($id);
    $reservation->delete();

    return redirect()->back()->with('info', 'Reservation deleted successfully');
}


    public function showSendMessageForm($id)
{
    $reservation = Reservation::findOrFail($id);
    return view('reservations.send_message_form', compact('reservation'));
}

}
