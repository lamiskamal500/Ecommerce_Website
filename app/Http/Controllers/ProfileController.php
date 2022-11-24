<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){

        if(Auth::check())
        {
        $user = User::find(Auth::user()->id);
        return view('inc.profile' , compact('user'));
        }
        else {
            return redirect('/login');
        }
    }
}
