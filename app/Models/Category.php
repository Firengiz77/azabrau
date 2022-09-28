<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\ITranslatable;


class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','cat_id'];

    public function translate($attr, $lang)
    {
        return json_decode($this[$attr])->$lang;
    }

    public function category(){
        return $this->belongsTo('App\Models\Category','cat_id');
    }




}
