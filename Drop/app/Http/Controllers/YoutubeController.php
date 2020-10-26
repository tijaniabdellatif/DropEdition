<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class YoutubeController extends Controller
{
    
    /*
    rendering views
    */
    public function index()
    {
        $videos = $this->_videoList('laravel');
        return view('youtube.index',compact('videos'));
    }
    public function results()
    {
        return view('youtube.results');
    }

    public function watch()
    {
        return view('youtube.watch');
    }

    
    /**
     * 
     * Listing all data Api youtube (en cours)
     */

    protected function _videoList($keywords)
    {

         $part='snippet';
         $country='MA';
         $apikey = config('services.youtube.api_key');
         $max = 2;
         $youtubeEndpoint = config('services.youtube.search_endpoint');
         $type='video';
         $url = "$youtubeEndpoint?part=$part&maxResults=$max&regionCode=$country&type=$type&key=$apikey&q=$keywords";
         $response = Http::get($url);

         $results = json_decode($response);
         File::put(storage_path() . '/app/public/results.json',$response->body());

         return $results;

    }
}
