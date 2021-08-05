<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Agency;
use App\AgentSpeciality;
use App\AreaOne;
use App\AgentArea;
use App\AreaTwo;
use App\Position;
use App\Property;
use App\Speciality;
use App\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->keyword) {
            if (auth()->user()->role->name == 'Agency') {
                $agents = Agent::where('agency_id', auth()->user()->agency->id)->paginate(25);
            } else {
                $agents = Agent::orderBy('created_at','desc')->paginate(25);
            }
        } else {
            if (auth()->user()->role->name == 'Agency') {

                $seacrh = $request->keyword;
                $agents = Agent::where('agency_id', auth()->user()->agency->id);


                $agents = $agents->whereHas('user', function ($query) use ($seacrh) {
                    $query->where('name', 'like', '%' . $seacrh . '%');
                })->orWhereHas('agency', function ($query) use ($seacrh) {
                    $query->whereHas('areaOne', function ($query) use ($seacrh) {
                        $query->where('name', 'like', '%' . $seacrh . '%');
                    });
                })
                    ->orWhereHas('agency', function ($query) use ($seacrh) {
                        $query->whereHas('areaTwo', function ($query) use ($seacrh) {
                            $query->where('name', 'like', '%' . $seacrh . '%');
                        });
                    })->orWhereHas('agency', function ($query) use ($seacrh) {
                        $query->where('name', 'like', '%' . $seacrh . '%');
                    })->orWhereHas('user', function ($query) use ($seacrh) {
                        $query->where('phone', 'like', '%' . $seacrh . '%');
                    })->paginate(25)->setPath('');

                $pagination = $agents->appends(array(
                    'keyword' => $request->keyword
                ));
            } else {

                $seacrh = $request->keyword;
                $agents = Agent::where('id','!=',null)->orderBy('created_at','desc');

                $agents = $agents->whereHas('user', function ($query) use ($seacrh) {
                    $query->where('name', 'like', '%' . $seacrh . '%');
                })->orWhereHas('agency', function ($query) use ($seacrh) {
                    $query->whereHas('areaOne', function ($query) use ($seacrh) {
                        $query->where('name', 'like', '%' . $seacrh . '%');
                    });
                })
                    ->orWhereHas('agency', function ($query) use ($seacrh) {
                        $query->whereHas('areaTwo', function ($query) use ($seacrh) {
                            $query->where('name', 'like', '%' . $seacrh . '%');
                        });
                    })->orWhereHas('agency', function ($query) use ($seacrh) {
                        $query->where('name', 'like', '%' . $seacrh . '%');
                    })->orWhereHas('user', function ($query) use ($seacrh) {
                        $query->where('phone', 'like', '%' . $seacrh . '%');
                    })->paginate(25)->setPath('');

                $pagination = $agents->appends(array(
                    'keyword' => $request->keyword
                ));
            }
        }
        $area_one = AreaOne::all();
        $area_two = AreaTwo::all();
        return view('admin.agent.index', compact('agents', 'area_one', 'area_two'));
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agents = Agent::all();
        $positions = Position::all();
        $agencies = Agency::all();
        $users = User::all();
        $speciality = Speciality::all();
        $areas = AreaOne::all();
        return view('admin.agent.create', compact(['agents', 'positions', 'agencies', 'users', 'speciality', 'areas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'user_id' => 'required',
            'agency_id' => 'required',
            'areas' => 'min:1',
            'speciality' => 'min:1',
            ]);

        $agent = Agent::create($request->all());

        // dd($request->all());
        if ($request->speciality != null) {
            foreach ($request->speciality as $speciality) {
                AgentSpeciality::create([
                    'agent_id' => $agent->id,
                    'speciality_id' => $speciality
                ]);
            }
        }

        foreach ($request->areas as $area) {
            AgentArea::create([
                'agent_id' => $agent->id,
                'area_one_id' => $area
            ]);
        }
        return redirect()->route('agents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = Agent::find($id);
        $position = Position::all();
        $agency = Agency::all();
        $user = User::all();
        $speciality = Speciality::all();
        $areas=AreaOne::all();

        return view("admin.agent.edit", compact(['agent', 'position', 'agency', 'user','speciality','areas']));
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
        $agent = Agent::find($id)->update($request->all());

        AgentSpeciality::where('agent_id',$id)->delete();
        AgentArea::where('agent_id',$id)->delete();

        if(isset($request->speciality)){
        foreach ($request->speciality as $speciality) {
            AgentSpeciality::create([
                'agent_id' => $id,
                'speciality_id' => $speciality
            ]);
        }
    }
    if(isset($request->areas)){

        foreach ($request->areas as $area) {
            AgentArea::create([
                'agent_id' => $id,
                'area_one_id' => $area
            ]);
        }
    }
        $agents = Agent::find($id);
        if (auth()->user()->role->name != 'Administrator') {
            if ($agents->agency_id == auth()->user()->agency->id) {
                $agents->update($request->all());
            }
        } else {
            $agents->update($request->all());
        }

        return redirect()->route('agents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->email == 'chhattofficial@chhatt.com'){


            $item = Agent::find($id);
            $item->delete();
            AgentSpeciality::where('agent_id',$id)->delete();
            AgentArea::where('agent_id',$id)->delete();
        }
        return redirect()->back();
    }
    public function getSpeciality(Request $request)
    {

        //$getspeci=Speciality::where('id',$request->)->get();

        $members=Agent::join('agent_specialities','agent_specialities.agent_id','=','agents.id')
        ->join('specialities','specialities.id','=','agent_specialities.speciality_id')
        ->where('specialities.name','=',$request->name)
        ->select('agents.*')
        ->paginate(12);
        // dd($members);

        //  return $speciality;


        $pagination = $members->appends(array(
            'areatype' => $request->name
        ));
        $getname = $members[1]->agency->name;

        // return $members;


        return view('frontend.agent.index',compact('members'));
    }
    public function singleRealtor(Request $request)
    {


        $agent = Agent::find($request->id);



        $relatedagents=Agent::join('agent_specialities','agent_specialities.agent_id','=','agents.id')
        ->join('specialities','specialities.id','=','agent_specialities.speciality_id')
        ->where('specialities.id','=',$agent->specialities[0]->speciality_id)
        ->select('agents.*')->get();



            return view('frontend.agent.singleindex',compact('agent','relatedagents'));
    }



    public function mobileajax(Request $request)
    {
        // dd($request->members);
        if ($request->keyword == null || $request->keyword == ' ') {
            $members = Agent::paginate(10);
            // dd('f');
        } else {
            $mem =$request->members;
            // dd($mem['data'].indexOf(1));
            $members = Agent::whereIn('id',$mem['data']);
            // dd($members[]);

            $seacrh = $request->keyword;

            $members = $members->whereHas('user', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->orWhereHas('agency', function ($query) use ($seacrh) {
                $query->where('name', 'like', '%' . $seacrh . '%');
            })->paginate(10)->setPath('');

            // $seacrh = $request->keyword;
            // // $members = Agent::where('id', '!=', null);
            // // dd($agent);

            // $members = $agent->whereHas('user', function ($query) use ($seacrh) {
            //     $query->where('name', 'like', '%' . $seacrh . '%');
            // })->orWhereHas('agency', function ($query) use ($seacrh) {
            //     $query->where('name', 'like', '%' . $seacrh . '%');
            // })->paginate(10)->setPath('');

            $pagination = $members->appends(array(
                'keyword' => $request->keyword
            ));
        }

        $data = view('frontend.agent.mobile.agentlist', compact('members'))->render();

        return response()->json([
            'data' => $data,
            'total' => (string) $members->total(),
            'pagination' => (string) $members->links()
        ]);
    }

    public function filter(Request $request)
    { {

            if ($request->created_at  == "ascending") {
                $agents = Agent::orderBy('created_at', 'asc');
            }

            if ($request->created_at == "descending") {
                $agents = Agent::orderBy('created_at', 'desc');
            }

            if ($request->updated_at  == "ascending") {
                $agents = Agent::orderBy('updated_at', 'asc');
            }

            if ($request->updated_at == "descending") {
                $agents = Agent::orderBy('updated_at', 'desc');
            }

            if (!$request->area_one && !$request->area_two) {
                $agents = Agent::orderBy('created_at','desc')->paginate(25);
            } else if($request->area_one!=null && $request->area_two!=null){

                $seacrh = $request->area_one;
                $seacrh1 = $request->area_two;
                $agents = Agent::where('id','!=',null)->orderBy('created_at','desc');

                $agents = $agents->whereHas('agency', function ($query) use ($seacrh) {
                    $query->where('area_one_id', 'like', '%' . $seacrh . '%');
                })->whereHas('agency', function ($query) use ($seacrh1) {
                    $query->where('area_two_id', 'like', '%' . $seacrh1 . '%');
                })->paginate(25)->setPath('');

                $pagination = $agents->appends(array(
                    'area_one' => $request->area_one,
                    'area_two' => $request->area_two,
                    'created_at' => $request->created_at,
                    'updated_at' => $request->updated_at
                ));
            } else {
                $seacrh = $request->area_one;
                $seacrh1 = $request->area_two;
                $agents = Agent::where('id','!=',null)->orderBy('created_at','desc');

                $agents = $agents->whereHas('agency', function ($query) use ($seacrh) {
                    $query->where('area_one_id', 'like', '%' . $seacrh . '%');
                })->paginate(25)->setPath('');

                $pagination = $agents->appends(array(
                    'area_one' => $request->area_one,
                    'area_two' => $request->area_two,
                    'created_at' => $request->created_at,
                    'updated_at' => $request->updated_at

                ));
            }

            $area_one = AreaOne::all();
            $area_two = AreaTwo::all();

            return view('admin.agent.index', compact('agents', 'area_one', 'area_two'));
        }
    }
}
