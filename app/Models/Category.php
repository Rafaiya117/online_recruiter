<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Category extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function post__jobs(){

        return $this->hasMany(Post_Job::class);
    }
}
