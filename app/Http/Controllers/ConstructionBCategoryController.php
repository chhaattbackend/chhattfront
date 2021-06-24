<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use Illuminate\Http\Request;

class ConstructionBCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request->keyword){
            $bcategories=BCategory::paginate(25);
            }
            else{

                $bcategories=BCategory::where('name','like','%'.$request->keyword.'%')
                ->paginate(25)->setPath ( '' );

                $pagination = $bcategories->appends ( array (
                    'keyword' => $request->keyword
            ) );

            }

        return view('admin.b_category.index', compact('bcategories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acategories=ACategory::all();
        return view('admin.b_category.create',compact('acategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BCategory::create($request->all());
        return redirect()->route('bcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $b_category=BCategory::find($id);
        return view('admin.b_category.show',compact('b_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b_category=BCategory::find($id);
        $acategories=ACategory::all();
        return view('admin.b_category.edit',compact('b_category','acategories'));
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
        $b_category=BCategory::find($id);
        $b_category->update($request->all());
        return redirect()->route('bcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=BCategory::find($id);
        $item->delete();
        return redirect()->back();
    }
}