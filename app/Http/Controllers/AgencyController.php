<?php

namespace App\Http\Controllers;

use App\Agency;
use App\AreaOne;
use App\AreaThree;
use App\AreaTwo;
use App\GlobalClass;
use App\User;
use App\Agent;
use App\Property;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->globalclass = new GlobalClass;
    }

    public function ajax(Request $request)
    {

        if ($request->keyword == null || $request->keyword == ' ') {
            $agencies = Agency::paginate(24);
        } else {

            $seacrh = $request->keyword;
            $agencies = Agency::where('id', '!=', null);

            $agencies = $agencies->whereHas('user', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('areaOne', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('areaTwo', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('user', function ($query) use ($seacrh) {
                $query->where('phone', $seacrh);
            })->orWhere('name', 'like', '%' . $seacrh . '%')
                ->paginate(24)->setPath('');

            $pagination = $agencies->appends(array(
                'keyword' => $request->keyword
            ));
        }

        $data = view('frontend.agency.list', compact('agencies'))->render();

        return response()->json([
            'data' => $data,
            'total' => (string) $agencies->total(),
            'pagination' => (string) $agencies->links()
        ]);
    }

    public function mobileajax(Request $request)
    {

        if ($request->keyword == null || $request->keyword == ' ') {
            $agencies = Agency::paginate(10);
        } else {

            $seacrh = $request->keyword;
            $agencies = Agency::where('id', '!=', null);

            $agencies = $agencies->whereHas('user', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('areaOne', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('areaTwo', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('user', function ($query) use ($seacrh) {
                $query->where('phone', $seacrh);
            })->orWhere('name', 'like', '%' . $seacrh . '%')
                ->paginate(10)->setPath('');

            $pagination = $agencies->appends(array(
                'keyword' => $request->keyword
            ));
        }

        $data = view('frontend.agency.mobile.list', compact('agencies'))->render();

        return response()->json([
            'data' => $data,
            'total' => (string) $agencies->total(),
            'pagination' => (string) $agencies->links()
        ]);
    }

    public function singleAgency($id)
    {


        $id = explode('-', $id);
        $agency = Agency::find(end($id));
        $agents = Agent::where('agency_id', $agency->id)->get();
        $agentproperties = 0;
        // dd($agents);
        foreach ($agents as $agent) {
            // dd($agent->properties);
            // if ($agent->user->properties != null) {
            //     # code...
            // }
            $agentproperties += count($agent->properties);
        }
        $agencyproperties = $agency->properties->count();
        $totalproperties = $agencyproperties + $agentproperties;
        // dd($agents);



        return view("frontend.agency.single", compact(['agency', 'agents', 'totalproperties']));
    }

    public function index(Request $request)
    {
        if (!$request->keyword) {
            $agencies = Agency::paginate(24);
        } else {

            $seacrh = $request->keyword;
            $agencies = Agency::where('id', '!=', null);

            $agencies = $agencies->whereHas('user', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('areaOne', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('areaTwo', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('user', function ($query) use ($seacrh) {
                $query->where('phone', $seacrh);
            })->orWhere('name', 'like', '%' . $seacrh . '%')
                ->paginate(24)->setPath('');

                // $newagency=$agencies->whereHas('areaOne',function($query) use ($seacrh){$query->where('name', '==' ,'%'  '%')});
                // dd($newagency);



            $pagination = $agencies->appends(array(
                'keyword' => $request->keyword
            ));
        }




        return view('frontend.agency.index', compact('agencies'));
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agencies = Agency::all();
        $users = User::all();
        $area_one = AreaOne::all();
        $area_two = AreaTwo::all();
        $area_three = AreaThree::all();
        return view('admin.agency.create', compact(['agencies', 'users', 'area_one', 'area_two', 'area_three']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'user_id' => 'required',
            'area_one_id' => 'required',
            'name' => 'required',
            'area_two_id' => 'required',
        ]);
        if ($request->file('image')) {
            $filename = $this->globalclass->storeS3($request->file('image'), 'agencies');
            Agency::create($request->except('image') + ["image" => $filename]);
        } else {
            Agency::create($request->except('image'));
        }
        return redirect()->route('agencies.index');
    }

    public function newAgency(Request $request)
    {
        $getareaone =AreaOne::where('name', $request->areatype)->get();
        $getar = 0;
        // return $getareaone[0]->id;
        if ($getareaone->count()>0) {

            $getar = $getareaone[0]->id;


        }
        else{

            $getar = $getareaone->id;

        }



        $members = Agent::join('agencies', 'agencies.id', '=', 'agents.agency_id')
        ->join('users', 'users.id', '=', 'agents.user_id')
        ->where('agencies.area_one_id', '=', $getar)
        ->select('agents.*')
        ->paginate(12)->setPath('');
        //return  $members;

        $pagination = $members->appends(array(
            'areatype' => $request->areatype
        ));
        $getname = $members[1]->agency->name;


        return view('frontend.agency.agentlist',compact('members'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agency)
    {
        $agents = Agent::where('agency_id', $agency->id)->get();
        $agentproperties = 0;

        foreach ($agents as $agent) {
            $agentproperties += count($agent->properties);
        }
        $agencyproperties = $agency->properties->count();
        $totalproperties = $agencyproperties + $agentproperties;


        return view("admin.agency.show", compact(['agency', 'agents', 'totalproperties']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency = Agency::find($id);
        $users = User::all();
        $area_three = AreaThree::all();
        $area_two = AreaTwo::all();
        $area_one = AreaOne::all();


        return view("admin.agency.edit", compact(['agency', 'users', 'area_three', 'area_two', 'area_one']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agency = Agency::find($id);
        if ($request->file('image')) {
            $filename = $this->globalclass->storeS3($request->file('image'), 'agencies');
            $agency->update($request->except('image') + ["image" => $filename]);
        } else {
            $agency->update($request->all());
        }

        return redirect()->route('agencies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->email == 'chhattofficial@chhatt.com') {

            $item = Agency::find($id);
            $item->delete();
        }
        return redirect()->back();
    }
    public function getParent($category_id)
    {
        $area_one = AreaOne::where('city_id', $category_id)->get();
        // Log::info($data);
        // dd($area_two);
        return response()->json(['data' => $area_one]);
    }

    public function getSubCategory($category_id)
    {
        $area_two = AreaTwo::where('area_one_id', $category_id)->get();
        // Log::info($data);
        // dd($area_two);
        return response()->json(['data' => $area_two]);
    }
    public function getSubSubCategory($category_id)
    {
        $area_three = AreaThree::where('area_two_id', $category_id)->get();
        return response()->json(['data' => $area_three]);
    }

    public function filter(Request $request)
    {


        $agencies = Agency::orderBy('created_at', 'desc')->paginate(25);
        $area_one = AreaOne::all();
        $area_two = AreaTwo::all();

        $area_one = AreaOne::orderBy('created_at', 'desc');
        $area_two = AreaTwo::orderBy('created_at', 'desc');
        $agencies = Agency::orderBy('created_at', 'desc');

        if ($request->created_at  == "ascending") {
            $agencies = Agency::orderBy('created_at', 'asc');
        }

        if ($request->created_at == "descending") {
            $agencies = Agency::orderBy('created_at', 'desc');
        }

        if ($request->updated_at  == "ascending") {
            $agencies = Agency::orderBy('updated_at', 'asc');
        }

        if ($request->updated_at == "descending") {
            $agencies = Agency::orderBy('updated_at', 'desc');
        }
        if (isset($request->status)) {
            $agencies = $agencies->where('agencies.status', $request->status);
        }
        if (isset($request->verified)) {
            $agencies = $agencies->where('agencies.verified', $request->verified);
        }

        if (isset($request->area_one_id)) {
            $agencies = $agencies->where('agencies.area_one_id', $request->area_one_id);
        }
        if (isset($request->area_two_id)) {
            $agencies = $agencies->where('agencies.area_two_id', $request->area_two_id);
        }




        $agencies = $agencies->paginate(25);
        $area_one = $area_one->paginate(25);
        $area_two = $area_two->paginate(25);

        $pagination = $agencies->appends(array(
            'status' => $request->status,
            'verified' => $request->verified,
            'area_two_id' => $request->area_two_id,
            'area_one_id' => $request->area_one_id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,

        ));

        return view('admin.agency.index', compact('agencies', 'area_one', 'area_two'));
    }
}
