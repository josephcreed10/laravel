<?php

namespace App\Http\Controllers;
use App\Models\Nameform;
use Illuminate\Http\Request;
use Illuminate\Http\Return;
use Illuminate\Validation\Validator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nameform');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
        $form=new Nameform;
        $form->name=$request->input('name');
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
        $details=Nameform::all();
        return view('details',compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
        $form=Nameform::find($id);
        $form->name=$request->input('name');
        $form->gender=$request->input('gender');
        $form->course=$request->input('course');
        $form->email=$request->input('email');
        $form->save();
        return redirect('/details');

        
    }
    public function update_view($id)
    {
        $form=Nameform::find($id);
        return view('update',compact('form'));

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data=Nameform::find($id);
        $data->delete();
        return redirect('/details');
    }
}
