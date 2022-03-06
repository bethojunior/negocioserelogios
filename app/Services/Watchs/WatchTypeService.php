<?php

namespace App\Services\Watchs;

use App\Models\Watch\Watchs;
use App\Models\Watch\WatchTypes;
use App\Repositories\Watchs\WatchTypeRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    /**
     * @param array $data
     * @return WatchTypes|\Exception
     */
    public function create(array $data)
    {
        try{
            DB::beginTransaction();
            $insert = new WatchTypes($data);
            $insert->save();
            DB::commit();
        }catch (\Exception $exception)
        {
            DB::rollBack();
            return $exception;
        }

        return $insert;
    }
}
