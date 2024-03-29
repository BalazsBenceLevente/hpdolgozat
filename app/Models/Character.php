<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public $timestamps = false;
    protected $table = "characters";

    public function houses()
    {
        return $this->hasMany(House::class,"id");
    }
    
}
