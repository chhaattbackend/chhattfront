<?php

namespace App\Http\Controllers;

use App\ConstructionBCategory;
use App\ConstructionBrand;
use App\ConstructionCCategory;
use App\ConstructionDCategory;
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
        $bcategories = ConstructionBCategory::all();
        return view('frontend.construction.home.index', compact('bcategories', 'store'));
    }


    public function searchsuggestions()
    {
        $dcats = ConstructionDCategory::all();
        $ccats = ConstructionCCategory::all();
        $products = ConstructionProduct::all();

        $key = [];
        foreach ($ccats as $ccat) {
            if ($ccat->category != null) {
                if ($ccat->storeproduct->isNotEmpty()) {
                    array_push($key, ['name' => $ccat->name, 'from' => $ccat->category->name]);
                }
            }
        };

        foreach ($dcats as $dcat) {
            if ($dcat->category != null) {
                if ($dcat->storeproduct->isNotEmpty()) {
                    array_push($key, ['name' => $dcat->name, 'from' => $dcat->category->name]);
                }
            }
        };

        foreach ($products as $product) {
            if ($product->storeproduct->isNotEmpty()) {
                if ($product->d_category != null && $product->c_category != null) {
                    array_push($key, ['name' => $product->name, 'from' => $product->d_category->name . '-' . $product->c_category->name]);
                }
            }
        };

        return response()->json($key);
    }



    public function search(Request $request)
    {
        // abort(500);

        $products = ConstructionProduct::whereHas('c_category', function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->searched . '%');
        })->orWhereHas('d_category', function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->searched . '%');
        })->orWhere('name', 'like', '%' . $request->searched . '%')->paginate(10)->setPath('');


        // $storeproducts = ConstructionStoreProduct::whereHas('c_category', function ($query) use ($request) {
        //     $query->where('name', 'like', '%' . $request->searched . '%');
        // })->orWhereHas('d_category', function ($query) use ($request) {
        //     $query->where('name', 'like', '%' . $request->searched . '%');
        // })->orWhereHas('product', function ($query) use ($request) {
        //     $query->where('name', 'like', '%' . $request->searched . '%');
        // })->get();
        // dd($storeproducts);

        $pagination = $products->appends(array(
            'searched' => $request->searched
        ));

        if ($products->isEmpty()) {
            abort(404);
        }

        $storeproduct = [];
        foreach ($products as $item) {
            if ($item->storeproduct->isNotEmpty()) {
                foreach ($item->storeproduct as $key => $value) {
                    array_push($storeproduct, ConstructionStoreProduct::find($value->id));
                }
            }
        }
        $storeproduct = array_unique($storeproduct);
        // $a = collect($storeproduct)->paginate(10);
        // dd($a);



        $heading = $request->searched;
        $anycategory = $products[0]->c_category;
        // dd($anycategory);
        $brands = [];
        foreach ($anycategory->storeproduct as $item) {
            array_push($brands, ConstructionBrand::find($item->brand_id));
        }
        $brands = array_unique($brands);

        return view('frontend.construction.product.searchproductlist', compact('products', 'heading', 'brands', 'anycategory'));
    }
}
