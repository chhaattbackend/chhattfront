<?php

namespace App\Http\Controllers;

use App\Agency;
use App\AreaOne;
use App\AreaThree;
use App\AreaTwo;
use App\City;
use App\ConstructionACategory;
use App\ConstructionBCategory;
use App\ConstructionBrand;
use App\ConstructionCCategory;
use App\ConstructionDCategory;
use App\ConstructionProduct;
use App\ConstructionStore;
use App\ConstructionStoreProduct;
use App\GlobalClass;
use App\Http\Resources\Area;
use App\Property;
use App\PropertyFor;
use App\PropertyImage;
use App\PropertyType;
use App\User;
use App\SocialType;
use App\PropertyGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\type;

class PropertyController extends Controller
{
    public $globalclass;
    public function __construct()
    {
        $this->globalclass = new GlobalClass;
    }

    function array_push_assoc($array, $key, $value)
    {
        $array[$key] = $value;
        return $array;
    }



    public function search(Request $request, $all = null)
    {
        $inputval = null;
        $inputcity_id = null;
        $suggestedareas = null;
        $suggestedareasid = null;
        $inputcity_name = null;


        if (isset($all)) {
            $city = City::all();
            $propertytype = PropertyType::all();
            $devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));


            if ($all == 'All') {
                if ($devicecheck == 1) {
                    $properties = Property::orderBy('created_at', 'desc')->paginate(10);
                } else {
                    $properties = Property::orderBy('created_at', 'desc')->paginate(24);
                }
            } else {
                if ($devicecheck == 1) {
                    $properties = Property::orderBy('created_at', 'desc')->paginate(10);
                } else {
                    $properties = Property::where('type', $all)->paginate(24);
                }
            }

            return view('frontend.property.search', compact('properties', 'propertytype', 'city', 'inputval', 'inputcity_name', 'inputcity_id', 'suggestedareas', 'suggestedareasid'));
        }







        // for mobile end
        $city = City::all();
        $propertytype = PropertyType::all();
        $global = new GlobalClass;
        $search = '';
        $properties = Property::with(['images'])->where('id', '!=', null)->whereHas('images', function ($query) use ($search) {
            $query->where('name', '!=', null);
        });
        $pagination_array = array();
        $devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));




        if (isset($request->search_areas)) {
            $contains = str_contains($request->search_areas, '-');
            // dd($contains);
            if ($contains) {
                $str = explode('-', $request->search_areas);
            } else {
                $str = explode(',', $request->search_areas);
            }
            $area = $str[0];
            if ($area == 'a1') {
                $area = 'area_one_id';
            }
            if ($area == 'a2') {
                $area = 'area_two_id';
            }
            if ($area == 'a3') {
                $area = 'area_three_id';
            }
            $area_id = $str[1];

            $pagination_array = array('search_areas' => $request->search_areas);
            if ($area == 'area_one_id') {
                $one = AreaOne::find($area_id);
                $inputval = $one->name;
                $inputcity_id = $one->city_id;
                $inputcity_name = $one->city->name;

                $suggestedareas = AreaTwo::where('area_one_id', $area_id)->take(12)->get();
                $suggestedareasid = 'a1';
            }
            if ($area == 'area_two_id') {
                $two = AreaTwo::find($area_id);
                $one = AreaOne::find($two->area_one_id);
                $suggestedareas = AreaTwo::find($area_id)->take(12)->get();
                $inputval = $one->name . ' ' . $two->name;
                $inputcity_id = $one->city_id;
                $inputcity_name = $one->city->name;
                $suggestedareasid = 'a2';
            }
            if ($area == 'area_three_id') {
                $inputval = AreaThree::find($area_id);
                $inputval = $inputval->name;
            }


            $properties = $properties->where($area, $area_id);
            $search = '';

            // for properties with images only
            // $properties = $properties->whereHas('images', function ($query) use ($search) {
            //     $query->where('name', '!=', null);
            // });
            $pagination_array = $this->array_push_assoc($pagination_array, 'search_areas', $request->search_areas);
        }
        if (isset($request->bed)) {
            $properties->where('bed', $request->bed);
            $pagination_array = $this->array_push_assoc($pagination_array, 'bed', $request->bed);
        }
        if (isset($request->property_for)) {
            $properties->where('property_for', $request->property_for);
            $pagination_array = $this->array_push_assoc($pagination_array, 'property_for', $request->property_for);
        }
        if (isset($request->property_type)) {
            $property_types = explode(',', $request->property_type);
            $properties->whereIn('property_type', $property_types);
            $pagination_array = $this->array_push_assoc($pagination_array, 'property_type', $request->property_type);
        }
        if (isset($request->bath)) {
            $properties->where('bath', $request->bath);
            $pagination_array = $this->array_push_assoc($pagination_array, 'bath', $request->bath);
        }
        if (isset($request->size)) {
            $properties->where('size', $request->size);
            $pagination_array = $this->array_push_assoc($pagination_array, 'size', $request->size);
        }
        if (isset($request->area_type)) {
            $properties->where('type', $request->area_type);
            $pagination_array = $this->array_push_assoc($pagination_array, 'area_type', $request->area_type);
        }
        if (isset($request->max_price) || isset($request->min_price)) {
            if ($request->min_price == null) {
                $request->min_price = 0;
            }
            if ($request->max_price == null) {
                $request->max_price = 9999999999;
            }
            $properties->whereBetween('price', [$request->min_price, $request->max_price]);
            $pagination_array = $this->array_push_assoc($pagination_array, 'min_price', $request->min_price);
            $pagination_array = $this->array_push_assoc($pagination_array, 'max_price', $request->max_price);
        }
        if (isset($request->max_area) || isset($request->min_area)) {
            if ($request->min_area == null) {
                $request->min_area = 0;
            }
            if ($request->max_area == null) {
                $request->max_area = 999999999;
            }
            $properties->whereBetween('size', [$request->min_area, $request->max_area]);
            $pagination_array = $this->array_push_assoc($pagination_array, 'min_area', $request->min_area);
            $pagination_array = $this->array_push_assoc($pagination_array, 'max_area', $request->max_area);
        }
        if (isset($request->city)) {
            $request->city = City::where('name', $request->city)->first();
            $inputcity_name = $request->city->name;
            $search = $request->city->id;
            $properties = $global->searchRelation($properties, 'areaOne', 'city_id', $search);
            $pagination_array = $this->array_push_assoc($pagination_array, 'city', $request->city->name);
        }




        if ($devicecheck == 1) {
            $properties = $properties->orderBy('created_at', 'desc')->paginate(10)->setPath('');
        } else {

            $properties = $properties->orderBy('created_at', 'desc')->paginate(24)->setPath('');
        }

        $properties->sortBy('priority');
        $pagination = $properties->appends($pagination_array);

        return view('frontend.property.search', compact('properties', 'propertytype', 'city', 'inputval', 'inputcity_name', 'inputcity_id', 'suggestedareas', 'suggestedareasid'));
    }



    public function singleProperty($id)
    {
        $id = explode('-', $id);


        $properties = Property::find(end($id));
        $propertyimage = PropertyImage::where('property_id', end($id))->get();

        $property = Property::where('area_one_id', $properties->areaOne->id)
            ->where('size', $properties->size)
            ->where('size_type', $properties->size_type)
            ->paginate(10);

        return view("frontend.property.single", compact(['property', 'properties', 'propertyimage']));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function home(Request $request)
    {
        // $sp = ConstructionStoreProduct::all();
        // foreach ($sp as $key => $value) {
        //     // dd($value);
        //     $value->update([
        //         'brand_id' => $value->product->brand_id
        //     ]);
        // }
        // dd('done');

        // $sp = ConstructionBrand::all();
        // foreach ($sp as $key => $value) {
        //     // dd($value);
        //     $a = str_replace(str_split('\\/:*?"<>|(),&'), '', strtolower($value->name));
        //     $a = str_replace(' ', '-', $a);
        //     $value->update([
        //         'slug' => $a
        //     ]);
        // }

        // $sp = ConstructionProduct::all();
        // foreach ($sp as $key => $value) {
        //     if ($value->id != 756 || $value->id != 1084) {
        //         # code...
        //         if ($value->name != null) {
        //             // dd($value);
        //             # code...
        //             // $a = str_replace(str_split('(),&'), '', $value->name);
        //             $a = str_replace(str_split('\\/:*?"<>|(²).®°″×'), '-', $value->slug);

        //             // $a = str_replace(' ', '-', $a);
        //             $value->update([
        //                 'slug' => strtolower($a)
        //             ]);
        //         }
        //     }
        // }
        // dd('done');

        // $bcat = ConstructionStore::all();
        // foreach ($bcat as $key => $item) {
        //     $a = str_replace(str_split('\\/:*?"<>|(),&'), '', strtolower($item->name));
        //     $a = str_replace(' ','-',$a);
        //     $b = explode('-', $a);
        //     // dd(end($b));
        //     // $item->update([
        //     //     'slug'=>$a
        //     // ]);
        //     if (end($b) == 'store' || end($b) == 'stores' ) {
        //         $item->update([
        //             'slug'=>$a
        //         ]);
        //     } else {
        //         $item->update([
        //             'slug'=>$a.'-store'
        //         ]);
        //     }
        // }
        // dd('done');



        if (isset($request->type)) {
            if ($request->type == 'All') {
                $property = Property::paginate(50);

                $data = view('frontend.home.list', compact('property'))->render();
                return response()->json([
                    'data' => $data,
                    // 'pagination' => (string) $areas->links()
                ]);
            }
            $property = Property::where('type', $request->type)->paginate(50);
            $data = view('frontend.home.list', compact('property'))->render();

            return response()->json([
                'data' => $data,
                // 'pagination' => (string) $areas->links()
            ]);
        }
        $city = City::all();
        $bcats = ConstructionBCategory::all();
        $bcategories = [];
        foreach ($bcats as $item) {
            if ($item->storeproduct->isNotEmpty()) {
                array_push($bcategories, ConstructionBCategory::find($item->id));
            }
        };
        $bcategories = array_unique($bcategories);


        $property = Property::paginate(50);
        return view('frontend.home.index', compact('property', 'city', 'bcategories'));
    }


    public function mobile(Request $request)
    {

        if (isset($request->agency)) {

            $agencies = Agency::paginate(10);
            $data = view('frontend.property.mobile.agencylist', compact('agencies'))->render();
            return response()->json([
                'data' => $data,
                // 'pagination' => (string) $areas->links()
            ]);
        }

        if (isset($request->search)) {

            $city = City::all();
            $propertytype = PropertyType::all();
            $data = view('frontend.property.mobile.btnsearch.ajax', compact('city', 'propertytype'))->render();
            return response()->json([
                'data' => $data,
                // 'pagination' => (string) $areas->links()
            ]);
        }


        $city = City::all();
        $propertytype = PropertyType::all();
        $devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
        if ($devicecheck == 1) {
            return view('frontend.property.mobile.btnsearch.search', compact('city', 'propertytype'));
        } else {
            return redirect()->route('property');
        }
    }




    public function index(Request $request)
    {
        if (isset($request->type)) {

            if ($request->type == 'All') {
                if (isset($request->p)) {
                    $properties = Property::paginate(24);
                } else {
                    $properties = Property::paginate(10);
                }
                $agencies = Agency::paginate(10);
                $data = view('frontend.property.list', compact('properties'))->render();
                return response()->json([
                    'data' => $data,
                    // 'pagination' => (string) $areas->links()
                ]);
            }

            $agencies = Agency::paginate(10);

            if (isset($request->p)) {

                $properties = Property::where('type', $request->type)->paginate(24);
            } else {
                $properties = Property::where('type', $request->type)->paginate(10);
            }
            $data = view('frontend.property.list', compact('properties'))->render();

            return response()->json([
                'data' => $data,
                // 'pagination' => (string) $areas->links()
            ]);
        }


        $properties = Property::paginate(28);
        $agencies = Agency::paginate(10);
        $city = City::all();
        $propertytype = PropertyType::all();
        $check = 'All';



        return view('frontend.property.index', compact('properties', 'agencies', 'city', 'propertytype', 'check'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $city = City::all();
        $area_one = AreaOne::all();
        $area_two = AreaTwo::all();
        $area_three = AreaThree::all();
        $propertyfor = PropertyFor::all();
        $propertytype = PropertyType::all();
        $propertySocialTypes = SocialType::all();
        $propertySocialGroups = PropertyGroup::all();
        return view('admin.property.create', compact(['users', 'city', 'area_one', 'area_two', 'area_three', 'propertyfor', 'propertytype', 'propertySocialTypes', 'propertySocialGroups']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->platform = 'Web | ' . auth()->user()->email;
        $marker = 1;
        if ($request->type == 'Residential') {
            $marker = 4;
        }
        if ($request->type == 'Commercial') {
            $marker = 3;
        }
        if ($request->type == 'Industrial') {
            $marker = 1;
        }

        $property = Property::create($request->except('images', 'platform') + ['platform' => $request->platform]);

        return redirect()->route('properties.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return view('admin.property_image.edit', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $property = Property::find($id);
        $users = User::all();
        $area_one = AreaOne::all();
        $area_two = AreaTwo::all();
        $area_three = AreaThree::all();
        $propertyfor = PropertyFor::all();
        $propertytype = PropertyType::all();
        $propertySocialTypes = SocialType::all();
        $propertySocialGroups = PropertyGroup::all();
        $city = City::all();
        $link = url()->previous();

        return view('admin.property.edit', compact(['city', 'property', 'users', 'area_one', 'area_two', 'area_three', 'propertyfor', 'link', 'propertytype', 'propertySocialTypes', 'propertySocialGroups']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // @dd('wow');

        $property = Property::find($id);
        $property->update($request->all());
        $link = $request->link;
        // @dd($link);

        if ($request->hasFile('images')) {
            $this->globalclass->storeMultipleS3($request->file('images'), 'properties', $property->id);
        } else {
            // $contents = file_get_contents('https://maps.googleapis.com/maps/api/staticmap?center=' . $request->latlong . '&zoom=18&size=640x450&maptype=satellite&markers=icon:https://chhatt.com/StaticMap/Pins/marker1.png%7C'.$request->latitude.','.$request->longitude.'&key=AIzaSyAAdMS03mAk6qDSf4HUmZmcjvSkiSN7jIU');

            // $filename = 'marker' . time() . 'png';
            // Storage::disk('s3')->put('properties/StaticMap/' . $filename, $contents);
            // PropertyImage::create([
            //     'property_id' => $property->id,
            //     'name' => 'StaticMap/' . $filename,
            //     'sort_order' => 9
            // ]);
        }
        return redirect($link)->with('message', 'Property Updated Successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();
        return redirect()->back();
    }
    public function filter(Request $request)
    {


        $properties = Property::orderBy('created_at', 'desc')->paginate(25);
        $area_one = AreaOne::all();
        $area_two = AreaTwo::all();

        $area_one = AreaOne::orderBy('created_at', 'desc');
        $area_two = AreaTwo::orderBy('created_at', 'desc');
        $properties = Property::orderBy('created_at', 'desc');

        if (isset($request->type)) {
            $properties = $properties->where('properties.type', $request->type);
        }
        if (isset($request->description)) {
            $properties = $properties->where('properties.description', $request->description);
        }

        if (isset($request->area_one_id)) {
            $properties = $properties->where('properties.area_one_id', $request->area_one_id);
        }
        if (isset($request->area_two_id)) {
            $properties = $properties->where('properties.area_two_id', $request->area_two_id);
        }
        if (isset($request->structured)) {
            $properties = $properties->where('properties.structured', $request->structured);
        }


        $properties = $properties->paginate(25);
        $area_one = $area_one->paginate(25);
        $area_two = $area_two->paginate(25);

        $pagination = $properties->appends(array(
            'type' => $request->type,
            'description' => $request->description,
            'area_two_id' => $request->area_two_id,
            'area_one_id' => $request->area_one_id,
            'structured' =>  $request->structured,
        ));

        return view('admin.property.index', compact('properties', 'area_one', 'area_two'));
    }


    public function byParent(Request $request)
    {
        // $properties = Property::orderBy('created_at', 'desc')->where('area_one_id',6)->paginate(25);
        if (isset($request->area_two)) {
            $properties = Property::orderBy('created_at', 'desc')->where('area_two_id', $request->area_two)->paginate(25)->setPath('');
            $area_one = AreaOne::all();
            $area_two = AreaTwo::all();
            $pagination = $properties->appends(array(
                'area_two' => $request->area_two,
            ));
            return view('admin.property.index', compact('properties', 'area_one', 'area_two'));
        }
        if (isset($request->agent_id)) {
            $properties = Property::orderBy('created_at', 'desc')->where('user_id', $request->agent_id)->paginate(25)->setPath('');
            $area_one = AreaOne::all();
            $area_two = AreaTwo::all();
            $pagination = $properties->appends(array(
                'agent_id' => $request->agent_id,
            ));
            return view('admin.property.index', compact('properties', 'area_one', 'area_two'));
        }
        if (isset($request->agency_id)) {
            $properties = Property::orderBy('created_at', 'desc')->where('agency_id', $request->agency_id)->paginate(25)->setPath('');
            $area_one = AreaOne::all();
            $area_two = AreaTwo::all();
            $pagination = $properties->appends(array(
                'agency_id' => $request->agency_id,
            ));
            return view('admin.property.index', compact('properties', 'area_one', 'area_two'));
        }
        if (isset($request->area_one)) {
            $properties = Property::orderBy('created_at', 'desc')->where('area_one_id', $request->area_one)->paginate(25)->setPath('');
            $area_one = AreaOne::all();
            $area_two = AreaTwo::all();
            $pagination = $properties->appends(array(
                'area_one' => $request->area_one,
            ));
            return view('admin.property.index', compact('properties', 'area_one', 'area_two'));
        }
        if (isset($request->parent)) {
            // dd($request->parent);
            $area_one = AreaOne::where('id', $request->parent)->first();
            $area_two = AreaTwo::where('area_one_id', $request->parent)->first();
            $data = view('admin.property.byParentTable', compact('area_one', 'area_two'))->render();

            return response()->json([
                'data' => $data,
            ]);
        }

        $selecttag = AreaOne::all();
        $area_one = AreaOne::where('id', 6)->first();
        $area_two = AreaTwo::where('area_one_id', 6);
        return view('admin.property.by_parent', compact('area_one', 'area_two', 'selecttag'));
    }

    public function explorer($property_type)
    {
        $inputval = null;
        $city = City::all();
        $propertytype = PropertyType::all();
        $inputcity_id = null;
        $suggestedareas = null;
        $inputcity_name = null;

        $property_type = str_replace('-', ' ', $property_type);



        $devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
        if ($devicecheck == 1) {
            $properties = Property::where('property_type', $property_type)->paginate(10);
            return view('layouts.mobexplorersearch', compact('properties', 'propertytype', 'city', 'inputval', 'inputcity_name', 'inputcity_id', 'suggestedareas', 'property_type'));
        } else {
            $properties = Property::where('property_type', $property_type)->paginate(24);
            return view('layouts.webexplorersearch', compact('properties', 'propertytype', 'city', 'inputval', 'inputcity_name', 'inputcity_id', 'suggestedareas', 'property_type'));
        }
    }
}
