<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Combo;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "slug"
    ];

    public function combo(){
        return $this->hasMany(Combo::class);
    }
}
