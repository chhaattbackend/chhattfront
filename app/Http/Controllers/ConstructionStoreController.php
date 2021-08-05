<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use App\City;
use App\ConstructionDCategory;
use App\ConstructionStore;
use App\ConstructionStoreProduct;
use App\Store;
use App\Unit;
use App\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class ConstructionStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ConstructionStore $store)
    {
        $d_categories = [];
        foreach ($store->storeproducts as $item) {
            if ($item->product->d_category != null) {
                array_push($d_categories, ConstructionDCategory::find($item->product->d_category->id));
            }
        };
        $d_categories = array_unique($d_categories);
        return view('frontend.construction.store.single', compact('store', 'd_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $cities = City::all();
        if (auth()->user()->role->name == 'admin') {
            $users = User::where('id', auth()->user()->id)->get();
        }
        return view("admin.store.create", compact('cities', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::find($id);
        return view('admin.store.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::find($id);
        $units = Unit::all();
        $users = User::all();
        $cities = City::all();
        return view('admin.store.edit', compact('store', 'users', 'cities'));
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
        $store = Store::find($id);
        $store = Store::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $img = $image->move($destinationPath, $name);
            $store->update($request->except('image') + ['image' => $name]);
        } else {
            $store->update($request->all());
        }
        return redirect()->route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Store::find($id);
        $item->delete();
        return redirect()->back();
    }
}
