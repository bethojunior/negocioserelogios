<?php

namespace App\Http\Controllers\Watch;

use App\Http\Controllers\Controller;
use App\Services\Watchs\WatchService;
use App\Services\Watchs\WatchTypeService;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    protected $service;
    protected $serviceType;

    /**
     * @param WatchService $service
     * @param WatchTypeService $serviceType
     */
    public function __construct(WatchService $service, WatchTypeService $serviceType)
    {
        $this->middleware('auth');
        $this->service = $service;
        $this->serviceType = $serviceType;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.list-watch')->with([
            'watchs' => $this->service->list()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.create-watch')->with([
            'types' => $this->serviceType->all(),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try{
            $this->service
                ->create($request->all());
        }catch (\Exception $exception){
            return redirect()->route('watchs.create')->with([
                'error' => 'Erro ao inserir produto '.$request->name.' '.$exception->getMessage()
            ]);
        }
        return redirect()->route('watchs.create')->with([
            'success' => 'Produto '.$request->name.' inserido com sucesso'
        ]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id)
    {
        try{
            $this->service
                ->delete($id);
        }catch (\Exception $exception){
            return redirect()->route('watchs.index')->with([
                'error' => 'Erro ao inserir deletar produto'.$exception->getMessage()
            ]);
        }
        return redirect()->route('watchs.index')->with([
            'success' => 'Produto deletado com sucesso'
        ]);
    }

    /**
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(int $id , Request $request)
    {
        try{
            $this->service
                ->update($request->all() , $id);
        }catch (\Exception $exception){
            return redirect()->route('watchs.index')->with([
                'error' => 'Erro ao editar produto '.$request->name.' '.$exception->getMessage()
            ]);
        }
        return redirect()->route('watchs.index')->with([
            'success' => 'Produto '.$request->name.' atualizado com sucesso'
        ]);
    }
}
