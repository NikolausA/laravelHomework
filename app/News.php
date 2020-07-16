<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    public function getAllNews()
    {
        return \DB::table('news')->get();
    }
}
