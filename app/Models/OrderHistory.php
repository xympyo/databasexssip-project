<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderHistory extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = "order_history";

    protected $dates = [
        "updated_at",
        "created_at",
        "deleted_at",
    ];

    protected $fillable = [
        "order_name",
        "order_food_name",
        "order_price",
        "order_quantity",
        "order_total",
        "order_rating",
        "updated_at",
        "created_at",
        "deleted_at"
    ];

    // many to one from order_history to customer
    public function customer()
    {
        return $this->belongsTo("App\Models\Customer", "customer_id", "id");
    }

    // one to one from order_history to order
    public function order()
    {
        return $this->belongsTo("App\Models\Order", "order_id", "id");
    }

    // one to one from order_history to experience
    public function experience()
    {
        return $this->belongsTo("App\Models\Experience", "experience_id", "id");
    }
}
