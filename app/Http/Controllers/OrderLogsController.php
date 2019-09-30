<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\OrderLogCreateRequest;
use App\Http\Requests\OrderLogUpdateRequest;
use App\Repositories\OrderLogRepository;
use App\Validators\OrderLogValidator;

/**
 * Class OrderLogsController.
 *
 * @package namespace App\Http\Controllers;
 */
class OrderLogsController extends Controller
{
    /**
     * @var OrderLogRepository
     */
    protected $repository;

    /**
     * @var OrderLogValidator
     */
    protected $validator;

    /**
     * OrderLogsController constructor.
     *
     * @param OrderLogRepository $repository
     * @param OrderLogValidator $validator
     */
    public function __construct(OrderLogRepository $repository, OrderLogValidator $validator)
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
        $orderLogs = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $orderLogs,
            ]);
        }

        return view('orderLogs.index', compact('orderLogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OrderLogCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(OrderLogCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $orderLog = $this->repository->create($request->all());

            $response = [
                'message' => 'OrderLog created.',
                'data'    => $orderLog->toArray(),
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
        $orderLog = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $orderLog,
            ]);
        }

        return view('orderLogs.show', compact('orderLog'));
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
        $orderLog = $this->repository->find($id);

        return view('orderLogs.edit', compact('orderLog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OrderLogUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(OrderLogUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $orderLog = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'OrderLog updated.',
                'data'    => $orderLog->toArray(),
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
                'message' => 'OrderLog deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'OrderLog deleted.');
    }
}
