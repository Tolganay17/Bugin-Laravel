<?php

namespace App\Http\Controllers;

use DB;
use App;
use App\Models\post;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public $count = 4;
    public function __construct(){
        $categories = DB::table('categories')->get();
        view()->share([
            'categories' => $categories,
        ]);
    }
    public function index(){
        
        $weekend = DB::table('posts')->where('cid','LIKE','%7%')->get();
        $kogam = DB::table('posts')->where('cid','LIKE','%10%')->get();
        $news = DB::table('posts')->where('cid','LIKE','%1%')->get();
        $covid = DB::table('posts')->where('cid','LIKE','%4%')->get();
        $bilim = DB::table('posts')->where('cid','LIKE','%11%')->get();
        
       return view('main.home',['weekend'=>$weekend,'kogam'=>$kogam,
       'news'=>$news,'covid'=>$covid,
       'bilim'=>$bilim]);
        
    }
    public function index1(){
        $kogam = post::with('category')->where('cid','LIKE','%10%')->get();
        $weeken = post::with('category')->orderby('pid','DESC')->get()->take(8);
       
        
       return view('main.test',['weeken'=>$weeken,'kogam'=>$kogam]);
        
    }
    public function category($slug){
       $cat = DB::table('categories')->where('slug',$slug)->first();
       $posts = post::with('category')->where('cid','LIKE','%'.$cat->cid.'%')->get();
        return view('main.category',['posts'=>$posts,'cat'=>$cat]);
    }
    public function article($slug){
        $data = DB::table('posts')->where('slug',$slug)->first();
        return view('main.article',['data'=>$data]);
    }
    public function changeLocale($locale){
        session(['locale'=>$locale]);
        App::setLocale($locale);
       
       return redirect()->back();
        
    }
    
    public function search(Request $req){
        $searchData = $req->searchData;
        $kogam= post::where('title','LIKE','%'.$searchData.'%')->get();
        $weeken=post::where('title','LIKE','%'.$searchData.'%')->get();
        
        
        return view('main.test',['weeken'=>$weeken,'searchData'=>$searchData,'kogam'=>$kogam]);
    }

}
