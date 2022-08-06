<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    use HasFactory;
    protected $table='cats';
    protected $primaryKey='cats_id';
    public function Blog()
    {
    return $this->belongsTo('App\Models\Blog','cats_id','id');
    }
}
