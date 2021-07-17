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
use Illuminate\Pagination\Factory;

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

    public function mainProduct(ConstructionCCategory $ccategory)
    {
        $storeproductdcat = DB::connection('mysql2')->table('products')
            ->select('d_categories.*')->distinct()
            ->join('store_products', 'products.id', '=', 'store_products.product_id')
            ->join('d_categories', 'd_categories.id', '=', 'products.d_category_id')
            ->join('c_categories', 'c_categories.id', '=', 'd_categories.c_category_id')
            ->join('stores', 'stores.id', '=', 'store_products.store_id')
            ->where('c_categories.id', '=', $ccategory->id)
            ->get();

        $storeproductss = DB::connection('mysql2')->table('products')
            ->select('store_products.*')->distinct()
            ->join('store_products', 'products.id', '=', 'store_products.product_id')
            ->join('d_categories', 'd_categories.id', '=', 'products.d_category_id')
            ->join('c_categories', 'c_categories.id', '=', 'd_categories.c_category_id')
            ->join('stores', 'stores.id', '=', 'store_products.store_id')
            ->where('c_categories.id', '=', $ccategory->id)
            ->get();

        $dcategories = [];
        foreach ($storeproductdcat as $item) {
            array_push($dcategories, ConstructionDCategory::find($item->id));
        }

        $storeproducts = [];
        foreach ($storeproductss as $item) {
            array_push($storeproducts, ConstructionStoreProduct::find($item->id));
        }

        $dcategory = ConstructionDCategory::where('c_category_id', $ccategory->id)->first();
        // dd($ccategory->subcategories);
        // dd($dcategory);


        return view('frontend.construction.product.productlist', compact('storeproducts', 'dcategory', 'dcategories'));
    }

    public function product(ConstructionDCategory $dcategory, ConstructionProduct $product)
    {
        $storeproductdcat = DB::connection('mysql2')->table('products')
            ->select('d_categories.*')->distinct()
            ->join('store_products', 'products.id', '=', 'store_products.product_id')
            ->join('d_categories', 'd_categories.id', '=', 'products.d_category_id')
            ->join('c_categories', 'c_categories.id', '=', 'd_categories.c_category_id')
            ->join('stores', 'stores.id', '=', 'store_products.store_id')
            ->where('c_categories.id', '=', $dcategory->category->id)
            ->get();
        // return $storeproductdcat;


        //dd($dcategory->category->id);
        $dcategories = [];
        foreach ($storeproductdcat as $item) {
            array_push($dcategories, ConstructionDCategory::find($item->id));
        }
        $storeproducts = ConstructionStoreProduct::where('product_id', $product->id)->get();
        return view('frontend.construction.product.productlist', compact('storeproducts', 'dcategory', 'dcategories'));
    }

    public function singleproduct(ConstructionStore $store, ConstructionStoreProduct $storeproduct)
    {
        // dd($store);
        return view('frontend.construction.product.singleproduct', compact('storeproduct'));
    }
}
