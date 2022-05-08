<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservation(Request $request){
        $valid = $request->validate([
            'day'=>'required|min:4|max:255',
            'hour'=>'required|min:4|max:12',
            'name'=>'required|min:4|max:255',
            'phone'=>'required|min:4|max:255',
            'persons'=>'required|min:4|max:255'
        ]);

        $review = new Reservation();
        $review ->day=$request->input('day');
        $review ->hour=$request->input('hour');
        $review ->name=$request->input('name');
        $review ->phone=$request->input('phone');
        $review ->persons=$request->input('persons');
        $review->save();
        return redirect(route('home'))->with('success', 'rezervatia dumneavoastra este procesata');
    }
}
