<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.home');
    }
    public function member()
    {
        return view('website.home.member');
    }
    public function memberSubmit(Request $request)
    {
        $member = new User();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->password = $request->password;
        $member->save();
        return redirect()->back();
    }
    public function shop()
    {
        return view('website.home.shop');
    }

}
