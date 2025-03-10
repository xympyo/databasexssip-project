<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use SoftDeletes;

    public $table = "experience";

    protected $dates = [
        "updated_at",
        "created_at",
        "deleted_at",
    ];

    protected $fillable = [
        "experience_id",
        "rating",
        "updated_at",
        "created_at",
        "deleted_at"
    ];

    // one to one from experience to order_history
    public function order_history()
    {
        return $this->belongsTo("App\Models\OrderHistory", "id", "experience_id");
    }

    // one to one from experience to order
    public function order()
    {
        return $this->belongsTo("App\Models\Order", "experience_id", "id");
    }
}
