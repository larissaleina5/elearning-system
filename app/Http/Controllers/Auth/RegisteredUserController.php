<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
            "profile"=>['required','image','mimes:jpeg,jpg,pngchose']
        ]);
        //$request->file("profile")
        $image_path="";
        if(isset($request->profile)){

            $image_path = $request->profile->store('profile', 'public');
        }else{
            $image_path='assets/imgs/home-1/profile.png';
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile'=>$image_path,
            'role_id'=>2,
            'phone'=>$request->phone
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('student/dashboard');
    }
}
