<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScTestController extends Controller
{
    public function showsctest()
    {
        app()->bind('ScTest', function () {
            return 'サイクルテスト';
        });

        $test = app()->make('ScTest');

        dd($test, app());
    }
}
