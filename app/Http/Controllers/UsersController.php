<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCropRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login(Request $request){

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            $user = User::where('email', $request->email)->first();
            if($user->is_admin()){
                return redirect()->route('tanamans');
            }else if($user->is_farmer()){
                return redirect()->route('dashboard');
            }
        }else{
            return redirect()->back()->withInput($request->only('email', 'password'))->withErrors([
                'email' => 'Email anda tidak terdaftar',]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCropRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('/unregistered');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmers = User::all()->where('farmer', 1);
        $admin = User::all()->where('admin', 1);
        $unassigneds = User::all()->where('farmer', 0)->where('admin', 0);
        $count = count($unassigneds);
        $farm = count($farmers);

        return view('users.index', compact('farmers', 'unassigneds', 'count', 'farm', 'admin'));
    }

    public function changeFarmer(Request $request){
        $update = User::findOrFail($request->id);
        $update->farmer = 1;
        $update->save();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }

    public function unregistered(){
        return view('request.index');
    }
}
