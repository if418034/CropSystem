<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        $data = User::where('email', $email)->first();
        $pw = User::where('email', $email)->where('password', $password);
        $admin = User::where('email', $email)->where('admin', 1);
        $farmer = User::where('farmer', 1);

//        if($data){
//            if($pw){
//                if($admin){
////                    Auth::login($admin);
//                    return redirect('tanamansssd');
//                }elseif($farmer){
////                    Auth::login($farmer);
//                    return redirect()->intended('crops');
//                }else{
//                    return redirect('/unregistered');
//                }
//            }else{
//                return redirect('login')->with('alert','Password atau Email, Salah !');
//            }
//        }

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            $user = User::where('email', $request->email)->first();
            if($user->is_admin()){
                return redirect()->intended('users');
            }else if($user->is_farmer()){
                return redirect()->route('dashboard');
            }else{
                return view('request.index');
            }
        }else{
            return redirect()->back()->with('alert', 'Email atau Password salah !!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return view('request.index');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
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
