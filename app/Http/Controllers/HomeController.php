<?php

namespace App\Http\Controllers;


use App\Models\Job;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliderdata = Job::limit(4)->get();
        $joblist1 = Job::limit(6)->get();
        $setting= Setting::first();
        return view('home.index',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'joblist1'=>$joblist1
        ]);
    }

    public function test()
    {

        return view('home.test');
    }

    public function param($id, $number)
    {

        //echo "Parameter 1:", $id;
        //echo "<br>Parameter 2:", $number;
        // echo "<br>Sum Parameters :", $number + $id;
        return view('home.test2',
            [
                'id' => $id,
                'number' => $number
            ]);
    }

    public function save(Request $request)
    {
            echo "Save Function<br>";
            echo "First name:",$_REQUEST["fname"];
            echo "Last name:",$_REQUEST["lname"];


    }

}
