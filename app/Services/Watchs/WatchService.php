<?php

namespace App\Services\Watchs;

use App\Models\Watch\Watchs;
use App\Repositories\Watchs\WatchRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            $item = $this->repository
                ->list();
        }catch (\Exception $exception)
        {
            return $exception;
        }

        return $item;
    }

    /**
     * @param array $params
     * @return Watchs|\Exception
     *
     */
    public function create(array $params)
    {
        try{
            DB::beginTransaction();
            $insert = new Watchs($params);
            $insert->save();
            $image = Storage::disk('public')->putFile('watch-'.$insert->id, $insert['image']);
            $insert->update(['image' => $image]);
            DB::commit();
        }catch (\Exception $exception)
        {
            DB::rollBack();
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
