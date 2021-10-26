<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //deklarasi variabel tittle yang akan tampil pada view
        $title="Daftar Balita";
        //(object) digunakan untuk instansiasikan array menjadi object
        //agar data dapat ditampilkan dalam object $item->nama_anak
        //jika tidak (object), maka dapat ditampilkan menggunakan $item['nama_anak]
        $balita=[(object)[
            'id_anak'=>3,
            'nama_anak'=> 'ita',
            'id_ibu'=> '3',
            'tempat_lahir_anak'=> 'bebandem',
            'tgl_lahir'=> '20',
            'alamat'=> 'bali',
            'foto'=> 'uploads/balitas/balita1.png'
        ],(object)[
            'id_anak'=>4,
            'nama_anak'=> 'james',
            'id_ibu'=> '2',
            'tempat_lahir_anak'=> 'jakarta',
            'tgl_lahir'=> '3',
            'alamat'=> 'jakarta',
            'foto'=> 'uploads/balitas/balita2.png'
        ]];
        //dapat juga disimpan dalam sebuah collection data
        //sehingga data balita dapat menggunakan beberapa fungsi colection
        $balita=collect($balita);
        //mengirimkan seluruh variabel untuk ditampilkan pada view
        return view('admin.daftarbalita',compact('title','balita'));
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
        //
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
        //
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
}
