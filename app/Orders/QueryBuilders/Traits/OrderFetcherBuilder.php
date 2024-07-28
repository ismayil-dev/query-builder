<?php

namespace App\Orders\QueryBuilders\Traits;

use App\Orders\Models\Order;
use Illuminate\Database\Eloquent\Collection;

trait OrderFetcherBuilder
{
    /**
     * @return Collection<Order>
     */
    public function completed(): Collection
    {
        return $this->whereCompleted()->get();
    }

    /**
     * @return Collection<Order>
     */
    public function pending(): Collection
    {
        return $this->wherePending()->get();
    }
}
