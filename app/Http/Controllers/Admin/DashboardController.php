<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\OrderConfirmationMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public $mailBody;
    public function index()
    {
        return view('admin.home.home');
    }
    public function memberList()
    {
        $members = User::where('status','pending')->where('role','user')->get();
        return view('admin.home.member-list',compact('members'));
    }
    public function edit($id)
    {
        $member = User::find($id)->where('role', 'user')
                                        ->where('status','pending')->first();
        return view('admin.home.member-edit',compact('member'));
    }
    public function memberApproved($id)
    {
        $member = User::find($id);
        $member->status = 'approved';
        $member->save();
        /*===================Mail Send Code================*/
        $this->mailBody = [
            'title' => 'This is mail title',
            'body' => 'This is mail body',

        ];
        Mail::to($member->email)->send(new OrderConfirmationMail($this->mailBody));
        /*===================Mail Send Code================*/

        return redirect()->route('dashboard.member');
    }
}
