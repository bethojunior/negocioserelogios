<?php

namespace App\Repositories\Watchs;

use App\Contracts\Repository\AbstractRepository;
use App\Models\Watch\Watchs;

class WatchRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(Watchs::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function list()
    {
        return $this->getModel()
            ::with('type')
            ->orderByDesc('id')
            ->get();
    }
}
