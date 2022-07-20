<?php

namespace App\Http\Controllers;

use App\Models\Name;
use App\Models\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clients()
    {
        $names = ["joao", "pedro", "tales"];

        return view('clients', compact('names'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
        return view('ex.create');
    }

    public function store(Request $request)
    {
        $nameFile = null;

        $request->file->getMimeType();
        
        // Retorna o nome original do arquivo
        $name = $request->file->getClientOriginalName() ;
        
        // Extensão do arquivo
        $request->file->getClientOriginalExtension();
        $extension = $request->file->extension();

        $nameFile = "{$name}";

        $path = $request->file->storeAs('public/documents', $nameFile);

        return view('ex.create', compact('path'));
    }
    

    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Name  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Name $name)
    {
        return view('names.show', compact('name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function edit(Name $name)
    {
        return view('names.edit', compact('name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Name $name)
    {
        $name->update(
            [
                'name' => $request->name,
            ]
        );

        return redirect('/names');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function destroy(Name $name)
    {
        $name->delete();

        return redirect('/names');
    }
}
