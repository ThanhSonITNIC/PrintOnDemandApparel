<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OrderStatusRepository;
use App\Entities\OrderStatus;
use App\Validators\OrderStatusValidator;

/**
 * Class OrderStatusRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OrderStatusRepositoryEloquent extends BaseRepository implements OrderStatusRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OrderStatus::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return OrderStatusValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
