<?php

namespace App\Http\Controllers;
use App\Models\Nameform;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Return;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{

    public function index()
    {
        return view('nameform');
    }

    public function loginpage()
    {
        return view('loginpage');
    }

    public function logout()
    {
        Auth::logout();
 
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('dashboard');
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    


    public function register(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required',
            'password'=>'required',
            'email'=>'required|email|unique:users,email'
        ]);
        $form=new User;
        $form->name=$request->input('name');
        $p=$request->input('password');
        $hashed = Hash::make($p);
        $form->password=$hashed;
      
        $form->gender=$request->input('gender');
        $form->course=$request->input('course');
        $form->email=$request->input('email');
        $form->save();
        return redirect('/nameform')->with('success','Form submitted successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showall(Request $request)
    {
        $details=User::all();
        return view('details',compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email'
        ]);
        $form=User::find($id);
        $form->name=$request->input('name');
        $form->gender=$request->input('gender');
        $form->course=$request->input('course');
        $form->email=$request->input('email');
        $form->save();
        return redirect('/details');

        
    }
    public function update_view($id)
    {
        $form=User::find($id);
        return view('update',compact('form'));

        
    }
    public function edit_view()
    {
        return view('edit_view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('/details');
    }


public function edit(Request $request,$id)
    {
        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email->ignore(auth()->id()'
        ]);
        $form=User::find($id);
        $form->name=$request->input('name');
        $form->gender=$request->input('gender');
        $form->course=$request->input('course');
        $form->email=$request->input('email');
        $form->save();
        return redirect('/dashboard');

        
    }
}