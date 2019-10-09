<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use View;
use App\Repositories\LevelRepository;

class AccessLevels
{
    protected $levelRepository;

    public function __construct(
        LevelRepository $levelRepository
    ){
        $this->levelRepository = $levelRepository;

        $this->levelRepository->popCriteria(RequestCriteria::class);
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
        }

        if(Auth::user()->isCustomer()){
            
        }

        return $next($request);
    }
}
