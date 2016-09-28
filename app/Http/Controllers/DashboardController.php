<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MetzWeb\Instagram\Instagram;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDashboard(Request $request)
    {
        $instagram = new Instagram([
            'apiKey'      => '294280f7a15e4b7593120e38b095c335',
            'apiSecret'   => '25a4cc03cc004ffa90228140166b8846',
            'apiCallback' => 'http://homestead.app/dashboard'
        ]);

        if($request->has('code')) {
            $code = $request->get('code');
            $data = $instagram->getOAuthToken($code);
            $instagram->setAccessToken($data);
        }

        $token = $instagram->getAccessToken();

        if($token) {

            $data = $instagram->getUserFollower();

            dd($data);

            // return $likes;
            
            // return 'Your username is: ' . $data->user->username;
        } else {
            return "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";
        }
    }
}
