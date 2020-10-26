<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $data =  Http::get('http://api.marketstack.com/v1/eod/2020-01-03?access_key=96a626c034ea72319ae8cd53cef4a66b&symbols=MSFT,AMZN,GOOGL')->json();
        return view('cours.03.list', compact('data'));
     
    }

    public function listing()
    {

        $data =  Http::get('http://api.marketstack.com/v1/eod/2020-01-04?access_key=96a626c034ea72319ae8cd53cef4a66b&symbols=MSFT,AMZN,GOOGL')->json();
        return view('cours.04.listing', compact('data'));
    }



}
