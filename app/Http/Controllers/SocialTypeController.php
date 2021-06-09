<?php

namespace App\Http\Controllers;

use App\SocialType;
use Illuminate\Http\Request;

class SocialTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $socialTypes = SocialType::paginate(25);
        return view('admin.social_type.index', compact('socialTypes'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social_type.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SocialType::create($request->all());
        return redirect()->route('socialtypes.index');
    }

    /**
     * Display the specified resource.
     * 
     * @param \App\SocialType $socialType
     * @return \Illuminate\Http\Response
     */
    public function show(SocialType $socialType) 
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \App\SocialType $socialType
     * @return \Illuminate\Http\Response.
     */
    public function edit(SocialType $socialType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \App\SocialType $socialType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialType $socialType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param \App\SocialType $socialType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = SocialType::find($id);
        $item->delete();
        return redirect()->back();
    }
}
