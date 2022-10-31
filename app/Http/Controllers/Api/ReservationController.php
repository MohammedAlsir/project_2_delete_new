<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Reservation;
use App\Models\Sick;
use App\Models\User;
use App\Traits\ApiMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    use ApiMessage;

    public function reservation(Request $request)
    {
        $data = $request->validate([
            // 'user_id'     => 'required',
            'doctor_id'  => 'required',

        ]);
        $sick = new Sick();
        // $sick->reservation_id = $reservation->id;

        $sick->status = '';
        $sick->drug = '';
        $sick->note = '';
        $sick->save();

        $user = User::find(Auth::user()->id);
        $doctor = Doctor::find($request->doctor_id);
        $reservation = new Reservation();
        $reservation->user_id = Auth::user()->id;
        $reservation->sick_id = $sick->id;
        $reservation->doctor_id = $request->doctor_id;
        if ($user->company_id != null) {
            $reservation->price =  ($doctor->price * $user->company->discount) / 100;
        } else {
            $reservation->price =  $doctor->price;
        }

        $reservation->save();


        return $this->returnData('reservation', $reservation);
    }

    public function get_reservation()
    {
        $reservation = Reservation::with('doctor')->where('user_id', Auth::user()->id)->get();
        return $this->returnData('reservation', $reservation);
    }

    public function get_one_reservation($id)
    {
        $reservation = Reservation::with('doctor')->with('sick')->where('user_id', Auth::user()->id)->where('id', $id)->get();
        return $this->returnData('reservation', $reservation);
    }
}