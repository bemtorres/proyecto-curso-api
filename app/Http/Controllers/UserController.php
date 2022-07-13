<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return User::all();
        $users = User::all();
        return view('user.index', compact('users'));
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
        try {
            $user = new User();
            $user->name = $request->nombre;
            $user->email = $request->correo;
            $user->password = $request->password;
            $user->save();

            return $user;
        } catch (\Throwable $th) {
            return response()->json(['message' => 'No se pudo crear'], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($id);

        // if ($user) {
        //     return $user;
        // }

        // return response()->json(['message' => 'Not Found!'], 404);

        // try {
        //     return User::findOrFail($id);
        // } catch (\Throwable $th) {
        //     return response()->json(['message' => 'Not Found!'], 404);
        // }


        try {
            $user =  User::findOrFail($id);
            return view('user.show' , compact('user'));
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Not Found!'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        try {
            $user = User::find($id);
            $user->name = $request->nombre;
            $user->email = $request->correo;
            $user->password = $request->password;
            $user->update();


            return back()->with('success', 'se ha actuliazdo');
        } catch (\Throwable $th) {
            return response()->json(['message' => 'No se pudo crear'], 401);
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
        $user = User::find($id);
        $user->delete();

        return back()->with('success', 'se ha eliminado');
    }

    public function posts($id)
    {
        $user = User::With('posts')->find($id);
        // return $user->posts;
        return $user;

        // return view('users.posts', compact('user'));
    }

}
