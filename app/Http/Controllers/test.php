<?php

// namespace App\Http\Controllers;
// use App\Models\register;
// use Illuminate\Http\Request;

// class test extends Controller
 
    
//     { 
//         public function registration(){
//         return view('registration');
//     }
//         public function register(Request $request){
//           $user = new Voter();
//           $user->name = $request->name;
//         $user->mobile = $request->mobile;
//         $user->email = $request->email;
//         $user->password = $request->password;
//         $user->cpassword = $request->cpassword;
//         if($request->hasfile('photo')){
//             $file = $request->file('photo');
//             $ext = $file->getClientOriginalExtension();
//             $filename = time().'.'.$ext;
//             $file->move('uploads/voter/',$filename);
//             $user->photo = $filename;
//         }
//         $user->save();
//         return redirect('register')->with('message', "Data Inserted");

//     } 
// }
