<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_id',
        'note',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function customer(){
        return $this->belongsTo(User::class, 'customer_id');
    }

    /**
     * @return mixed
     */
    public function order_details()
    {
        return $this->hasMany(OrderDetail::class)->orderBy('created_at', 'desc');
    }
}
