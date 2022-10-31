<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Reservation;
use App\Models\Sick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function index()
    {
        $index = 1;
        $doctor = Doctor::where('user_id', Auth::user()->id)->first();
        $reservation = Reservation::where('doctor_id', $doctor->id)->get();
        return view('reservation.index', compact('reservation', 'index'));
    }

    public function start($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = "1";
        $reservation->save();
        $sick = Sick::find($reservation->sick_id);
        return view('reservation.start', compact('sick'));
    }

    public function start_post(Request $request, $id)
    {
        $sick = Sick::find($id);
        $sick->status = $request->status;
        $sick->note = $request->note;
        $sick->drug = $request->drug;
        $sick->save();

        // return view('reservation.start', compact('sick'));
        return redirect()->route('reservation.index');
    }
}