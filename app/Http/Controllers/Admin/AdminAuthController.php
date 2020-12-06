<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class AdminAuthController extends Controller
{
    //
    public function login()
    {
        return view('admin.auth.login');
    }

    public function check(LoginAdminRequest $request)
    {
        //$user = User::where('email','=',$request->email)->first();
        $admin = DB::table('admins')
            ->where('email',$request->email)
            ->first();


        if ($admin)
        {
            if(Hash::check($request->password,$admin->password))
            {
                // if password is match , then redirect user to profile
                $request->session()->put('LoggedAdmin',$admin->id);
                return redirect('admin/dashboard');

            }else{
                return  back() -> with(['error' => 'Invalid password!']);

            }
        }else{
            return  back() -> with(['error' => 'No account found for this email!']);

        }
    }

    public function dashboard()
    {
        if(session()->has('LoggedAdmin'))
        {
            //$user = User::where('id','=',session('LoggedUser'))->first();
            $user = DB::table('admins')
                ->where('id',session('LoggedAdmin'))
                ->first();
            $data = [
                'LoggedAdminInfo'=>$user
            ];
        }
        return view('admin.dashboard',$data);
    }

    public function logout()
    {
        if (session()->has('LoggedAdmin'))
        {
            session()->pull('LoggedAdmin');
            return redirect('admin/login');
        }
    }
}
