<?php

namespace App\Http\Controllers\Admin;

use App\categories;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Str;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =categories::all();
        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData =$request->validate([
            'name' =>'required|unique:categories',
        ]);
        $categories= new categories;
        $categories->name=$request->name;
        $categories->slug= Str::slug($request->name) ;
        $categories->disc=$request->disc;
        $categories->image=$request->image;
        $categories->save();

        Toastr::success('Successfully', 'Category Created',["progressBar" => true,"timeOut"=> "1200",]) ;
        return redirect()->route('admin.category.index');

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
        $category=categories::where('slug',$id)->first();
        return view('backend.category.edit',compact('category'));

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
        $categories=categories::where('slug',$id)->first();
        $categories->name=$request->name;
        $categories->slug= Str::slug($request->name) ;
        $categories->disc=$request->disc;
        // $categories->image=$request->image;
        $categories->save();

        Toastr::success('Successfully', 'Category Updated',["progressBar" => true,"timeOut"=> "1200",]) ;
        return redirect()->route('admin.category.index');
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
