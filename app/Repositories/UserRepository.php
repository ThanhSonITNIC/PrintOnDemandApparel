<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface UserRepository.
 *
 * @package namespace App\Repositories;
 */
interface UserRepository extends RepositoryInterface
{
    /**
     * Check same user password
     * 
     * @param $password
     * @param $id user
     * 
     * @return boolean
     */
    public function checkPassword($password, $id);

    /**
     * Update user password
     * 
     * @param $password
     * @param $id user
     * 
     * @return mixed
     */
    public function updatePassword($password, $id);

}
