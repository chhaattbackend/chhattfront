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
        $bcategories = ConstructionBCategory::all();
        $products=ConstructionStore::orderBy('id','desc')->get();
        // $products = ConstructionStoreProduct::inRandomOrder()->limit(10)->get();

        // dd($products);
        return view('frontend.construction.home.index', compact('bcategories', 'products'));
    }
}
