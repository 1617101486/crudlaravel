<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $dosen = Dosen::all();

        return view('dosen.index',compact('dosen'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('dosen.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nipd' => 'required|max:255|unique:dosen',
            'nama' => 'required|max:255|unique:dosen',
            'matkul' => 'required|min:2'
        ]);

        $dosen = new Dosen;
        $dosen->nipd = $request->nipd;
        $dosen->nama = $request->nama;
        $dosen->matkul = $request->matkul;
        $dosen->save();
        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.show',compact('dosen'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit',compact('dosen'));
    
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
        $this->validate($request,[
            'nipd' => 'required|max:255',
            'nama' => 'required|max:255',
            'matkul' => 'required'
        ]);

        // update data berdasarkan id
        $dosen = Dosen::findOrFail($id);
        $dosen->nipd = $request->nipd;
        $dosen->nama = $request->nama;
        $dosen->matkul = $request->matkul;
        $dosen->save();
        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('dosen.index');  
   
    }
}
