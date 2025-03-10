<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = "customer";

    protected $dates = [
        "updated_at",
        "created_at",
        "deleted_at",
    ];

    protected $fillable = [
        "customer_name",
        "customer_phone",
        "updated_at",
        "created_at",
        "deleted_at"
    ];

    // one to many from customer to order
    public function order()
    {
        return $this->hasMany("App\Models\Order", "customer_id");
    }

    // one to many from customer to order_history
    public function order_history()
    {
        return $this->hasMany("App\Models\OrderHistory", "customer_id");
    }

    // one to one from customer to customer_data
    public function customer_data()
    {
        return $this->belongsTo("App\Models\CustomerData", "id", "customer_id");
    }
}
