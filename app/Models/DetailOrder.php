<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailOrder extends Model
{
    use SoftDeletes;

    public $table = "detail_order";

    protected $fillable = [
        "order_id",
        "food_id",
        "food_qty",
    ];

    public function order()
    {
        return $this->belongsTo("App\Models\Order", "id", "order_id");
    }
    public function menu()
    {
        return $this->belongsTo("App\Models\Menu", "id", "food_id");
    }
}
