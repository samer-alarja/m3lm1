<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\orders;
use Illuminate\Support\Facades\DB;

class Controllerlogin extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function loginsubmit(Request $request){
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3|max:20'
        ]);
        $user = Users::all();
        return view('all-user',compact('user'));
    }

    public function allorder($id){

        $order = orders::all()->where('id_amount',$id);
        return view('allorder',compact('order'));
    }

    public function delete($id){

      DB::table('user')->where('id',$id)->delete();
      
      return view('welcome');

      }

public function edit($id){
    $editt = Users::all()->where('id',$id);
    return view('edit',compact('editt'));
}

public function update(Request $request){

    DB::table('user')->where('id',$request->id)->update([
        'name' => $request->name,
        'birthday' => $request->birthday,
        'age' => $request->age,
        'gender' => $request->gender
    ]);
    return view('welcome');
    } 

   public function orderdelete($id){

    DB::table('order')->where('id',$id)->delete();

    return view('welcome');
  } 

  public function editorder($id){
 
    $editor = orders::all()->where('id',$id);
    return view('editord',compact('editor'));    
      } 


    public function updateorder(Request $request){

        DB::table('order')->where('id',$request->id)->update([
            'id_amount' => $request->id_amount,
            'delivery_date' => $request->delivery_date,
            'status' => $request->status
        ]);
        return view('welcome');
    }



public function html(){
    return view('html');
}
}
