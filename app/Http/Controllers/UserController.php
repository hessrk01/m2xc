<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;


use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admit(Request $request) 
    {
        $userID = $request->data['id'];
        $user = User::find($request->data['id']);

        if($user) {
            $user->admitted = $request->data['value'];
            $user->save();
        }
    }

    public function admin(Request $request) 
    {
        $userID = $request->data['id'];
        $user = User::find($request->data['id']);

        if($user) {
            $user->admin = $request->data['value'];
            $user->save();
        }
    }

    public function notifyUser(Request $request)
    {
        $userID = $request->data['id'];
        $user = User::find($request->data['id']);

        if($user) {
            $user->notify = $request->data['value'];
            $user->save();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::sortable()
                        ->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
        $validateMe=($request->validated());
        
        //dd($request);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->admitted = ($request->has('admitted')? true : false);
        $user->admin = ($request->has('admin')? true : false);
        $user->notify = ($request->has('notify')? true : false);
        $user->save();

        flash('User record updated')->success();
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
