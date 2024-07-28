<?php

namespace App\Orders\QueryBuilders;

use App\Orders\QueryBuilders\Traits\OrderActionBuilder;
use App\Orders\QueryBuilders\Traits\OrderDateQueryBuilder;
use App\Orders\QueryBuilders\Traits\OrderFetcherBuilder;
use App\Orders\QueryBuilders\Traits\OrderStatusQueryBuilder;
use Illuminate\Database\Eloquent\Builder;

class OrderEloquentBuilder extends Builder
{
    use OrderStatusQueryBuilder;
    use OrderDateQueryBuilder;
    use OrderActionBuilder;
    use OrderFetcherBuilder;
}
