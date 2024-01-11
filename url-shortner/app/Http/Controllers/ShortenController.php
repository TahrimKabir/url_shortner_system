<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShortenController extends Controller
{
    public function shorten(Request $req)
    {
        $shortUrl = substr(str_shuffle($req->url), 0, 6);
        $data = array('user_id' => Auth::user()->id, 'long_url' => $req->url, 'short_url' => $shortUrl, 'click' => 0);
       
        $checkD = Url::where('long_url',$req->url)->where('user_id',Auth::user()->id)->get();
        if(count($checkD)==0){
            Url::create($data);
            return redirect()->back()->with('surl','Shortened Url:'.$shortUrl);
        }else{
            return redirect()->back()->with('surl','Already Shortened ');
        }
        
    }

    public function getUrl($url)
    {
        $getUrl = Url::where('short_url', $url)->first();
        if ($getUrl) {
            $click = $getUrl->click+1;
            $data = array('click'=>$click);
            Url::where('id',$getUrl->id)->update($data);
            return redirect($getUrl->long_url);
        }else{
            return response()->json(['error' => 'Short URL not found.'], 404);
        }
    }
}
