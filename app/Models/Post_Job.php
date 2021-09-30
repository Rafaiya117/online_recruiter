<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Mehradsadeghi\FilterQueryString\FilterQueryString;


class Post_Job extends Model
{
    use HasFactory,FilterQueryString;
    protected $guarded=[];
protected $filters=['LIKE'];
    public function category()
    {

        return $this->belongsTo(Category::class);
    }
}
