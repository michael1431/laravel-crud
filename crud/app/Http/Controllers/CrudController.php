<?php

namespace App\Http\Controllers;

use App\Crud;

use Illuminate\Http\Request;

class CrudController extends Controller
{

	public function Crud_index(){

		$crud = Crud::orderBy('name','ASC')->get();

		return view('crud.read',compact('crud'));


	}

    public function Crud_create(){

    	return view('crud.create');
    }

    public function Crud_store(Request $request){


    	$this->validate($request,[

    		'name' =>'required',
    		'email'=>'required|email|max:100|unique:cruds',
    		'phone'=>'required|max:11|unique:cruds',
    		
    	],
    	[

    		'name.required'=>'Please Enter Your Name',
    		'email.required'=>'Please Enter Your Email',
    		'email.email'=>'Please Enter a valid email',
    		'email.required'=>'Please Enter Your Email',
    		'phone.required'=>'Please Enter Your Phone Number',

    	]);

    	$cr= new Crud();
    	$cr->name = $request->name;
    	$cr->email = $request->email;
    	$cr->phone = $request->phone;
    	$cr->save();

    	session()->flash('success','Your data stored successfully!');

    	return redirect()->route('crud.index');





    }


    public function Crud_edit($id){

    	$user = Crud::find($id);

    	return view('crud.edit', compact('user'));
    }

    public function Crud_update(Request $request, $id){



    	$this->validate($request,[

    		'name' =>'required',
    		'email'=>'required|email|max:100',
    		'phone'=>'required|max:11',
    		
    	],
    	[

    		'name.required'=>'Please Enter Your Name',
    		'email.required'=>'Please Enter Your Email',
    		'email.email'=>'Please Enter a valid email',
    		'email.required'=>'Please Enter Your Email',
    		'phone.required'=>'Please Enter Your Phone Number',

    	]);

    	$cr= Crud::find($id);
    	$cr->name = $request->name;
    	$cr->email = $request->email;
    	$cr->phone = $request->phone;
    	$cr->save();

    	session()->flash('success','Your data Updated successfully!');

    	return redirect()->route('crud.index');

    }


    public function Crud_delete($id){


    	$del = Crud::find($id);

    	$del->delete();

    	session()->flash('success','Your data Deleted successfully!');

    	return redirect()->route('crud.index');


    }

}
