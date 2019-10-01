<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\OrderStatusCreateRequest;
use App\Http\Requests\OrderStatusUpdateRequest;
use App\Repositories\OrderStatusRepository;
use App\Validators\OrderStatusValidator;

/**
 * Class OrderStatusesController.
 *
 * @package namespace App\Http\Controllers\Admin;
 */
class OrderStatusesController extends Controller
{
    /**
     * @var OrderStatusRepository
     */
    protected $repository;

    /**
     * @var OrderStatusValidator
     */
    protected $validator;

    /**
     * OrderStatusesController constructor.
     *
     * @param OrderStatusRepository $repository
     * @param OrderStatusValidator $validator
     */
    public function __construct(OrderStatusRepository $repository, OrderStatusValidator $validator)
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
        $orderStatuses = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $orderStatuses,
            ]);
        }

        return view('orderStatuses.index', compact('orderStatuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OrderStatusCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(OrderStatusCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $orderStatus = $this->repository->create($request->all());

            $response = [
                'message' => 'OrderStatus created.',
                'data'    => $orderStatus->toArray(),
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
        $orderStatus = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $orderStatus,
            ]);
        }

        return view('orderStatuses.show', compact('orderStatus'));
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
        $orderStatus = $this->repository->find($id);

        return view('orderStatuses.edit', compact('orderStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OrderStatusUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(OrderStatusUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $orderStatus = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'OrderStatus updated.',
                'data'    => $orderStatus->toArray(),
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
                'message' => 'OrderStatus deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'OrderStatus deleted.');
    }
}
