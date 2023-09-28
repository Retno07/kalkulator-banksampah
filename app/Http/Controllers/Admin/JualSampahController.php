<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JualSampahRequest;
use App\Models\JualSampah;
use App\Models\JenisSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JualSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = JenisSampah::all();

        return view('pages.admin.jual-sampah.edit',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_sampah = JenisSampah::all();
        return view('pages.admin.jenis-sampah.create',[
            'jenis_sampah' => $jenis_sampah
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JenisSampahRequest $request)
    {
        $data = $request->all();
        $data['foto_sampah'] = $request->file('foto_sampah')->store(
            'assets/gallery', 'public'
        );

        JenisSampah::create($data);
        return redirect()->route('jenis-sampah.index');
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
        $item = JenisSampah::findOrFail($id);

        return view('pages.admin.jenis-sampah.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JenisSampahRequest $request, $id)
    {
        $data = $request->all();
        $data['foto_sampah'] = $request->file('foto_sampah')->store(
            'assets/gallery', 'public'
        );
        
        $item = JenisSampah::findOrFail($id);

        $item->update($data);

        return redirect()->route('jenis-sampah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = JenisSampah::findOrFail($id);
        $item->delete();

        return redirect()->route('jenis-sampah.index');
    }
}
