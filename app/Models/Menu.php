<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = "menu";

    protected $dates = [
        "updated_at",
        "created_at",
        "deleted_at",
    ];

    protected $fillable = [
        "category_id",
        "f_name",
        "f_description",
        "f_price",
        "f_rating",
        "f_photo",
        "f_category",
        "updated_at",
        "created_at",
        "deleted_at"
    ];

    // many to one from menu to order
    public function order()
    {
        return $this->belongsTo("App\Models\Order", "id", "food_id");
    }
}
