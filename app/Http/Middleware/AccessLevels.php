<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use View;
use App\Repositories\LevelRepository;
use App\Repositories\ProductTypeRepository;
use App\Repositories\ProductRepository;
use App\Repositories\PostRepository;
use App\Repositories\OrderStatusRepository;
use App\Repositories\PostTypeRepository;

class AccessLevels
{
    protected $levelRepository;

    public function __construct(
        LevelRepository $levelRepository,
        ProductTypeRepository $productTypeRepository,
        OrderStatusRepository $orderStatusRepository,
        PostTypeRepository $postTypeRepository,
        ProductRepository $productRepository,
        PostRepository $postRepository
    ){
        $this->levelRepository = $levelRepository;
        $this->productTypeRepository = $productTypeRepository;
        $this->orderStatusRepository = $orderStatusRepository;
        $this->postTypeRepository = $postTypeRepository;
        $this->productRepository = $productRepository;
        $this->postRepository = $postRepository;

        // $this->levelRepository->popCriteria(RequestCriteria::class);
        // $this->productTypeRepository->popCriteria(RequestCriteria::class);
        // $this->orderStatusRepository->popCriteria(RequestCriteria::class);
        // $this->postTypeRepository->popCriteria(RequestCriteria::class);
        // $this->productRepository->popCriteria(RequestCriteria::class);
        // $this->postRepository->popCriteria(RequestCriteria::class);
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
        if($levels != []){ // account
            if(!in_array(Auth::user()->id_level, $levels)){
                return abort(403, 'Access denied');
            }
        
            if(Auth::user()->isAdmin()){
                View::share('levels', $this->levelRepository->skipCriteria()->all());
            }
    
            if(Auth::user()->isCustomer()){
                
            }
        }else{ // guest

        }

        // all
        View::share('productTypes', $this->productTypeRepository->skipCriteria()->all());
        View::share('orderStatuses', $this->orderStatusRepository->skipCriteria()->all());
        View::share('postTypes', $this->postTypeRepository->skipCriteria()->all());
        View::share('topPosts', $this->postRepository->skipCriteria()->findByField('highlight', true));
        View::share('topProducts', $this->productRepository->skipCriteria()->findByField('highlight', true));

        return $next($request);
    }
}
