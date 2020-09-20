<?php

namespace App\Http\Controllers\Website;


use App\Events\NewUserEvent;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\UserRequest;

use App\Models\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends SupperController
{


    public function login(Request $request)
    {
        if ($request->ajax()) {
            if ($user = auth()->attempt($request->only(['email', 'password']), $request->has('remember_me'))) {
                return \response()->json(['status' => true, 'message' => trans('admin.login is done')]);;
            }
            return \response()->json(['status' => false, 'message' => trans('admin.email_or_password_not_correct')]);;

        }
        abort(404);

    }

    public function register(UserRequest $request)
    {

        if ($request->ajax()) {

            $user = User::create($request->only('name', 'email', 'password'));
            $user->syncRoles(['user']);

//            dispatch(new  \App\Jobs\SendWelcomeMailJob($user));
//            Artisan::call('schedule:run')
            event(new NewUserEvent($user)); // send welcome email

            Auth::loginUsingId($user->id);

            return \response()->json(['status' => true, 'message' => trans('admin.create account is done')]);

        }

        abort(404);

    }

    public function logout(Request $request)
    {
        auth()->logout();

        return back();
    }


}
