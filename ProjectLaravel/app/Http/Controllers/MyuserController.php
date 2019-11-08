<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Myuser;

class MyuserController extends Controller
{
    public function Tampil(){
        $myusers=MyUser::all();
        return view('users.showdata',[
            'myuser'=> $myusers
        ]);
    }
    public function Simpan(Request $request){
        $myuser = new Myuser();// membuat object dari model myuser.php

        $myuser->fname=$request->fname;
        $myuser->lname=$request->lname;
        $myuser->email=$request->email;
        $myuser->notelp=$request->notelp;
        $myuser->complain=$request->complain;
        //$myuser->name=$request->name;

        $myuser->save();// simpan ke database
        return redirect()->Route('show');


    }
    public function Delete($id){
        $myuser = Myuser::find($id);

        $myuser->delete();
        return redirect()->Route('show');
    }
    //
}
