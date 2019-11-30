<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Profile;
use Auth;
class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        return view('frontend.profile', compact('profile'));
    }

    public function update(Request $request, $id)
    {
       dd('ok' . $id);
    }
}
