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
            $res = $client->request('GET', env('APP_SLACKSERVICEURL'));
            return [$res->getStatusCode()];
            //return ['OK'];
        }
        return ['Wrong or no token. Try with a different or other token. Please do not hack us, we are the good guys'];
    }
}
