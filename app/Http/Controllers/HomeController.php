<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $count = 4;
    public function __construct(){
        $cats = DB::table('cats')->get();
        view()->share([
            'cats' => $cats,
        ]);
    }
    public function index()
    {
        $blogs = Blog::with('cat')->get();
        
        $blogs = Blog::withTranslation()
            ->translatedIn(app()->getLocale())
            ->take(10)
            ->get();
            dd($blogs);
            
            return view('main.test1',['blogs'=>$blogs]);
}
}
