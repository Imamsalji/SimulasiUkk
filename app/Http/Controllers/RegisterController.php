<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Auth;
use PDF;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getRow = Register::orderBy('noreg', 'DESC')->get();
        $rowCount = $getRow->count();
        
        $lastId = $getRow->first();
        $index = Register::latest()->paginate(8);
        return view('Register.index',compact('index','rowCount','lastId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daftar = Register::where('user_id',Auth::user()->id)->first();
        if (!empty($daftar)) {
            return view('Register.sudah');
        }
        $getRow = Register::orderBy('noreg', 'DESC')->get();
        $rowCount = $getRow->count();
        
        $lastId = $getRow->first();
        $kode = 00001;
        
        if ($rowCount > 0) {
            if ($lastId->noreg < 9) {
                    $kode = "0000".''.($lastId->noreg + 1);
            } else if ($lastId->noreg < 99) {
                    $kode = "000".''.($lastId->noreg + 1);
            } else if ($lastId->noreg < 999) {
                    $kode = "00".''.($lastId->noreg + 1);
            } else if ($lastId->noreg < 9999) {
                    $kode = "0".''.($lastId->noreg + 1);
            } else {
                   $kode = "".''.($lastId->noreg + 1);
            }
        }
        return view('Register.create',compact('kode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Register::create([
            'nama' => $request->nama,
            'user_id' => Auth::user()->id,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'asal_sekolah' => $request->asal_sekolah,
            'minat_jurusan' => $request->minat_jurusan,
        ]);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Register::where('user_id',$id)->first();
        return view('Register.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getRow = Register::orderBy('noreg', 'DESC')->get();
        $rowCount = $getRow->count();
        
        $lastId = $getRow->first();
        $kode = 00001;
        
        if ($rowCount > 0) {
            if ($lastId->noreg < 9) {
                    $kode = "0000".''.($lastId->noreg );
            } else if ($lastId->noreg < 99) {
                    $kode = "000".''.($lastId->noreg );
            } else if ($lastId->noreg < 999) {
                    $kode = "00".''.($lastId->noreg );
            } else if ($lastId->noreg < 9999) {
                    $kode = "0".''.($lastId->noreg );
            } else {
                   $kode = "".''.($lastId->noreg );
            }
        }
        $show = Register::where('user_id',$id)->first();
        return view('Register.edit',compact('show','kode'));
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
        Register::where('noreg',$id)->update([
            'nama' => $request->nama,
            'user_id' => Auth::user()->id,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'minat_jurusan' => $request->minat_jurusan,
            ]);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Register::where('user_id',$id)->first();
        Register::findorfail($show->noreg)->delete();
        return redirect('/home');
    }

    public function print($id)
    {
        $show = Register::findorfail($id);
        $pdf = PDF::loadview('laporan.user',compact('show'))->setPaper('A4','potrait');
        return $pdf->stream();
    }
}
