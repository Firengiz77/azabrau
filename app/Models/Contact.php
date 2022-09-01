<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\ITranslatable;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = ['address','phone','email','fb_link','wp_link','insta_link'];


    
    public function translate($attr, $lang)
    {
        return json_decode($this[$attr])->$lang;
    }



}
