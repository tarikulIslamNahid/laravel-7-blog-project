<?php

namespace App\Http\Controllers\Admin;

use App\categories;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'image' =>'required|image|mimes:png,jpg,jpeg'
        ]);
        $image = $request->image;
        $imgName=Str::slug($request->name).uniqid().'.'. $image->getClientOriginalExtension();
        if(!Storage::disk('public')->exists('category')){
            Storage::disk('public')->makeDirectory('category');
        }
        $image->storeAs('category',$imgName,'public');
        $categories= new categories;
        $categories->name=$request->name;
        $categories->slug= Str::slug($request->name) ;
        $categories->disc=$request->disc;
        $categories->image=$imgName;
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
        if($request->image!=null){
            $categories=categories::where('slug',$id)->first();
            $image = $request->image;
            $imgName=Str::slug($request->name).uniqid().'.'. $image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('category')){
                Storage::disk('public')->makeDirectory('category');
            }

            $image->storeAs('category',$imgName,'public');

            // check image exists or not in folder
            if(Storage::disk('public')->exists('category/'.$categories->image)){
                unlink('storage/category/'.$categories->image);
            }
            $categories->name=$request->name;
            $categories->slug= Str::slug($request->name) ;
            $categories->disc=$request->disc;
            $categories->image=$imgName;

            $categories->save();
        }else{
            $categories=categories::where('slug',$id)->first();
            $categories->name=$request->name;
            $categories->slug= Str::slug($request->name) ;
            $categories->disc=$request->disc;
            $categories->save();
        }


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
       $categories = categories::findOrFail($id);
        // check image exists or not in folder
        if(Storage::disk('public')->exists('category/'.$categories->image)){
        unlink('storage/category/'.$categories->image);
        }
        $categories->delete();
        Toastr::success('Successfully Category Deleted',["progressBar" => true,"timeOut"=> "1200",]) ;
        return redirect()->route('admin.category.index');
    }
}
