<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerData extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = "customer_data";

    protected $dates = [
        "updated_at",
        "created_at",
        "deleted_at",
    ];

    protected $fillable = [
        "customer_id",
        "customer_name",
        "customer_phone",
        "updated_at",
        "created_at",
        "deleted_at"
    ];

    public function customer()
    {
        return $this->belongsTo("App\Models\Customer", "customer_id", "id");
    }
}
