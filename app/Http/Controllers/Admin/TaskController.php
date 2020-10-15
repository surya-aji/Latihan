<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\kategori;
use App\task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagename = "Data Tugas";
        $data = task::all();
        return view('admin.task.index',compact('data','pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        $pagename = 'Form Input Tugas';
        return view('admin.task.create',compact('pagename','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'nama_tugas'=>'required',
            'kategori_tugas'=>'required',
            'keterangan_tugas'=>'required',
            'status_tugas' =>'required'
        ]);

       
        $data = new task([
        'nama_tugas' => $request->get('nama_tugas'),
        'id_kategori' => $request->get('kategori_tugas'),
        'ket_tugas' => $request->get('keterangan_tugas'),
        'status_tugas' => $request->get('status_tugas'),

        ]);
        
        // dd($data);
        $data->save();
        return redirect('admin/task')->with('success','Tugas berhasil Disimpan');
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
        $pagename = "Update";
        $kategori = kategori::all();
        $data_task = task::find($id);
        return view ('admin.task.edit',compact('pagename','kategori',"data_task"));
        

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
        $data_delete = task::find($id);
        $data_delete->delete();
        return redirect('admin/task')->with('success','Tugas berhasil Disimpan');
    }
}
