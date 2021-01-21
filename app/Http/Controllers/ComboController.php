<?php

namespace App\Http\Controllers;

use App\Models\Combo;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Gate;

class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage-combos')->with(['categories' => Category::all()]);
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
        $combo = new Combo;

        $filename = 'combo' . $request->file->extension();
        $request->file->move(public_path('combos'),$filename);
    }
    // $filename = 'combo' . $request->file->extension();
    // $request->file->move(public_path('combos'))
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function show(Combo $combo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function edit(Combo $combo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Combo $combo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Combo $combo)
    {
        //
    }

    public function uploadCombos(Request $request,Combo $combo){
        $request->validate(
            [
                'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
                "title" => 'required'
            ]
            );

            $cats = $request->cates;
        $filename = $request->title . "." . $request->file->extension();
        $cpath = $request->file->move(public_path('combos'),$filename);
        $linecount = 0;
        $handle = fopen($cpath, "r");
        while(!feof($handle)){
        $line = fgets($handle, 4096);
        $linecount = $linecount + substr_count($line, PHP_EOL);
        }

        $combo->title = $request->title;
        $combo->file_path = $cpath;
        $combo->rows = $linecount;
        $combo->category_id = $cats;

        $result = $combo->save();
        if($result){
            return redirect()->back();
        }
    }

    public function download($id,Combo $combo){

        $combo = Combo::where('id',$id)->first();
        if (! Gate::allows('download-combo', $combo)) {
            abort(403);
        }
        $headers = array('Content-Type: application/txt');
        return Response::download($combo->file_path, $combo->title . '.txt',$headers);
    }
}
