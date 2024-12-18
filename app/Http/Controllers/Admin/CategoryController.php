<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderby('position', 'asc')->get();
        return view('admin.category.index', compact('categories'));
    }   

    /**
     * Show the form for creating a new resource.   
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nep_title"=>"required",
            "eng_title"=>"required"
        ]);

        $category=new Category();
        $category->nep_title=$request->nep_title;
        $category->eng_title=$request->eng_title;
        $category->slug= Str::slug($request->eng_title);
        $categoryCount=Category::count();
        $category->position=$categoryCount+1;

        $category->save();
        toast("Category saved successfully.", "success");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoryCount=Category::count();
        $category=Category::find($id);
        return view('admin.category.edit',compact('category','categoryCount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category=Category::find($id);

        $category->nep_title=$request->nep_title;
        $category->eng_title=$request->eng_title;
        $category->position=$request->position;
        
        $category->update();
        toast("Category $category->eng_title updated.", "success");

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $category=Category::find($id);
        
        $tCategories=Category::where('position','>=', $category->position)->get();
        
        foreach($tCategories as $tCat){
            $tCat->position=$tCat->position-1;
            $tCat->update();
        }

        $category->delete();
        toast("Category $category->eng_title deleted.", "success");
        return redirect()->route('category.index');
    }
}
