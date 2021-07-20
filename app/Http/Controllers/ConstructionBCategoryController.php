<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use App\ConstructionACategory;
use App\ConstructionBCategory;
use App\ConstructionBrand;
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

    public function index(ConstructionACategory $acategory, ConstructionBCategory $bcategory)
    {
        $ccategories = ConstructionCCategory::where('b_category_id', $bcategory->id)->get();

        return view('frontend.construction.home.ccategory', compact('ccategories'));
    }


    // public function byCategory($slug)
    // {
    //     $slug = str_replace('_', ',', $slug);
    //     $slug = str_replace('-', ' ', $slug);

    //     $ccategories = ConstructionCCategory::whereHas('category', function ($query) use ($slug) {
    //         $query->where('name', $slug);
    //     })->get();


    //     // dd($ccategories);
    //     return view('frontend.construction.home.ccategory', compact('ccategories'));
    // }


    public function viewall(ConstructionACategory $acategory)
    {
        $bcategories = [];
        foreach ($acategory->bcategories as $item) {
            if ($item->storeproduct != null) {
                array_push($bcategories, ConstructionBCategory::find($item->id));
            }
        };
        return view('frontend.construction.home.b_cat_list', compact('bcategories'));
    }

    // public function mainProduct(ConstructionCCategory $ccategory)
    // {
    //     // dd($product->id);
    //     $storeproductdcat = DB::connection('mysql2')->table('products')
    //         ->select('d_categories.*')->distinct()
    //         ->join('store_products', 'products.id', '=', 'store_products.product_id')
    //         ->join('d_categories', 'd_categories.id', '=', 'products.d_category_id')
    //         ->join('c_categories', 'c_categories.id', '=', 'd_categories.c_category_id')
    //         ->join('stores', 'stores.id', '=', 'store_products.store_id')
    //         ->where('c_categories.id', '=', $ccategory->id)
    //         ->get();

    //     $storeproductss = DB::connection('mysql2')->table('products')
    //         ->select('store_products.*')->distinct()
    //         ->join('store_products', 'products.id', '=', 'store_products.product_id')
    //         ->join('d_categories', 'd_categories.id', '=', 'products.d_category_id')
    //         ->join('c_categories', 'c_categories.id', '=', 'd_categories.c_category_id')
    //         ->join('stores', 'stores.id', '=', 'store_products.store_id')
    //         ->where('c_categories.id', '=', $ccategory->id)
    //         ->get();

    //     $storeproductdcat1 = DB::connection('mysql2')->table('products')
    //         ->select('store_products.*')->distinct()
    //         ->join('store_products', 'products.id', '=', 'store_products.product_id')
    //         ->join('d_categories', 'd_categories.id', '=', 'products.d_category_id')
    //         ->join('c_categories', 'c_categories.id', '=', 'd_categories.c_category_id')
    //         ->join('stores', 'stores.id', '=', 'store_products.store_id')
    //         ->where('c_categories.id', '=', $ccategory->id)
    //         ->get();


    //     $brand = [];
    //     foreach ($storeproductdcat1 as $item) {
    //         array_push($brand, ConstructionBrand::find($item->brand_id));
    //     }
    //     $brand = array_unique($brand);


    //     $dcategories = [];
    //     foreach ($storeproductdcat as $item) {
    //         array_push($dcategories, ConstructionDCategory::find($item->id));
    //     }

    //     $storeproducts = [];
    //     foreach ($storeproductss as $item) {
    //         array_push($storeproducts, ConstructionStoreProduct::find($item->id));
    //     }

    //     $dcategory = ConstructionDCategory::where('c_category_id', $ccategory->id)->first();
    //     // dd($ccategory->subcategories);
    //     // dd($dcategory);

    //     return view('frontend.construction.product.productlist', compact('storeproducts', 'dcategory', 'dcategories', 'brand'));
    // }

    // public function product(ConstructionDCategory $dcategory, ConstructionProduct $product)
    // {
    //     $storeproductdcat = DB::connection('mysql2')->table('products')
    //         ->select('d_categories.*')->distinct()
    //         ->join('store_products', 'products.id', '=', 'store_products.product_id')
    //         ->join('d_categories', 'd_categories.id', '=', 'products.d_category_id')
    //         ->join('c_categories', 'c_categories.id', '=', 'd_categories.c_category_id')
    //         ->join('stores', 'stores.id', '=', 'store_products.store_id')
    //         ->where('c_categories.id', '=', $dcategory->category->id)
    //         ->get();


    //     $storeproductdcat1 = DB::connection('mysql2')->table('products')
    //         ->select('store_products.*')->distinct()
    //         ->join('store_products', 'products.id', '=', 'store_products.product_id')
    //         ->join('d_categories', 'd_categories.id', '=', 'products.d_category_id')
    //         ->join('c_categories', 'c_categories.id', '=', 'd_categories.c_category_id')
    //         ->join('stores', 'stores.id', '=', 'store_products.store_id')
    //         ->where('c_categories.id', '=', $dcategory->category->id)
    //         ->get();

    //     // $brand=

    //     //dd($dcategory->category->id);
    //     $dcategories = [];
    //     foreach ($storeproductdcat as $item) {
    //         array_push($dcategories, ConstructionDCategory::find($item->id));
    //     }
    //     $brand = [];
    //     foreach ($storeproductdcat1 as $item) {
    //         array_push($brand, ConstructionBrand::find($item->brand_id));
    //     }
    //     $brand = array_unique($brand);

    //     $storeproducts = ConstructionStoreProduct::where('product_id', $product->id)->get();
    //     return view('frontend.construction.product.productlist', compact('storeproducts', 'dcategory', 'dcategories', 'brand'));
    // }

    public function ccatproductlist(ConstructionACategory $acategory, ConstructionBCategory $bcategory, ConstructionCCategory $ccategory)
    {
        $anycategory = $ccategory;
        $which = 'ccategory';
        $brands = [];
        foreach ($anycategory->storeproduct as $item) {
            array_push($brands, ConstructionBrand::find($item->brand_id));
        }
        $brands = array_unique($brands);

        return view('frontend.construction.product.productlist', compact('anycategory', 'which', 'brands'));
    }
    public function dcatproductlist(ConstructionACategory $acategory, ConstructionBCategory $bcategory, ConstructionCCategory $ccategory, ConstructionDCategory $dcategory)
    {
        $anycategory = $dcategory;
        $which = 'dcategory';
        $brands = [];
        foreach ($ccategory->storeproduct as $item) {
            array_push($brands, ConstructionBrand::find($item->brand_id));
        }
        $brands = array_unique($brands);
        return view('frontend.construction.product.productlist', compact('anycategory', 'which', 'brands'));
    }

    public function brandproductlist(ConstructionACategory $acategory, ConstructionBCategory $bcategory, ConstructionCCategory $ccategory, $brand)
    {
        $brand = ConstructionBrand::where('slug', $brand)->first();
        if ($brand == null) {
            return abort(404);
        }
        // dd($ccategory);

        $anycategory = $ccategory;
        $which = 'brand';
        $brands = [];
        foreach ($anycategory->storeproduct as $item) {
            array_push($brands, ConstructionBrand::find($item->brand_id));
        }
        $brands = array_unique($brands);

        return view('frontend.construction.product.productlist', compact('anycategory', 'which', 'brands', 'brand'));
    }

    public function singleproduct(ConstructionStore $store, ConstructionStoreProduct $storeproduct)
    {
        // dd($storeproduct->id);
        return view('frontend.construction.product.singleproduct', compact('storeproduct'));
    }
}
