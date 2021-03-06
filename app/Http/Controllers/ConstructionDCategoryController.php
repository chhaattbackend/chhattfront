<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use App\CCategory;
use App\DCategory;
use Illuminate\Http\Request;

class ConstructionDCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request->keyword){
            $dcategories=DCategory::paginate(25);
            }
            else{

                $dcategories=DCategory::where('name','like','%'.$request->keyword.'%')
                ->paginate(25)->setPath ( '' );

                $pagination = $dcategories->appends ( array (
                    'keyword' => $request->keyword
            ));

            }

        return view('admin.d_category.index', compact('dcategories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ccategories=CCategory::all();
        return view('admin.d_category.create',compact('ccategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DCategory::create($request->all());
        return redirect()->route('dcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d_category=DCategory::find($id);
        return view('admin.d_category.show',compact('d_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d_category=DCategory::find($id);
        $ccategories=CCategory::all();
        return view('admin.d_category.edit',compact('d_category','ccategories'));
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
        $d_category=DCategory::find($id);
        $d_category->update($request->all());
        return redirect()->route('dcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=DCategory::find($id);
        $item->delete();
        return redirect()->back();
    }
}
