<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Phone;

class UserPhoneRelationshipController extends Controller
{
    public function index()
    {
        return view('addphoneform');
    }
    /**
     * [insertPhoneRecord description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function insertPhoneRecord(Request $request)
    {
        $user_id = Auth::user()->id;
        $phone_number =  $request->phone_number;
        $user = User::find($user_id);
        $phone = new Phone;
        $phone->phone = $phone_number;
        $user->phone()->save($phone);
        return redirect()->back();
    }
}
