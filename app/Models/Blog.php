<?php

namespace App\Models;

use App\Models\cat;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Blog extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $primaryKey='id';
    protected $guarded = ['id'];
    public $translatedAttributes = ['title', 'content','slug'];
    public function cat(){
        return $this->hasOne(cat::class,'cats_id','cats_id');
          
      }
    
}
