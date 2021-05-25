<?php

namespace App\Http\Controllers;
use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticias::orderBy('id','DESC')->get();
        return view('/NOTICIAS/noticias', compact(['noticias']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('NOTICIAS/addnoticia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = Noticias::create([
            'name' => $request->name,
            'description' => $request->description,
            'writer' => Auth::user()->name
        ]);

        return redirect('noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show(Noticias $noticias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = Noticias::find($id);
        return view('editnoticia', ['noticia'=>$noticia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Noticias::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'writer' => Auth::user()->name

        ]);
        
        return redirect()->to('/noticias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticias = Noticias::find($id);
        if ($noticias != null) {
            $noticias->delete();
            return redirect('noticias');
        }
    }
}
