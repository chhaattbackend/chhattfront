<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use App\Service;
use App\ServiceType;
use App\Unit;
use Illuminate\Http\Request;

class ConstructionServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->ajax()) {
        if($request->page!=null && $request->keyword!=null){
            $keyword=$request->keyword;
            $services=Service::where('name','LIKE',"%{$request->keyword}%")->paginate(25);
            $services->withPath('?keyword=' . $request->keyword);
            return view('admin.service.index',compact('services','keyword'));
        }
    }
        if ($request->ajax()){
        if($request->keyword!=null){
            $keyword=$request->keyword;
            $services=Service::where('name','LIKE',"%{$request->keyword}%")->paginate(25);
            $services->withPath('?keyword=' . $request->keyword);
        }
        else{
            $keyword='';
            $services=Service::paginate(25);
        }
        return view('admin.service.search',compact('services','keyword'));
        }
        $services=Service::paginate(25);
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicetypes=ServiceType::all();
        $units=Unit::all();
        return view('admin.service.create',compact('servicetypes','units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $img = $image->move($destinationPath, $name);
            Service::create($request->except('image') + ['image' => $name]);
        } else {
            Service::create($request->all());
        }
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (auth()->user()->role->name=='superadmin') {
            $service=Service::find($id);
        }
        return view('admin.service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        $acategories=ACategory::all();
        $bcategories=BCategory::all();
        $units=Unit::all();
        $servicetypes=ServiceType::all();
        return view('admin.service.edit',compact('service','acategories','bcategories','units','servicetypes'));
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
        $service=Service::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $img = $image->move($destinationPath, $name);
            $service->update($request->except('image') + ['image' => $name]);
        } else {
            $service->update($request->all());
        }
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Service::find($id);
        $item->delete();
        return redirect()->back();
    }
}