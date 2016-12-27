<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        return view('index');
    }
        
    public function store()
    {
        $number = Input::get('number');
        Number::create($number);
        $text = $this->checkDivisibility($number);
        if ($text === "")
        {
            return view('index');
        }
        else
        {
            return $text;
        }
    }
    
    public static function checkDivisibility($number)
    {
        $output = "";
        if ($number % 3 === 0)
        {
            $output .= "fizz";
        }
        if ($number % 5 === 0)
        {
            $output .= "buzz";
        }
        
        return $output;
    }
}
