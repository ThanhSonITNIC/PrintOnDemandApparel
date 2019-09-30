<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PostTypeCreateRequest;
use App\Http\Requests\PostTypeUpdateRequest;
use App\Repositories\PostTypeRepository;
use App\Validators\PostTypeValidator;

/**
 * Class PostTypesController.
 *
 * @package namespace App\Http\Controllers;
 */
class PostTypesController extends Controller
{
    /**
     * @var PostTypeRepository
     */
    protected $repository;

    /**
     * @var PostTypeValidator
     */
    protected $validator;

    /**
     * PostTypesController constructor.
     *
     * @param PostTypeRepository $repository
     * @param PostTypeValidator $validator
     */
    public function __construct(PostTypeRepository $repository, PostTypeValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $postTypes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $postTypes,
            ]);
        }

        return view('postTypes.index', compact('postTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PostTypeCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PostTypeCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $postType = $this->repository->create($request->all());

            $response = [
                'message' => 'PostType created.',
                'data'    => $postType->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
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

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postType = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $postType,
            ]);
        }

        return view('postTypes.show', compact('postType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postType = $this->repository->find($id);

        return view('postTypes.edit', compact('postType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PostTypeUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PostTypeUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $postType = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'PostType updated.',
                'data'    => $postType->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'PostType deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'PostType deleted.');
    }
}
