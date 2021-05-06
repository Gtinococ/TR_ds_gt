<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Achievements;
use App\Models\RelationControl;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $logros = Achievements::all();
        $relations = RelationControl::all();
        //dd($relation);
        return view('/perfil', compact(['users','logros','relations']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        User::findOrFail($id)->update([
            'img' => 'user-img/'.time().'.'.$request->file->extension()
        ]);

        $imageName = time().'.'.$request->file->extension();
        $request->file->move(public_path('user-img'), $imageName);
        return redirect()->to('/perfil');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $user = User::find($id);
        return view('/edit', ['user'=>$user]);
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
        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            /* 'file' => $request->file */

        ]);
        /* $imageName = time().'.'.$request->file->extension();
        $request->file->move(public_path('images'), $imageName); */
        
        return redirect()->to('/perfil');



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
        if ($user != null) {
            $user->delete();
            return redirect('perfil');
        }
        
    }

}
