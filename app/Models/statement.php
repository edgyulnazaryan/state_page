<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'category', 'age', 'price', 'dead_line', 'image', 'gender'];


    
    public function Reviews()
    {
        return $this->belongsTo(App\Models\statement::class, 'state_id');
    }

}
