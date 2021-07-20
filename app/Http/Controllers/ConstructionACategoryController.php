<?php

namespace App\Http\Controllers;

use App\ConstructionACategory;
use App\ConstructionBCategory;
use App\ConstructionProduct;
use App\ConstructionStore;
use App\ConstructionStoreProduct;
use Illuminate\Http\Request;

class ConstructionACategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bcategories = ConstructionBCategory::all();
        // $store=ConstructionStore::orderBy('id','desc')->get();

        // $bcat = ConstructionBCategory::find(4);
        // return $bcat->storeproduct;
        // dd($bcat->storeproduct);

        // // $products = [];
        // // foreach ($bcat->storeproduct as $item) {
        // //     array_push($products, ConstructionProduct::find($item->product->id));
        // // };
        // // $products = array_unique($products);
        // // dd($products);
        $store = ConstructionStore::orderBy('id', 'asc')->get();
        $bcategories=ConstructionBCategory::all();
        return view('frontend.construction.home.index', compact('bcategories', 'store'));
    }
}
