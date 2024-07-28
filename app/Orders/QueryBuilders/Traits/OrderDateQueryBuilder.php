<?php

namespace App\Orders\QueryBuilders\Traits;

use Illuminate\Support\Carbon;

/**
 * Trait OrderDateQueryBuilder
 * @package App\Orders\QueryBuilders\Traits
 */
trait OrderDateQueryBuilder
{
    public function whereCreatedToday(): self
    {
        return $this->whereDate('created_at', Carbon::today());
    }

    public function whereCreatedThisMonth(): self
    {
        return $this->whereMonth('created_at', Carbon::now()->month);
    }
}
