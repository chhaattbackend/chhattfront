<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\GlobalClass;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $globalclass;

    public function __construct()
    {
        $this->globalclass = new GlobalClass;
    }


    public function index(Request $request)
    {

        if (!$request->keyword) {
            $users = User::orderBy('created_at', 'desc')->paginate(25);
        } else {
            $users = User::where('name', 'like', '%' . $request->keyword . '%')
            ->orWhere('email', 'like', '%' . $request->keyword . '%')
            ->orWhere('firebase_id', 'like', '%' . $request->keyword . '%')
            ->orWhere('id', 'like', '%' . $request->keyword . '%')
            ->orWhere('phone', 'like', '%' . $request->keyword . '%')
            ->orWhere('mobile', 'like', '%' . $request->keyword . '%')
            ->paginate(25)->setPath('');

            $pagination = $users->appends(array(
                'keyword' => $request->keyword
            ));
        }


        $roles = Role::all();

        return view('admin.user.index', compact(['users','roles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    public function profile()
    {
        return view('admin.user.profile');
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
            'phone' => 'regex:/(92)[0-9]{9}/',
            'mobile' => 'regex:/(92)[0-9]{9}/',
            ]);

        if ($request->hasFile('image')) {
            $filename = $this->globalclass->storeS3($request->file('image'), 'users');
            User::create($request->except('password','image','dp')+['password' => Hash::make($request->password),'type'=>'property','image' => $filename,'dp' => $filename, 'thumbnail' => $filename]);
        }
        else{
            User::create($request->except('password')+['password' => Hash::make($request->password),'type'=>'property']);
        }

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        $roles = Role::all();
        return view("admin.user.edit", compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        if (isset($request->newpassword)) {
            $user->update(['password' => Hash::make($request->newpassword)]);
        }

        if ($request->hasFile('image')) {
            $filename = $this->globalclass->storeS3($request->file('image'), 'users');
            $user->update($request->except('password','image','dp')+['image' => $filename,'dp' => $filename, 'thumbnail' => $filename]);
        }
        else{
            $user->update($request->all());
        }
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if(auth()->user()->email == 'chhattofficial@chhatt.com'){
            $item = User::find($id);
            $item->delete();
        }
        return redirect()->back();
    }

    public function save_image(Request $request)
    {
        // $id = $request->userid;
        $user = User::find(auth()->user()->id);
        if ($request->hasFile('dp')) {
            if (auth()->user()->dp != null) {
                // $image_path = 'D:/xampp/htdocs/constructionchatt/public/images/userdp/'.auth()->user()->dp;
                $image_path = public_path('images/userdp/') . auth()->user()->dp;
                // dd($image_path);
                unlink($image_path);
            }
            $nnn = date('YmdHis');
            $completeFileName = $request->file('dp')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $image = $request->file('dp');
            $name = str_replace(' ', '_', $fileNameOnly) . '-' . time() . $nnn . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/userdp');
            $image->move($destinationPath, $name);
            $user->dp = $name;
            $user->save();
            return 1;
        }
    }


    public function rotate_image(Request $request)
    {
        // $data = $request->all();
        // dd($data);
        $filename = $request->image;
        $arrayimage = explode('/', $filename);
        $imagename = $arrayimage[sizeof($arrayimage) - 1];
        $filename = public_path("images/userdp/" . $imagename);
        $degrees = $request->angle;
        if ($request->angle == 90) {
            $degrees = 270;
        }
        if ($request->angle == 270) {
            $degrees = 90;
        }
        // $img=Intervention\Image\Facades\Image::make($filename);
        // $img->rotate($degrees);
        // $img->save(public_path('images/userdp/rotated.jpg'));
        // // Load the image(
        // $source = imagecreatefromjpeg($filename);
        // // Rotate
        // $rotate = imagerotate($source, $degrees, 0);
        // // and save it on your server...
        // imagejpeg($rotate, public_path('images/userdp/ahkgsdhas.jpg') );
        $img_new = imagecreatefromjpeg($filename);
        $img_new = imagerotate($img_new, $degrees, 0);
        // Save rotated image
        imagejpeg($img_new, $filename, 80);
    }


    public function filter(Request $request){

        $users = User::orderBy('created_at','desc');

        $roles = Role::orderBy('created_at', 'desc');

        if (isset($request->role_id)) {
            $users = $users->where('users.role_id',$request->role_id);

        }
        $users = $users->paginate(25);
        $roles = $roles->paginate(25);

        $pagination = $users->appends(array(
            'role_id' => $request->role_id,
        ));
        return view('admin.user.index', compact(['users','roles']));

    }

}
