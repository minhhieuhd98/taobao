<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    /**
     * The attributes on order tables
     */
    protected $fillable = [
        'id',
        'cost',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function getOrderById($user_id)
    {
        return DB::table('items')->join('orders', function ($join) {
                $join->on('orders.id', '=', 'items.order_id');
            })->where('orders.user_id', $user_id)->get();
    }
}
