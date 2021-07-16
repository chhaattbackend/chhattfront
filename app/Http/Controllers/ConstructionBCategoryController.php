<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use App\ConstructionBCategory;
use App\ConstructionCCategory;
use App\ConstructionDCategory;
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
        return view('frontend.construction.home.b_cat_list', compact('bcategories',));
    }

    public function product($id)
    {
        $dcategory = ConstructionDCategory::find($id);
        $product = ConstructionProduct::where('d_category_id', $id)->first();
        if ($product == null) {
            return redirect()->back();
        }
        $storeproducts = ConstructionStoreProduct::where('product_id', $product->id)->get();
        $dcategories = ConstructionDCategory::where('c_category_id', $dcategory->category->id)->get();
        $relatedBrand = [];
        // $a = ConstructionProduct::where('c_category_id', $dcategory->category->id)->get(); // for all brands
        $a = ConstructionProduct::where('c_category_id', $dcategory->category->id)->get(); // for all brands
        foreach ($a as $key => $value) {
            foreach ($value->storeproduct as $key => $item) {
                if ($item->product->brand != null) {
                    array_push($relatedBrand, $item->product->brand->name);
                }
            }
        }
        $relatedBrand = array_unique($relatedBrand);
        // dd($relatedBrand);

        return view('frontend.construction.product.productlist', compact('storeproducts', 'dcategory', 'dcategories'));
    }

    public function singleproduct($id)
    {
        $storeproduct = ConstructionStoreProduct::find($id);
        return view('frontend.construction.product.singleproduct', compact('storeproduct'));
    }
}
