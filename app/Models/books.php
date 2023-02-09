<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $fillable = [
        "bookId", "bookName", "evaluation",
        "edition", "folderNum"
    ]; //الحجات اللي هتتملا لما أبعت البيانات
    public function authors()
    {
        return $this->belongsToMany(authors::class, "auth_write_book");
    }
}
