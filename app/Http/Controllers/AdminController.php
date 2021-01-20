<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
class AdminController extends Controller
{
    /** show login page
     * @param null
     * return view
     */
    public function showLogin()
    {
        return view('admin.login');
    }

    /** show login page
     * @param null
     * return view
     */
    public function signInAction(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validatedData->fails()) {
            $error = $validatedData->errors()->toArray();
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => $error]]);
        }

        $email = $request->input('email');
        $password = $request->input('password');

        $credentials['email'] = $email;
        $credentials['password'] = $password;

        if (Auth::guard('users')->attempt($credentials)) {

            return json_encode(['status' => 200]);

        }else{
            
            return json_encode(['status' => 422, 'responseJSON' => ['errors' => ['password' => 'Invalid Credentials']]]);
        }

    }


     /** show dashboard page
     * @param null
     * return view
     */
    public function showDashboard()
    {
        return view('admin.dashboard');
    }

     /**logout user */
     public function logout(){
        Auth::guard('users')->logout();
        return redirect()->route('admin.login.form');
    }


}
