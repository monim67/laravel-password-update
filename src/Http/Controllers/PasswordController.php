<?php

namespace Monim67\LaravelPasswordUpdate\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Monim67\LaravelPasswordUpdate\Events\PasswordUpdate;

class PasswordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function edit()
    {
        return view('auth.passwords.edit');
    }

    public function update(Request $request)
    {
        $data = $this->validateWithBag('laravel-password-update', $request, [
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_new_password' => 'required|same:new_password',
        ]);

        $user = \Auth::user();

        if (\Hash::check($data['old_password'], $user->password)){
            $user->password = bcrypt($request->new_password);
            $user->save();
            event(new PasswordUpdate($user));
            return redirect()->back()->with('laravel-password-update-success', 'Your password updated successfully.');
        }
        else return redirect()->back()->withErrors(['Current password is not valid'], 'laravel-password-update');
    }

}
