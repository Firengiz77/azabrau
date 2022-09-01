<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\ITranslatable;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['image','link','title','desc'];

    public function translate($attr, $lang)
    {
        return json_decode($this[$attr])->$lang;
    }



}
