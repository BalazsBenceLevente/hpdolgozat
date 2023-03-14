<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    public $timestamps = false;
    protected $table = "houses";

    public function characters()
    {
        return $this->hasMany(Character::class,"id");
    }
}
