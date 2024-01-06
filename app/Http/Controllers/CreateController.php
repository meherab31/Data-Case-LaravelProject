<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(){
        return view('create');
    }

    public function submit(Request $request){
        $user= new Users;

        $user->name=$request->name;

        $user->email=$request->email;

        $user->password=$request->password;

        $user->address=$request->address;

        $user->phone=$request->phone;
        //image insertion
        $image=$request->image;
        if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('userimg', $imagename);
            $user->image=$imagename;

            }

        $user->save();
        return redirect()->route('home');
    }


}
