<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\License;

use Illuminate\Http\Request;

class RenewController extends Controller
{
    public function index(){
        return view('renew');
    }
    public function check(Request $req){
        $req->validate(
            [
                "license" => "required|max:200"
            ]
        );

        $res = License::where('license', $req->license)->update(['user_id' => auth()->id()]);
        if($res){

            $customer = new Customer;
            $customer->user_id = auth()->id();
            $customer->license_id = $res;
            $res2 = $customer->save();
            if($res2){
                return redirect()->back();
            }
        }

    }



}
