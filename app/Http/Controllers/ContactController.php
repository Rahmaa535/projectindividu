<?php

namespace App\Http\Controllers;

use App\Models\jenis_kontak;
use App\Models\kontak;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('admin')->except('index', 'show');
    // }
    public function index()
    {
        $student = siswa::paginate(7);
        $jenis_kontak = jenis_kontak::all();
        return view('master_kontak', compact('student', 'jenis_kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }


    public function tambah($id)
    {
        $siswa = siswa::find($id);
        $jenis_kontak = jenis_kontak::all();
        return view('tambah_kontak', compact('siswa', 'jenis_kontak'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $message = [
            'required' => ':attribute harus diisi gaess'
        ];
        $validateData = $request->validate([], $message);

        kontak::create([
            'siswa_id' => $request->siswa_id,
            'jenis_kontak_id' => $request->jenis_kontak,
            'deskripsi' => $request->deskripsi
        ]);
        Session::flash('benar', 'Selamat!!! Kontak Anda Berhasil Ditambahkan');
        return redirect('/master_k');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kontak = siswa::find($id)->kontak()->get();
        return view('show_kontak', compact('kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kontak = kontak::find($id);
        $jenis_kontak = jenis_kontak::all();
        $siswa = siswa::find($id);
        return view('/edit_kontak', compact('kontak', 'jenis_kontak'));
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
        $message = [
            'required' => ':attribute harap diisi',
            'min' => ':attribute minimal :min karakter ya',
            'max' => ':attribute maksimal :max karakter ya'
        ];
        $validateData = $request->validate([
            'jenis_kontak_id' => 'required',
            'deskripsi' => 'required'
        ], $message);

        $kontak = kontak::find($id);
        $kontak->jenis_kontak_id = $request->jenis_kontak_id;
        $kontak->deskripsi = $request->deskripsi;
        $kontak->save();
        // kontak::find($id)->update($validateData);
        Session::flash('update', 'Selamat!!! Kontak Anda Berhasil Diupdate');
        return redirect('/master_k');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hapus($id)
    {
        $siswa = kontak::find($id)->delete();
        Session::flash('danger', 'Data Berhasil Dihapus :(');
        return redirect('/master_k');
    }
}