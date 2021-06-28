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
        return view('frontend.construction.home.index', compact('bcategories','products'));
    }

    

}
