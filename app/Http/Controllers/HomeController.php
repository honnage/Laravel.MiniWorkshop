<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // auth()->user()->assignRole('admin');
        // auth()->user()->removeRole('admin');
        // auth()->user()->syncRoles(['reader','writer']);
        // auth()->user()->removeRole('writer');

        if(auth()->user()->hasRole("admin")){
            // return "ฉันเป็น Admin";
            $user=auth()->user();
            // $user->syncPermissions(['manageuser','addpost','editpost','deletepost','readpost']);
            // $user->revokePermissionTo('editpost');
            // dd($user->hasAllPermissions(['manageuser','addpost','editpost','deletepost','readpost']));
            return redirect('/contact');
        }else{
            $user=auth()->user();
            // $user->givePermissionTo('readpost');
            $user->syncPermissions(['addpost','editpost','deletepost','readpost']);

            return view('home');
        }

    }
}
