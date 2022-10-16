<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = FileManager::all();
        return view('pages.files.index',compact('files'));
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
        $file = new FileManager();
        if($request->hasFile('file')){
            $fileManger = $request->file('file');
            $size = $request->file('file')->getSize();
            $filename = time() . '.' . $fileManger->getClientOriginalExtension();
            $fileManger->move(public_path('files'), $filename);
            $file->file = $filename;
            $file->file_type = $fileManger->getClientOriginalExtension();
            $file->file_size = $size;
        }
        $file->name = $request->name;
        $file->date = Carbon::now();
        $file->save();
        return back();
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
        $file = FileManager::find($id);
        $file->delete();
        return back();
    }
}
