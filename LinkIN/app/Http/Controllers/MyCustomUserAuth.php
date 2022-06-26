<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;
use Hash;
use Session;
use DB;
use App\Http\Controllers\Controller;

class MyCustomUserAuth extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration-form");
    }
    public function tRyadd(){
        return view("auth.add");
    }
    public function registerUSER(Request $request){

        $insert = DB::table('users')->insert([
            
            'name'=>$request->name,
            'gender'=>$request->gender,
            'datebirth'=>$request->datebirth,
            'address'=>$request->address,
            'email'=>$request->email,
            /**encryption para secure ang password sa user */
            'password'=>Hash::make($request->password), 

        ]);
        
        if($insert){
            return back()->with('registered','Submitted Successfully!');
        }
        else{
            return back()->with('fail', 'Fail to Register');
        }

    }
    public function loginUSER(Request $request){
        $request->validate([
            'email',
            'passsword',
        ]);
        $thisUSER =DB::table('users')->where('email','=',$request->email)->first();

        if($thisUSER){
            if(Hash::check($request->password,$thisUSER->password)){
                return redirect('Homepage');
            }
            else{
                return back()->with('fail', 'Incorrect Password!');
            }
        }
        else{
            return back()->with('fail', 'Account not Found!');
        }
    }
    
    /**para maview nko ang data */
    public function dashboard(){
        
        $row = DB::table('users')->get();
        return view("auth.user-homepage",compact('row'));
    }


/**EDIT  ---*/
    public function postEdit($id){
        $filter = DB::table('users')->where('id', $id)->first();
        return view("auth.edit",compact('filter'));
    }

    public function tHISupdate(Request $request){
        
        $update = DB::table('users')->where('id', $request->id)->update([
            
            'name'=>$request->name,
            'gender'=>$request->gender,
            'datebirth'=>$request->datebirth,
            'address'=>$request->address,
            'email'=>$request->email

        ]);
        if($update){
            return back()->with('nOOTEupdate','Updaate Successfully!');
        }
        else{
            return back()->with('fail', 'Fail to Updatte');
        }
    }

    public function dataDEL(Request $request){

        $delete = DB::table('users')->where('id', $request->id)->delete();
        
        return back()->with('noteDEL','Delete Record Successfully!');

    }
}
