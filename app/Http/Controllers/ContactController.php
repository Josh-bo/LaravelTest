<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // return $user;
        // $saveUser = $user->save();

        // if ($saveUser) {
        //     return view('index')->with('message', 'User Saved successfully.')->with('status', true);
        // } else {
        //     return view('index')->with('Error occurred', 'Error occurred, Please try again.')->with('status', false);
        // }
        return $request->name;
    }
}
