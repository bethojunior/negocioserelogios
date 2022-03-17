<?php

namespace App\Http\Controllers;

use App\Services\Watchs\WatchService;
use App\Services\Watchs\WatchTypeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $watchService;
    private $watchTypeService;

    /**
     * @param WatchService $watchService
     * @param WatchTypeService $watchTypeService
     */
    public function __construct(WatchService $watchService, WatchTypeService $watchTypeService)
    {
        $this->watchService = $watchService;
        $this->watchTypeService = $watchTypeService;
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $watchTypes = $this->watchTypeService
            ->all();
        $watchs = $this->watchService
            ->list();
        return view('home')->with([$watchs,$watchTypes]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function main()
    {
        $watchTypes = $this->watchTypeService
            ->all();
        $watch = $this->watchService
            ->list();
        return view('home.welcome')->with([
            'watch' => $watch,
            'type' => $watchTypes
        ]);
    }

}
