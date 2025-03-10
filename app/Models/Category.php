<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = "category";

    protected $dates = [
        "created_at",
        "deleted_at",
        "updated_at"
    ];

    protected $fillable = [
        "categories"
    ];
}
