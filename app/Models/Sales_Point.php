<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\ITranslatable;


class Sales_Point extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','phone_1','phone_2','link'];

    public function translate($attr, $lang)
    {
        return json_decode($this[$attr])->$lang;
    }

  
}
