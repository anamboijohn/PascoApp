<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use QCod\ImageUp\HasImageUploads;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // dd($request['img']);
        if (($request['avatar'])) {
            $id = Auth::user()->id;
            $upload =   User::find($id)->uploadImage(request()->file('avatar'), 'avatar');
        }

        $source = public_path() . '/img/default.svg';
        $destination = public_path(). '/storage/avatars/default.svg';
        copy($source, $destination);
        return back();
    }

    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('profile', ['user' => $user]);
    }

    public function userNameEdit(User $user, Request $request)
    {
        $userName = str_replace(' ', '', $request->userName);
        $userNameExist =  User::all()->where('userName', $userName)->first() ? true : false;
        if ($userNameExist) {
            return back()->with('status', 'userName already exists');
        }
        if (Str::length($userName) > 10) {
            return back()->with('status', 'username cannot be more than 10 characters');
        }
        $user->update(['userName' => $userName]);
        return back();
    }
    public function countryEdit(User $user, Request $request)
    {
        $user->update(['country' => $request->country]);
        return back();
    }
    public function emailEdit(Request $request, User $user)
    {
        $emailExist =  User::all()->where('email', $request->email)->first() ? true : false;
        if ($emailExist) {
            return back()->with('status', 'Email already exists');
        }
        $user->update(['email' => $request->email]);
        return back();
    }
    public function phoneEdit(User $user, Request $request)
    {
        $user->update(['phone' => $request->tel]);
        return back();
    }
    public function schoolEdit(User $user, Request $request)
    {
        $user->update(['school' => $request->school]);
        return back();
    }
    public function regionEdit(User $user, Request $request)
    {
        $user->update(['region' => $request->region]);
        return back();
    }

    public function publicProfile(User $user)
    {
        return view('courses.publicProfile', ['user' => $user]);
    }
}
