<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use App\ConstructionBCategory;
use App\ConstructionCCategory;
use App\ConstructionDCategory;
use App\ConstructionProduct;
use App\ConstructionStore;
use App\ConstructionStoreProduct;
use Illuminate\Http\Request;
use DB;

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

    public function product(ConstructionDCategory $dcategory, ConstructionProduct $product)
    {
        // dd($product->id);
        $storeproductdcat = DB::connection('mysql2')->table('products')
            ->select('d_categories.*')->distinct()
            ->join('store_products', 'products.id', '=', 'store_products.product_id')
            ->join('d_categories', 'd_categories.id', '=', 'products.d_category_id')
            ->join('c_categories', 'c_categories.id', '=', 'd_categories.c_category_id')
            ->where('c_categories.id', '=', $dcategory->category->id)
            ->get();
        $dcategories = [];
        foreach ($storeproductdcat as $item) {
            array_push($dcategories, ConstructionDCategory::find($item->id));
        }
        // dd($dcategories);

        // $relatedBrand = [];
        // // $a = ConstructionProduct::where('c_category_id', $dcategory->category->id)->get(); // for all brands
        // $a = ConstructionProduct::where('c_category_id', $dcategory->category->id)->get(); // for all brands
        // foreach ($a as $key => $value) {
        //     foreach ($value->storeproduct as $key => $item) {
        //         if ($item->product->brand != null) {
        //             array_push($relatedBrand, $item->product->brand->name);
        //         }
        //     }
        // }
        // $relatedBrand = array_unique($relatedBrand);
        // dd($relatedBrand);
            // dd($storeproducts = ConstructionStoreProduct::where('product_id', $product->id)->get());
        $storeproducts = ConstructionStoreProduct::where('product_id', $product->id)->get();
        
        // dd($storeproducts);


        return view('frontend.construction.product.productlist', compact('storeproducts', 'dcategory', 'dcategories',));
    }

    public function singleproduct(ConstructionStore $store, ConstructionStoreProduct $storeproduct)
    {
        // dd($storeproduct->id);
        return view('frontend.construction.product.singleproduct', compact('storeproduct'));
    }
}
