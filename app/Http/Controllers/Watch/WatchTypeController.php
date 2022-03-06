<?php

namespace App\Http\Controllers\Watch;

use App\Http\Controllers\Controller;
use App\Services\Watchs\WatchTypeService;
use Illuminate\Http\Request;

class WatchTypeController extends Controller
{

    private $service;

    /**
     * @param WatchTypeService $watchTypeService
     */
    public function __construct(WatchTypeService $watchTypeService)
    {
        $this->service = $watchTypeService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $types = $this->service
            ->all();
        return view('admin.index_type')->with(['types' => $types]);
    }

    public function create()
    {
        return view('admin.create_type');
    }

    public function store(Request $request)
    {
        try{
            $this->service
                ->create($request->all());
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
        return redirect()->route('type.create')->with(['success' => 'Inserido com sucesso']);
    }
}
