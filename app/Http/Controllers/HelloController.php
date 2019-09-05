<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(Request $request){


        $data =  [
            'versions' => $this->getVersion($request->input('device'))
        ];

        return responseJson(true, $data, 'Başarılı');

    }

    public function getVersion($device){
        switch ($device){
            case "ios":
                $version = intval(env('IOS_VERSION'));
                break;
            case "android":
                $version = intval(env('ANDROID_VERSION'));
                break;
            default:
                $version = null;
        }
        return $version;
    }
}
