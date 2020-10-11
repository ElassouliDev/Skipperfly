<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\AdminDatatable;


use App\Http\Requests\AdminRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\UserRequest;

use App\Models\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends SupperController
{


    public function login_page()
    {

        return view("dashboard.auth.login");


    }
    public function login(Request $request)
    {

        if ($user = auth()->attempt($request->only(['email','password']),$request->has('remember_me'))){
           return redirect(route('dashboard.index'));
        }
          return  back()->with(['error'=>trans('admin.email_or_password_not_correct')]);

    }

    public function logout(Request $request)
    {
        auth()->logout();


        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect(route('dashboard.login'));
    }
    /*public function forgetPassword(Request $request)
    {
        auth()->logout();


        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect(route('login'));
    }*/

    public function edit_profile(UserRequest $request)
    {

        $data = $request->only('name','email','about','image');


        $user = auth()->user();
      $user->update($data);

        $message = trans('admin.updated_successfully');
            return response(['status' => true, 'user' => $user, 'message' => $message]);
    }

    public function change_password(PasswordRequest $request)
    {

        if (Hash::check($request['current_password'], auth()->user()->password)) {
            auth()->user()->update(['password'=>$request['new_password']]);
            return response(['status' => true, 'message' =>trans('admin.change_password_done')]);

        }
        return response(['status' => false, 'message' => trans('admin.password_not_correct')], 403);

      }

}
