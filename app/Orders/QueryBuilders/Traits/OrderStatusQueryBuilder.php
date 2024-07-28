<?php

namespace App\Orders\QueryBuilders\Traits;

use App\Orders\Enums\OrderStatus;

trait OrderStatusQueryBuilder
{
    public function wherePending(): self
    {
        return $this->where('status', OrderStatus::PENDING->value);
    }

    public function whereProcessing(): self
    {
        return $this->where('status', OrderStatus::PROCESSING->value);
    }

    public function whereCompleted(): self
    {
        return $this->where('status', OrderStatus::COMPLETED->value);
    }

    public function whereCancelled(): self
    {
        return $this->where('status', OrderStatus::CANCELLED->value);
    }

    public function whereRefunded(): self
    {
        return $this->where('status', OrderStatus::REFUNDED->value);
    }
}
