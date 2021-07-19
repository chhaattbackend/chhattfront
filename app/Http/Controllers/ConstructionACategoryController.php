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
    public function index(Request $request)
    {
        // $bcategories = ConstructionBCategory::all();
        // $store=ConstructionStore::orderBy('id','desc')->get();

        $store = ConstructionStore::orderBy('id', 'asc')->get();
        $bcategories = [];
        foreach ($store as $item) {
            foreach ($item->storeproducts as $item) {
                if ($item->product->b_category != null) {
                    array_push($bcategories, ConstructionBCategory::find($item->product->b_category->id));
                }
            }
        };
        $bcategories = array_unique($bcategories);

        return view('frontend.construction.home.index', compact('bcategories', 'store'));
    }
}
