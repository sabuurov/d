<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\learnModel;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class learnController extends Controller
{
	public function index(){
		return view('welcome');
	}

	public function registr() {
    	return view('reg');
	}

	public function sign(){
		return view('rs');
	}

	public function wel(){
		return view('welc');
	}

	public function profile() {
    	return view('profile');
	}

	public function edit() {
    	return view('edit');
	}

	public function store(Request $request){

		$result=DB::insert("insert into registration(firstName, lastName, email, password) values(?, ?, ?, ?)", [$request->input('firstName'), $request->input('lastName'), $request->input('email'), $request->input('password')]);
		return view('welc');
	}
// 	public function index() {
// 		$learn = learn::all();
// 		return view('welcome', compact('learn'));
// 	}

// 	public function create() {
// 		return view('create');
// 	}

// 	public function store(Request $request) {
// 		$this->validate($request, [
// 			'firstName'=>'required',
// 			'lastName'=>'required',
// 			'email'=>'required',
// 			'password'=>'required'
// 		/]);

// 		$learn = new learn;
// 		$learn->firstName = $request->firstName;
// 		$learn->lastName = $request->lastName;
// 		$learn->email = $request->email;
// 		$learn->password = $request->password;
// 		$learn->save();
// 		return redirect(route('home'))->with('successMSG', 'Learner Successfully Registrated!');
// 	}

// 	public function edit($id) {
// 		$learn = learn::find($id);
// 		return view('edit', compact('learn'));
// 	}

// 	public function update(Request $req, $id) {
// 		$this->validate($req, [
// 			'firstName'=>'required',
// 			'lastName'=>'required',
// 			'email'=>'required',
// 			'password'=>'required'
// 		]);

// 		$learn = new learn;
// 		$learn->firstName = $request->firstName;
// 		$learn->lastName = $request->lastName;
// 		$learn->email = $request->email;
// 		$learn->password = $request->password;
// 		$learn->save();
// 		return redirect(route('home'))->with('successMSG', 'Learner Successfully Updateded!');
// 	}

// 	public function delete($id) {
// 		learn::find($id)->delete();
// 		return redirect(route('home'))->with('successMSG', 'Learner Successfully Deleted!')
// 	}
}
