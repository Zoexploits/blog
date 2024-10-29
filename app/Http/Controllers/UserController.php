<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name'=>'string|required',
            'email'=>'string|required',
            'role'=>'string|required',
            'phone_number'=>'string|required',
            'password'=>'string|required'
        ]);



        $data=$request->all();
        $user=User::create($data);
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('user.view-user', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
          $user=User::find($id);
          return view('user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {        $request->validate([
            'name'=>'string|required',
            'email'=>'string|required',
            'role'=>'string|required',
            'phone_number'=>'string|required',
            'password'=>'string|required'
    ]);
        
        $validatedData=$request->all();
        $user = User::findOrFail($id);
        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'User Record updated successfully.');
    
    // $user = User::where('id',$id)->update($request->all());
    //       return $this->index();
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $user = User::findOrFail($id)->first(); // 
        $user->delete();
        return redirect()->route('users.index', )->with('success', 'User deleted successfully.');
      }
}
