<?php

namespace App\Orders\Models;

use App\Orders\Enums\OrderStatus;
use App\Orders\QueryBuilders\OrderEloquentBuilder;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property int $customer_id
 * @property int $product_id
 * @property OrderStatus|string $status
 * @property int $quantity
 * @property float $total
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @method static OrderEloquentBuilder|Order whereId(int $value)
 * @method static OrderEloquentBuilder|Order newModelQuery()
 * @method static OrderEloquentBuilder|Order newQuery()
 * @method static OrderEloquentBuilder|Order query()
 * @method static OrderEloquentBuilder|Order whereCancelled()
 * @method static OrderEloquentBuilder|Order whereCompleted()
 * @method static OrderEloquentBuilder|Order wherePending()
 * @method static OrderEloquentBuilder|Order whereProcessing()
 * @method static OrderEloquentBuilder|Order whereRefunded()
 * @mixin Eloquent
 */
class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'product_id',
        'status',
        'quantity',
        'total',
    ];

    protected $casts = [
        'status' => OrderStatus::class,
    ];

    /**
     * @param $query
     * @return OrderEloquentBuilder
     */
    public function newEloquentBuilder($query): OrderEloquentBuilder
    {
        return new OrderEloquentBuilder($query);
    }
}
