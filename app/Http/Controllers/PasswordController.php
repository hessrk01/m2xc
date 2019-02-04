<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PasswordRequest;
use App\User;


class PasswordController extends Controller
{
    public function edit(User $user)
    {
        // abort_if($user->id !== Auth::id(), 403);
        // $this->authorize('view', $user);
        // if (\Gate::denies('view', $user)) {
        //     abort(403);
        // }

        return view('admin.user.password', compact('user'));
    }

    public function update(PasswordRequest $request, User $user)
    {
        $validator = $request->validated();
        // $validator = $this->validate($request, [
        //     'password' => 'required|confirmed',
        //     'password_confirmation' => 'required'
        // ]);

        // dd($validator);
        if ($validator->fails()) {
            dd($validator);
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
       }

        dd($request, $user);
        $user = User::find(Auth::id());

        $user->password = Hash::make($request->password);
        $user->save();
        flash('User password changed')->success();
        return redirect(route('user.index'));
    }
}
