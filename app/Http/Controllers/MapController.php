<?php

namespace App\Http\Controllers;

use App\AreaOne;
use App\AreaTwo;
use App\City;
use App\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $city = City::all();

        $area= DB::select(Map::raw("SELECT DISTINCT(maps.area_one_id) From maps,area_one WHERE area_one.id = maps.area_one_id"));
        $a=collect($area)->map(function ($b){
            return AreaOne::with('areatwos')->find($b->area_one_id);
        });
        // dd($a);
        // $areaone=AreaOne::find(6);
        // dd($areaone->map);


        // $maps=Map::paginate(25)->setpath('');
        $maps = Map::orderBy('created_at', 'desc')->paginate(28);
        $pagination = $maps->appends(array(
            'keyword' => $request->keyword
        ));
        // return view('frontend.maps.index', compact('maps','suggestedareas'));
        return view('frontend.maps.index',compact('city','area','a'));
    }
    public function viewallmaps($id)
    {
        $area= DB::select(Map::raw("SELECT DISTINCT(maps.area_one_id) From maps,area_one WHERE $id = maps.area_one_id"));
        $a=collect($area)->map(function ($b){
            return AreaOne::with('areatwos')->find($b->area_one_id);
        });

        return view('frontend.maps.allmaps',compact('a'));

    }
    public function single($id)
    {
        $id1 = $id;


        $maps = Map::where('area_two_id',$id1)->get();

        return view('frontend.maps.single',compact('maps'));

    }
    public function ajax(Request $request)
    {
        if ($request->keyword == null || $request->keyword == '') {

            $maps = Map::orderBy('created_at', 'desc')->paginate(25);

        } else {

            $seacrh = $request->keyword;
            if ($seacrh=='dha') {
                $suggestedareas = AreaTwo::where('area_one_id', 6)->orderby('name')->take(12)->get();
            }
            $maps = Map::where('id', '!=', null);
            // dd($projects);

            $maps = $maps->whereHas('areaOne', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('areaTwo', function ($query) use ($seacrh) {
                $query->where('name', $seacrh);
            })->orWhereHas('City', function ($query) use ($seacrh) {
                $query->where('name', $seacrh);
            })->orWhere('name', 'like', '%' . $seacrh . '%')
                ->paginate(25)->setPath('');

            $pagination = $maps->appends(array(
                'keyword' => $request->keyword
            ));
            // dd($projects->count());
        }

        $data = view('frontend.maps.list', compact(['maps','suggestedareas']))->render();

        return response()->json([
            'data' => $data,
            'total' => (string) $maps->total()
            // 'pagination' => (string) $projects->links()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
