<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Number extends Controller
{
    public static function create($number)
    {
        DB::table('numbers')->insert(
            ['number' => $number]
        );
    }
}
