<?php

namespace App\Http\Controllers;

use App\ACategory;
use App\BCategory;
use App\ConstructionCCategory;
use Illuminate\Http\Request;

class ConstructionBCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $slug = str_replace('-', ' ', $slug);

        $ccategories = ConstructionCCategory::whereHas('category', function ($query) use ($slug) {
            $query->where('name', $slug);
        })->get();

        return view('frontend.construction.home.ccategory', compact('ccategories'));
    }


    public function byCategory($slug)
    {

        $slug = str_replace('-', ' ', $slug);

        $ccategories = ConstructionCCategory::whereHas('category', function ($query) use ($slug) {
            $query->where('name', $slug);
        })->get();


        // dd($ccategories);
        return view('frontend.construction.home.ccategory', compact('ccategories'));
    }


    

}
