<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authors extends Model
{
    use HasFactory;
    protected $fillable = ["authId", "authName", "definition"]; //الحجات اللي هتتملا لما أبعت البيانات
    public function books()
    {
        return $this->belongsToMany(books::class, "auth_write_book");
    }
}
