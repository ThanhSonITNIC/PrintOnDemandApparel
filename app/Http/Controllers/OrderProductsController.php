<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\OrderProductCreateRequest;
use App\Http\Requests\OrderProductUpdateRequest;
use App\Repositories\OrderProductRepository;
use App\Validators\OrderProductValidator;

/**
 * Class OrderProductsController.
 *
 * @package namespace App\Http\Controllers;
 */
class OrderProductsController extends Controller
{
    /**
     * @var OrderProductRepository
     */
    protected $repository;

    /**
     * @var OrderProductValidator
     */
    protected $validator;

    /**
     * OrderProductsController constructor.
     *
     * @param OrderProductRepository $repository
     * @param OrderProductValidator $validator
     */
    public function __construct(OrderProductRepository $repository, OrderProductValidator $validator)
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
        $orderProducts = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $orderProducts,
            ]);
        }

        return view('orderProducts.index', compact('orderProducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OrderProductCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(OrderProductCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $orderProduct = $this->repository->create($request->all());

            $response = [
                'message' => 'OrderProduct created.',
                'data'    => $orderProduct->toArray(),
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
        $orderProduct = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $orderProduct,
            ]);
        }

        return view('orderProducts.show', compact('orderProduct'));
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
        $orderProduct = $this->repository->find($id);

        return view('orderProducts.edit', compact('orderProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OrderProductUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(OrderProductUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $orderProduct = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'OrderProduct updated.',
                'data'    => $orderProduct->toArray(),
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
                'message' => 'OrderProduct deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'OrderProduct deleted.');
    }
}
