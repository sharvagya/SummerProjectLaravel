<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Session;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    //loginform
    public function login()
    {
        return view('admin.adminlogin');
    }

      //signupform
  public function signin()
  {
      return view('admin.adminreg');
  }
    //signup data
    public function registered(Request $request)
    {
        //dd($request);
        //
        $request->validate([
            'name'=>"required",
            'email'=>"required|email|unique:admins",
            'password'=>"required|min:5|max:12"
            // 'confirmPassword'=>"required|"
        ]);
        $admin= new Admin();
        $admin->email=$request->email;
        $admin->username=$request->name;
        $admin->password=bcrypt($request->password);
        $res= $admin->save();
        if($res)
        {
            return back()->with('success','You have registered');
        }
        else{
            return back()->with('fail','Something went wrong');

        }
        return redirect()->route('adm.log');
    }
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email'=>"required|email",
            'password'=>"required|min:5|max:12"
        ]);
        $admin = Admin::where('email','=',$request->email)->first();
        if($admin)
        {
            if(Hash::check($request->password,$admin->password))
            {
                $request->session()->put('loginId',$admin->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Password not matched.');

            }
        }else{
            return back()->with('fail','This email is not registered');
        }
    }
    public function dashboard()
    {
        return "welcome";
    }
}
