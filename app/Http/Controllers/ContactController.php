<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = Address::orderBy('id', 'DESC')->get()->take(1);
        return view('contact',[
            'contact' => $contact,
        ]);
    }

    public function message(Request $request){
        $valid = $request->validate([
            'name'=>'required|min:2|max:255',
            'phone'=>'required|min:4|max:255',
            'email'=>'required|min:4|max:255',
            'message'=>'required|min:4'
        ]);

        $review = new Message();
        $review ->name=$request->input('name');
        $review ->phone=$request->input('phone');
        $review ->email=$request->input('email');

        $review ->message=$request->input('message');
        $review->save();
        return redirect(route('contact'))->with('success', 'mesajul este expediat cu succes');
    }

}
