<?php

namespace App\Services\Watchs;

use App\Repositories\Watchs\WatchTypeRepository;

class WatchTypeService
{
    private $repository;

    /**
     * @param WatchTypeRepository $repository
     */
    public function __construct(WatchTypeRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function all()
    {
        return $this->repository->all();
    }
}
