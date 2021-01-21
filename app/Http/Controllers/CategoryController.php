<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use App\Models\Combo;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage-categories',["categories" => Category::all()]);
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
        $request->validate(
            [
                "title" => "required|max:50|min:2",
                "description" => "required|max:50|min:2"
            ]
        );

        $category = new Category;

        $category->name = $request->title;
        $category->description = $request->description;
        $category->slug = Str::slug($request->title);
        $result = $category->save();
        if($result){
            return redirect()->back()->with('success', 'category successfuly added');
        }
        else{
            return redirect()->back()->with('fail', 'something went wrong');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categor = Category::where('slug',$slug)->firstOrFail();

        return view('category')->with(['categ' => $categor, 'combos' => Combo::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categor = Category::where('id',$id)->firstOrFail();

        return view('update-categories')->with('categ', $categor);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate(
            [
                "title" => "required|max:50|min:2",
                "description" => "required|max:50|min:2"
            ]
        );

        $result = Category::where('id', $id)->update(['name' => $request->title, 'description' => $request->description]);
        if($result){
            return redirect()->back()->with('success', 'category successfuly updated');
        }
        else{
            return redirect()->back()->with('fail', 'something went wrong');

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Category::where('id', $id)->delete();

        if($result){
            return redirect()->back()->with('deleted', 'category successfuly deleted');
        }
        else{
            return redirect()->back()->with('deletefail', 'something went wrong');

        }

    }
    public function delete(Request $request){
        foreach ($request->cats as $catid);

        $result = Category::where('id', $catid)->delete();

        if($result){
            return redirect()->back()->with('deleted', 'category successfuly deleted');
        }
        else{
            return redirect()->back()->with('deletefail', 'something went wrong');

        }

   }
}
