<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScTestController extends Controller
{

    public function serviceprovidertest()
    {
        $a = app()->make('encrypter');
        $pass = $a->encrypt('password');
        // dd($pass, $a->decrypt($pass));

        $sample = app()->make('serviceProviderTest');

        dd($sample, $pass, $a->decrypt($pass));
    }

    public function showsctest()
    {
        app()->bind('ScTest', function () {
            return 'サイクルテスト';
        });

        $test = app()->make('ScTest');

        dd($test, app());
    }
}
