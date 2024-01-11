<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Url;
class CreateUrlbyApi extends Controller
{
    public function show(){
        Return Url::all();
    }

    public function store(Request $req){
        $shortUrl = substr(str_shuffle($req->long_url), 0, 6);
        // $data = array('user_id' => Auth::user()->id, 'long_url' => $req->url, 'short_url' => $shorturl, 'click' => 0);
        // $add = Url::create($data);
        $url = new Url;
        $url->user_id = $req->user_id;
        $url->long_url = $req->long_url;
        $url->short_url = $shortUrl;
        $url->click = 0;
        $url->save();
        // return response()->json(['message'=>'post created', 
        // 'status'=>'success',
        // 'data'=>$url]);
        // if($add){
            return ["url"=>"Data has been saved"];
        // }else{
        //     return ["add"=>"operation"];
        // }
    }
}
