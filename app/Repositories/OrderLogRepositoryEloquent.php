<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OrderLogRepository;
use App\Entities\OrderLog;
use App\Validators\OrderLogValidator;

/**
 * Class OrderLogRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OrderLogRepositoryEloquent extends BaseRepository implements OrderLogRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OrderLog::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return OrderLogValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
