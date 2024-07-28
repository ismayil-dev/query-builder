<?php

namespace App\Orders\Models;

use App\Orders\Enums\OrderStatus;
use App\Orders\QueryBuilders\OrderEloquentBuilder;
use Barryvdh\LaravelIdeHelper\Eloquent;
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
 * @method static OrderEloquentBuilder|Order getCompleted()
 * @method static OrderEloquentBuilder|Order getPending()
 * @method static OrderEloquentBuilder|Order markAsCancelled()
 * @method static OrderEloquentBuilder|Order markAsCompleted()
 * @method static OrderEloquentBuilder|Order markAsProcessing()
 * @method static OrderEloquentBuilder|Order markAsRefunded()
 * @method static OrderEloquentBuilder|Order newModelQuery()
 * @method static OrderEloquentBuilder|Order newQuery()
 * @method static OrderEloquentBuilder|Order query()
 * @method static OrderEloquentBuilder|Order whereCancelled()
 * @method static OrderEloquentBuilder|Order whereCompleted()
 * @method static OrderEloquentBuilder|Order whereCreatedThisMonth()
 * @method static OrderEloquentBuilder|Order whereCreatedToday()
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
