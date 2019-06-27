<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
     public function index(){

    	$users = User::all();
    	return response()->json($users);
    }

    public function show($id){

    	$user = User::find($id);
    	return response()->json($user);
    }

    public function update($id, Request $request){

    	$this->validate($request, [

    		'firstname' => 'required|min:2',
    		'lastname' => 'required|min:2',
    		'email' => 'required|email'
    	]);

    	$user = User::find($id);

    	$user->firstname = $request->get('firstname');
    	$user->lastname = $request->get('lastname');
    	$user->email = $request->get('email');

    	$user->update();


    	return response()->json($user);
    }
}
