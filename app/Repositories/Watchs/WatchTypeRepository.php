<?php

namespace App\Repositories\Watchs;

use App\Contracts\Repository\AbstractRepository;
use App\Models\Watch\WatchTypes;

class WatchTypeRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(WatchTypes::class);
    }
}
