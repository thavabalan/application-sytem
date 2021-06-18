<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Http;

use File;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $countries = Http::get('https://restcountries.eu/rest/v2/all')->json();
        return view('auth.register',['countries' => $countries]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $random_string = md5(microtime());
    
        $fileName = $random_string.'.'.$request->profile->extension(); 
    
        $save_path           = storage_path() . '/app/public/Profile/';
    
        $path          = $save_path . $fileName ;
    
        $public_path        = '/storage/Profile/' . $fileName;
    
        File::makeDirectory($save_path, $mode = 0755, true, true);
    
        $request->profile->move($save_path, $fileName);
        $user = User::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'surname' => $request->surname,
            'mobilenumber' => $request->mobilenumber,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'state' => $request->state,
            'lga' => $request->lga,
            'profile' => $public_path,
            'admission_type' => $request->admission_type,
            'guardian_firstname' => $request->guardian_firstname,
            'guardian_middlename' => $request->guardian_middlename,
            'guardian_surname' => $request->guardian_surname,
            'guardian_email' => $request->guardian_email,
            'guardian_mobile' => $request->guardian_mobile,
            'guardian_contact' => $request->guardian_contact,
            'guardian_gender' => $request->guardian_gender,
            'jamb_no' => $request->jamb_no,
            'jamb_year' => $request->jamb_year,
            'jamb_sub1' => $request->jamb_sub1,
            'jamb_sub2' => $request->jamb_sub2,
            'jamb_sub3' => $request->jamb_sub3,
            'jamb_sub4' => $request->jamb_sub4,
            'jamb_sub1score' => $request->jamb_sub1score,
            'jamb_sub2score' => $request->jamb_sub2score,
            'jamb_sub3score' => $request->jamb_sub3score,
            'jamb_sub4score' => $request->jamb_sub4score,
            'is_hotel' => $request->is_hotel,            
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('result');
    }
}
