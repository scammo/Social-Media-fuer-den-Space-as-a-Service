<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as HttpClient;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function TriggerSlackService(Request $request)
    {
        if(null !== $request->input('token') && $request->input('token') == env('APP_TOKEN'))
        {
            $client = new HttpClient();
            $res = $client->request('GET', 'http://curl.haxx.se/libcurl/c/libcurl-errors.html');
            return $res->getStatusCode();
            //return ['OK'];
        }
        return ['false'];
    }

    //
}
