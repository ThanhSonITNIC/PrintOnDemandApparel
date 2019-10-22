<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PasswordUpdateRequest;
use App\Repositories\UserRepository;
use App\Validators\PasswordValidator;
use Hash;

class PasswordController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @var PasswordValidator
     */
    protected $validator;

    /**
     * PasswordController constructor.
     *
     * @param UserRepository $repository
     * @param PasswordValidator $validator
     */
    public function __construct(UserRepository $repository, PasswordValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Update password
     *
     * @param  PasswordUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PasswordUpdateRequest $request, $id)
    {
        try {
            // validator
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
            
            // check current password
            if(!$this->repository->checkPassword($request->current_password, $id))
                return redirect()->back()->withErrors('The current password is incorrect.')->withInput();

            // update password
            $user = $this->repository->updatePassword($request->password, $id);

            $response = [
                'message' => 'Password updated.',
                'data'    => $user->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('success', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }
}
