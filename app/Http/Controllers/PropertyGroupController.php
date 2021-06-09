<?php

namespace App\Http\Controllers;

use App\PropertyGroup;
use App\SocialType;
use Illuminate\Http\Request;

class PropertyGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertyGroups = PropertyGroup::paginate(25);
        //dd($propertyGroups);
        return view('admin.property_group.index', compact('propertyGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $socialTypes = SocialType::all();
        return view('admin.property_group.create', compact('socialTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PropertyGroup::create($request->all());
        return redirect()->route('propertygroups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param App\PropertyGroup $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resourse.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\PropertyGroup $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyGroup $propertyGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\PropertyGroup $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyGroup $propertyGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\PropertyGroup $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PropertyGroup::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function getgroups($id)
    {
        $groups = PropertyGroup::where('social_type',$id)->get();
        return response()->json(['data' => $groups]);
    }
}
