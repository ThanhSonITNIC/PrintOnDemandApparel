<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use View;
use App\Repositories\LevelRepository;
use App\Repositories\ProductTypeRepository;
use App\Repositories\OrderStatusRepository;

class AccessLevels
{
    protected $levelRepository;

    public function __construct(
        LevelRepository $levelRepository,
        ProductTypeRepository $productTypeRepository,
        OrderStatusRepository $orderStatusRepository
    ){
        $this->levelRepository = $levelRepository;
        $this->productTypeRepository = $productTypeRepository;
        $this->orderStatusRepository = $orderStatusRepository;

        $this->levelRepository->popCriteria(RequestCriteria::class);
        $this->productTypeRepository->popCriteria(RequestCriteria::class);
        $this->orderStatusRepository->popCriteria(RequestCriteria::class);
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {
        if(!in_array(Auth::user()->id_level, $levels)){
            return abort(403, 'Access denied');
        }

        if(Auth::user()->isAdmin()){
            View::share('levels', $this->levelRepository->all());
            View::share('productTypes', $this->productTypeRepository->all());
            View::share('orderStatus', $this->orderStatusRepository->all());
        }

        if(Auth::user()->isCustomer()){
            
        }

        return $next($request);
    }
}
