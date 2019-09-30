<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\LevelCreateRequest;
use App\Http\Requests\LevelUpdateRequest;
use App\Repositories\LevelRepository;
use App\Validators\LevelValidator;

/**
 * Class LevelsController.
 *
 * @package namespace App\Http\Controllers;
 */
class LevelsController extends Controller
{
    /**
     * @var LevelRepository
     */
    protected $repository;

    /**
     * @var LevelValidator
     */
    protected $validator;

    /**
     * LevelsController constructor.
     *
     * @param LevelRepository $repository
     * @param LevelValidator $validator
     */
    public function __construct(LevelRepository $repository, LevelValidator $validator)
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
        $levels = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $levels,
            ]);
        }

        return view('levels.index', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  LevelCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(LevelCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $level = $this->repository->create($request->all());

            $response = [
                'message' => 'Level created.',
                'data'    => $level->toArray(),
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
        $level = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $level,
            ]);
        }

        return view('levels.show', compact('level'));
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
        $level = $this->repository->find($id);

        return view('levels.edit', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  LevelUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(LevelUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $level = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Level updated.',
                'data'    => $level->toArray(),
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
                'message' => 'Level deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Level deleted.');
    }
}
