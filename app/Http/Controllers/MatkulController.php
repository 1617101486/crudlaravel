<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;
class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = Matkul::all();

        return view('matkul.index',compact('matkul'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('matkul.create');

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
            'nama_matkul' => 'required',
            'kkm' => 'required|max:2',
            ]);

        $matkul = new Matkul;
        $matkul->nama_matkul = $request->nama_matkul;
        $matkul->kkm = $request->kkm;
        $matkul->save();
        return redirect()->route('matkul.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matkul = Matkul::findOrFail($id);
        return view('matkul.show',compact('matkul'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul = Matkul::findOrFail($id);
        return view('matkul.edit',compact('matkul'));
    
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
            'nama_matkul' => 'required|max:255',
            'kkm' => 'required|max:2',
            
        ]);

        // update data berdasarkan id
        $matkul = Matkul::findOrFail($id);
        $matkul->nama_matkul = $request->nama_matkul;
        $matkul->kkm = $request->kkm;
        $matkul->save();
        return redirect()->route('matkul.index');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matkul = Matkul::findOrFail($id);
        $matkul->delete();
        return redirect()->route('matkul.index');  
  
    }
}
