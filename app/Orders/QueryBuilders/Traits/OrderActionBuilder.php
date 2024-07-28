<?php

namespace App\Orders\QueryBuilders\Traits;

use App\Orders\Enums\OrderStatus;

trait OrderActionBuilder
{
    /**
     * @return int
     */
    public function markAsProcessing(): int
    {
        return $this->update(['status' => OrderStatus::PROCESSING->value]);
    }

    /**
     * @return int
     */
    public function markAsCompleted(): int
    {
        return $this->update(['status' => OrderStatus::COMPLETED->value]);
    }

    /**
     * @return int
     */
    public function markAsCancelled(): int
    {
        return $this->update(['status' => OrderStatus::CANCELLED->value]);
    }

    /**
     * @return int
     */
    public function markAsRefunded(): int
    {
        return $this->update(['status' => OrderStatus::REFUNDED->value]);
    }
}
