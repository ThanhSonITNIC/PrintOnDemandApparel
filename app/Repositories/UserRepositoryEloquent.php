<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepository;
use App\Entities\User;
use App\Validators\UserValidator;
use Hash;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    protected $fieldSearchable = [
        'name' => 'like',
        'email' => '=',
        'tel' => '=',
        'address' => 'like',
        'level.name' => 'like',
        'status' => '=',
        'level.name' => 'like'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return UserValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * Check same user password
     * 
     * @param $password want to check
     * @param $id user
     * 
     * @return boolean
     */
    public function checkPassword($password, $id){
        $userPassword = $this->find($id)->password;
        return Hash::check($password, $userPassword);
    }

    /**
     * Update user password
     * 
     * @param $password
     * @param $id user
     * 
     * @return mixed
     */
    public function updatePassword($password, $id){
        return $this->update(['password' => Hash::make($password)], $id);
    }
    
}
