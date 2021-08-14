<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    public function statement()
    {
        return $this->hasMany(\App\Models\statement::class, 'id');
    }

}
