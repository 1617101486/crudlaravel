<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wali;
class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wali = Wali::all();

        return view('wali.index',compact('wali'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wali.create');
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
            'nipd' => 'required|unique:wali',
            'nama' => 'required|unique:wali',
            ]);

        $wali = new Wali;
        $wali->nipd = $request->nipd;
        $wali->nama = $request->nama;
        $wali->save();
        return redirect()->route('wali.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wali = Wali::findOrFail($id);
        return view('wali.show',compact('wali'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wali = Wali::findOrFail($id);
        return view('wali.edit',compact('wali'));
    
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
            
        ]);

        // update data berdasarkan id
        $wali = Wali::findOrFail($id);
        $wali->nipd = $request->nipd;
        $wali->nama = $request->nama;
        $wali->save();
        return redirect()->route('wali.index');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wali = Wali::findOrFail($id);
        $wali->delete();
        return redirect()->route('wali.index');  
   
    }
}
