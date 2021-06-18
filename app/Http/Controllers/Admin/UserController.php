<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\roles;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
   $users =User::all();
        return view('backend.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles=roles::all();
        $user=User::findOrFail($id);
        return view('backend.user.edit',compact('user','roles'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        if(Auth::user()->id==$id){
         Toastr::error('Failed', "User cant Updated own role",["progressBar" => true,"timeOut"=> "1200",]) ;

return redirect()->route('admin.user.index');

        }else{
            $user->role_id=$request->role_id;
            $user->update();
         Toastr::success('Successfully', 'User Role Updated',["progressBar" => true,"timeOut"=> "1200",]) ;
            return redirect()->route('admin.user.index');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id)->delete();
        Toastr::success('Successfully', 'User Role Deleted',["progressBar" => true,"timeOut"=> "1200",]) ;
        return redirect()->route('admin.user.index');

    }
}
