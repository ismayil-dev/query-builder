<?php

namespace App\Orders\QueryBuilders;

use Illuminate\Database\Eloquent\Collection;

interface OrderEloquentBuilderContract
{
    public function whereCreatedToday(): self;

    public function whereCreatedThisMonth(): self;

    public function markAsProcessing(): int;

    public function markAsCompleted(): int;

    public function markAsCancelled(): int;

    public function markAsRefunded(): int;

    public function getCompleted(): Collection;

    public function getPending(): Collection;
}
