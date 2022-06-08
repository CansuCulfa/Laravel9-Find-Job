<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Job;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function about()
    {

        $setting= Setting::first();
        return view('home.about',[

            'setting'=>$setting

        ]);
    }

    public function references()
    {

        $setting= Setting::first();
        return view('home.references',[

            'setting'=>$setting

        ]);
    }
    public function contact()
    {

        $setting= Setting::first();
        return view('home.contact',[

            'setting'=>$setting,

        ]);
    }
    public function Faq()
    {
        $setting= Setting::first();
        $datalist= Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip =request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your messages has been sent, Thank you.!');

    }

    public function storecomment(Request $request)
    {
        //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->job_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('job' , ['id'=>$request->input('job_id')])->with('success', 'Your comment has been sent, Thank you.!');

    }
    public function job($id)
    {
        $data = Job::find($id);
        $images = DB::table('images')->where('job_id' ,$id)->get();
        $reviews = Comment::where('job_id',$id)->get();

        return view('home.job',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews
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
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }




}
