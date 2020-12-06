<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Traits\UserTrait;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{
    use UserTrait;
    //
    public function login()
    {
        return view('user.includes.sign_in');
    }

    public function register()
    {
        return view('user.includes.sign_up');
    }

    public function create(RegisterRequest $request)
    {
//        $user = new User();
//        $user->name_ar=$request->name_ar;
//        $user->name_en=$request->name_en;
//        $user->ssn=$request->ssn;
//        $user->phone=$request->phone;
//        $user->email=$request->email;
//        $user->password=Hash::make($request->password);
//        $query = $user->save();

        // save photo in folder
        $file_name = $this -> saveImages($request -> ssn_photo_face, 'user/images');
        $file_name2 = $this -> saveImages($request -> ssn_photo_back, 'user/images');
        // Use query builder
        $query = DB::table('users')
            ->insert([
                'name_ar'=>$request->name_ar,
                'name_en'=>$request->name_en,
                'ssn'=>$request->ssn,
                'countryCode'=>$request->countryCode,
                'ssn_photo_face'=>$file_name,
                'ssn_photo_back'=>$file_name2,
                'phone'=>$request->phone,
                'user_name'=>$request->user_name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)
            ]);

        if ($query)
        {
            return redirect() -> back() -> with(['success' => 'You Have been successfully register']);
        }else{
            return redirect() -> back() -> with(['error' => 'Something went wrong!']);

        }
    }

    public function check(LoginRequest $request)
    {
        //$user = User::where('email','=',$request->email)->first();
        $user = DB::table('users')
            ->where('email',$request->email)
            ->first();


        if ($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                // if password is match , then redirect user to profile
                $request->session()->put('LoggedUser',$user->id);
                return redirect('profile');

            }else{
                return  back() -> with(['error' => 'Invalid password!']);

            }
        }else{
            return  back() -> with(['error' => 'No account found for this email!']);

        }
    }

    public function profile()
    {
        if(session()->has('LoggedUser'))
        {
            //$user = User::where('id','=',session('LoggedUser'))->first();
            $user = DB::table('users')
                ->where('id',session('LoggedUser'))
                ->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];
        }
        return view('user.profile',$data);
    }

    public function logout()
    {
        if (session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }

    public function home()
    {
        return view('user.home');
    }
}
