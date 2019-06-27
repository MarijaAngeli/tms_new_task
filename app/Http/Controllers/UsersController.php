<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function edit($id){

    	return view('edit', compact('id'));
    }
}