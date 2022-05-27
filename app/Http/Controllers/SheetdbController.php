<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;
use App\Models\User;

class SheetdbController extends Controller
{
    public function create() {
        return view("register.create");


    }
    public function storage() {
        $attributes=request()->validate([
            'name' => 'required|max:255',
            'email' =>  'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);
        
        $attributes['password'] = bcrypt($attributes['password']);
        User::create($attributes);


        $sheetdb = new SheetDB('cgw539joifkju');
        $sheetdb->create([
            'name'=>$attributes['name'],'email'=>$attributes['email'],'password'=>$attributes['password']
        ]);
        return redirect('/dashboard');




    }
  

}
