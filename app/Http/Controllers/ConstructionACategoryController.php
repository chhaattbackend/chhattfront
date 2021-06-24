<?php

namespace App\Http\Controllers;

use App\ConstructionACategory;
use App\ConstructionBCategory;
use App\ConstructionProduct;
use Illuminate\Http\Request;

class ConstructionACategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bcategories=ConstructionBCategory::all();
        $products=ConstructionProduct::orderBy('id','desc')->paginate(8);
        // dd($acategories);
        // if(!$request->keyword){
        //     }
        //     else{

        //         $acategories=ConstructionACategory::where('name','like','%'.$request->keyword.'%')
        //         ->paginate(10)->setPath ( '' );

        //         $pagination = $acategories->appends ( array (
        //             'keyword' => $request->keyword
        //     ) );

        //     }

        return view('frontend.construction.web.home.index', compact('bcategories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.a_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ConstructionACategory::create($request->all());
        return redirect()->route('acategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a_category = ConstructionACategory::find($id);
        return view('admin.a_category.show', compact('a_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a_category = ConstructionACategory::find($id);
        return view('admin.a_category.edit', compact('a_category'));
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
        $a_category = ConstructionACategory::find($id);
        $a_category->update($request->all());
        return redirect()->route('acategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('h');
        $item = ConstructionACategory::find($id);
        $item->delete();
        return redirect()->back();
    }
}
