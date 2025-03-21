<?php

namespace App\Models;

use App\Enums\Order\StatusEnum;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "image",
        "category",
        "user_id",
        "status",
        "description"
    ];

    protected $with = [
        "category"
    ];

    protected function casts(): array
    {
        return [
            "status" => StatusEnum::class
        ];
    }
    public function category()
    {
return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
