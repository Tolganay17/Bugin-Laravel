<?php

namespace App\Http\Livewire;

use App\Models\post;
use Livewire\Component;
use DB;
use App;


class LoadMore extends Component
{
    public $count = 4;
    public function __construct(){
        $categories = DB::table('categories')->get();
        view()->share([
            'categories' => $categories,
        ]);
    }
    public function render(){
        $kogam = post::with('category')->where('cid','LIKE','%10%')->get();
        $weeken = post::with('category')->orderby('pid','DESC')->get()->take(8);
        return view('main.test',['weeken'=>$weeken,'kogam'=>$kogam]);
    }
    
    
}
