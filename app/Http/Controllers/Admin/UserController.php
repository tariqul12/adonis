<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::latest()->get();
        return view('admin.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name'             => 'required|string',
                'email'            => 'required|email|unique:users,email',
                'password'         => 'required|string|min:8',
                'confirm_password' => 'required|string|min:8|same:password',
                'image'            => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            ],
            [
                'name.required' => 'Please enter your name.',
                'email.required' => 'Please provide an email address.',
                'email.unique' => 'This email is already registered.',
                'password.required' => 'A password is required.',
                'password.min' => 'Password must be at least 8 characters.',
                'confirm_password.same' => 'Password confirmation does not match.',
                'image.image' => 'The uploaded file must be an image.',
                'image.mimes' => 'The image must be a type of jpeg, png, jpg, or svg.',
                'image.max' => 'The image size must not exceed 2 MB.',
            ]
        );
        if ($request->password == $request->confirm_password) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            if ($request->hasFile('image')) {
                $user->profile_photo_path = getFileUrl($request->file('image'), 'uploads/user-images/');
            }
            $user->save();
            return back()->with('message', 'User Create Successfully');
        } else {
            return back()->with('message', 'Password and Confirm Password is not same');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $request->validate(
            [
                'name'             => 'required|string',
                'email'            => 'required',
                'image'            => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            ],
            [
                'name.required'  => 'Please enter your name.',
                'email.required' => 'Please provide an email address.',
                'image.image'    => 'The uploaded file must be an image.',
                'image.mimes'    => 'The image must be a type of jpeg, png, jpg, or svg.',
                'image.max'      => 'The image size must not exceed 2 MB.',
            ]
        );
        $user = User::findOrfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->hasFile('image')) {
            $user->profile_photo_path = getFileUrl($request->file('image'), 'uploads/user-images/');
        }
        $user->save();
        return redirect()->route('user.index')->with('message', 'User Update Successfully');
    }
}
