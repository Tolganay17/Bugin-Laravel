<?php

namespace App\Models;

use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $primaryKey='pid';
    protected $fillable=[
        'title',
        'slug',
        'cid',
        'description',
        'image',
    ];
   
   public function category(){
      return $this->hasOne(category::class,'cid','cid');
        
    }
}
