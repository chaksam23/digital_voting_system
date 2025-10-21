<?php

namespace App\Http\Controllers;
use App\Models\Voter;
use App\Models\register as user;
use Illuminate\Http\Request;
use Illuminate\Http\Models\admin;

class appuser extends Controller
{
    public function registration(){
        return view('registration');
    }
    public function welcome(){
        return view('welcome');
    }
    public function login(Request $request){
        $user = new Voter();
         $user->voter_name = $request->voter_name;
         $user->voter_phone = $request->voter_phone;
         $user->voter_password = $request->voter_password;
         $user->group = $request->group;
            $user->save();
        // if($user){
            return redirect('welcome')->with('message', "Login Successful");

        //     return view('welcome');
        // }else{
        //     return redirect('/')->with('message', "Invalid Phone or Password");
        // }
    }
     public function register(Request $request){
        $user = new user();
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->cpassword = $request->cpassword;
        if($request->hasfile('photo')){
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/voter/',$filename);
            $user->photo = $filename;
        }
        $user->save();
        return redirect('registration')->with('message', "Data Inserted");

    } 
    public function Create(){
        $title = 'Create';
        return view('create', compact('title'));
    }
    public function addvoter(Request $request){
        $voter = new Voter();
        $voter->vname = $request->vname;
        $voter->fname = $request->fname;
        $voter->voter_id = $request->voter_id;
        $voter->phone = $request->phone;
        $voter->address = $request->address;
        $voter->save();
        return redirect('create')->with('message', "Voter Added Successfully");
}
    public function View(){
        $voter_id = Voter::all(); // get all data from the database
        $title = 'View Page';
        return view('view',compact('title', 'voter_id'));
    }
}
   

        

    

