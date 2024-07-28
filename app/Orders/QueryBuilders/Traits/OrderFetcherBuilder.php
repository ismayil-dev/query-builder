<?php

namespace App\Orders\QueryBuilders\Traits;

use App\Orders\Models\Order;
use Illuminate\Database\Eloquent\Collection;

trait OrderFetcherBuilder
{
    /**
     * @return Collection<Order>
     */
    public function getCompleted(): Collection
    {
        return $this->whereCompleted()->get();
    }

    /**
     * @return Collection<Order>
     */
    public function getPending(): Collection
    {
        return $this->wherePending()->get();
    }
}
