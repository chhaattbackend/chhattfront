<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use App\ConstructionBCategory;
use App\ConstructionCCategory;
use App\ConstructionProduct;
use Illuminate\Http\Request;

class ConstructionBCategoryController extends Controller
{

    public function index($slug)
    {
        $slug = str_replace('_', ',', $slug);

        $slug = str_replace('-', ' ', $slug);

        $ccategories = ConstructionCCategory::whereHas('category', function ($query) use ($slug) {
            $query->where('name', $slug);
        })->get();

        return view('frontend.construction.home.ccategory', compact('ccategories'));
    }


    public function byCategory($slug)
    {
        $slug = str_replace('_', ',', $slug);
        $slug = str_replace('-', ' ', $slug);

        $ccategories = ConstructionCCategory::whereHas('category', function ($query) use ($slug) {
            $query->where('name', $slug);
        })->get();


        // dd($ccategories);
        return view('frontend.construction.home.ccategory', compact('ccategories'));
    }

    public function viewall()
    {

        $bcategories = ConstructionBCategory::all();
        // $products=ConstructionProduct::orderBy('id','desc')->paginate(8);
        return view('frontend.construction.home.b_cat_list', compact('bcategories',));
    }

    public function product($id)
    {

        // dd($id);
        $ccategory = ConstructionCCategory::find($id);
        $ccategories= ConstructionCCategory::where('b_category_id',$ccategory->category->id)->get();
        // dd($ccategories);

        return view('frontend.construction.product.productlist', compact('ccategory','ccategories'));
    }
}
