<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use App\ConstructionBCategory;
use App\ConstructionCCategory;
use App\ConstructionProduct;
use App\ConstructionStoreProduct;
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

        $ccategory = ConstructionCCategory::find($id);

        // dd($ccategory->products[0]->name);
        $products = ConstructionProduct::where('c_category_id',$id)->get();
        dd($products[0]->id);
        $ccategories= ConstructionCCategory::where('b_category_id',$ccategory->category->id)->get();

        return view('frontend.construction.product.productlist', compact('ccategory','ccategories'));
    }
}
