<?php

namespace App\Http\Controllers;

use App\ConstructionBCategory;
use App\ConstructionBrand;
use App\ConstructionCCategory;
use App\ConstructionDCategory;
use App\ConstructionProduct;
use App\ConstructionStore;
use App\ConstructionStoreProduct;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Pag;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ConstructionACategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $products = ConstructionProduct::whereHas('c_category', function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->searched . '%');
        })->orWhereHas('d_category', function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->searched . '%');
        })->orWhere('name', 'like', '%' . $request->searched . '%')->get();

        // abort_if($products->isEmpty(), 404);
        if ($products->isEmpty()) {
            abort(404);
        }

        $storeproducts = [];
        foreach ($products as $item) {
            if ($item->storeproduct->isNotEmpty()) {
                foreach ($item->storeproduct as $key => $value) {
                    array_push($storeproducts, ConstructionStoreProduct::find($value->id));
                }
            }
        }

        $storeproducts = array_unique($storeproducts);
        $storeproducts = collect($storeproducts);
        $storeproducts = $this->paginate($storeproducts)->setPath('');
        $pagination = $storeproducts->appends(array(
            'searched' => $request->searched
        ));

        $heading = $request->searched;
        $anycategory = $products[0]->c_category;
        $brands = [];
        foreach ($anycategory->storeproduct as $item) {
            array_push($brands, ConstructionBrand::find($item->brand_id));
        }
        $brands = array_unique($brands);

        return view('frontend.construction.product.searchproductlist', compact('products', 'heading', 'brands', 'anycategory', 'storeproducts'));
    }

    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
