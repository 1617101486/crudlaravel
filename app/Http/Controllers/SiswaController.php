<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
$siswa = Siswa::all();

        return view('siswa.index',compact('siswa'));

            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
            'nama' => 'required|max:255|unique:siswa',
            'jurusan' => 'required|max:255',
            'alamat' => 'required|min:6'
        ]);

        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->jurusan = $request->jurusan;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        return redirect()->route('siswa.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit',compact('siswa'));
    
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
        $this->validate($request,[
            'nama' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'alamat' => 'required|min:6'
        ]);

        // update data berdasarkan id
        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->jurusan = $request->jurusan;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        return redirect()->route('siswa.index');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');  
   
    }
}
