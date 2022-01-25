<?php

namespace App\Services\Watchs;

use App\Models\Watch\Watchs;
use App\Repositories\Watchs\WatchRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WatchService
{
    private $repository;

    /**
     * @param WatchRepository $repository
     */
    public function __construct(WatchRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Exception|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function list()
    {
        try{
            $users = $this->repository
                ->list();
        }catch (\Exception $exception)
        {
            return $exception;
        }

        return $users;
    }

    public function create(array $params)
    {
        try{
            $insert = new Watchs($params);
            $this->repository->save($insert);
        }catch (\Exception $exception)
        {
            return $exception;
        }

        return $insert;
    }

    /**
     * @param array $request
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     * @throws \Exception
     */
    public function update(array $request , int $id)
    {
        try{
            DB::beginTransaction();
            $result = $this->repository->find($id);
            $result->update($request);
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            throw $exception;
        }
        return $result;
    }

    /**
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     * @throws \Exception
     */
    public function delete(int $id)
    {
        try{
            DB::beginTransaction();
            $result = $this->repository->find($id);
            $result->delete();
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            throw $exception;
        }

        return $result;
    }
}
