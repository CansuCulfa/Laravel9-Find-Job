<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Job;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index()
    {
        $page='home';
        $sliderdata = Job::limit(4)->get();
        $joblist1 = Job::limit(6)->get();
        $setting= Setting::first();
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'joblist1'=>$joblist1
        ]);
    }
    public function job($id)
    {
        $data = Job::find($id);
        $images = DB::table('images')->where('job_id' ,$id)->get();
        return view('home.job',[
            'data'=>$data,
            'images'=>$images
        ]);
    }

    public function categoryjobs($id)
    {
        echo "Category";
        exit();
        $data = Job::find($id);
        $images = DB::table('images')->where('job_id' ,$id)->get();
        return view('home.job',[
            'data'=>$data,
            'images'=>$images
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
