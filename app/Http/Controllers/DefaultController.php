<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Property;
use App\User;
use DB;


class DefaultController extends Controller
{
    public function postsToProperties(){
        $a = array();
        $chatprop = DB::table('posts')->get();
        foreach ($chatprop as $property) {
                $array = explode(',', $property->latlng);
            $pro=Property::where('address' ,$property->address)->where('latitude',$array[0])->where('longitude',$array[1])->first();
            if ($pro != null) {
                $name=optional($pro->user)->name;
                // dd($name);
                // dd($property->user_name);
                // if($property->user_name==$name){
                    // dd($property->id);
                    Property::where('id',$pro->id)->update([
                        'per_id'=>$property->id
                    ]);
                // }
            } else {
        array_push($a, 1);
            }
        }

        $a = array();
        $chatprop = Property::all();
        foreach ($chatprop as $property) {
                $array = explode(',', $property->latlng);
                $pro=DB::table('posts')->where('address' ,$property->address)->first();
            // $pro=Property::where('address' ,$property->address)->where('latitude',$array[0])->where('longitude',$array[1])->first();
            if ($pro != null) {
                // $name=optional($pro->user)->name;
                // // dd($name);
                // // dd($property->user_name);
                // // if($property->user_name==$name){
                //     // dd($property->id);
                    Property::where('id',$property->id)->update([
                        'per_id'=>$pro->id
                    ]);
                // }
            } else {
        array_push($a, 1);
            }
        }


        dd($a);
    }


    public function setNumbers(){
        $users = User::all();

        foreach($users as $user) {
            $str = $user->phone;
            if (isset($str[0]) && $str[0] == 3) {
                $u = User::find($user->id);
                $u->phone = '92' . $u->phone;
                $u->save();
            } elseif (isset($str[0]) && $str[0] == 0) {
                $arr1 = explode("0",$user->phone);
                $u = User::find($user->id);
                if (isset($arr1[1])) {
                    $u->phone = '92' . $arr1[1];
                $u->save();
                }

            }
        }
    }

    public function test(){

        $num = '0321-26799-32';
        // $num = str_replace('-', '', $num);
        dd($num);

    }
}
