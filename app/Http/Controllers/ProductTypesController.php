<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ProductTypeCreateRequest;
use App\Http\Requests\ProductTypeUpdateRequest;
use App\Repositories\ProductTypeRepository;
use App\Validators\ProductTypeValidator;

/**
 * Class ProductTypesController.
 *
 * @package namespace App\Http\Controllers;
 */
class ProductTypesController extends Controller
{
    /**
     * @var ProductTypeRepository
     */
    protected $repository;

    /**
     * @var ProductTypeValidator
     */
    protected $validator;

    /**
     * ProductTypesController constructor.
     *
     * @param ProductTypeRepository $repository
     * @param ProductTypeValidator $validator
     */
    public function __construct(ProductTypeRepository $repository, ProductTypeValidator $validator)
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
        $productTypes = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $productTypes,
            ]);
        }

        return view('productTypes.index', compact('productTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductTypeCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ProductTypeCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $productType = $this->repository->create($request->all());

            $response = [
                'message' => 'ProductType created.',
                'data'    => $productType->toArray(),
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
        $productType = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $productType,
            ]);
        }

        return view('productTypes.show', compact('productType'));
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
        $productType = $this->repository->find($id);

        return view('productTypes.edit', compact('productType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductTypeUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ProductTypeUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $productType = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ProductType updated.',
                'data'    => $productType->toArray(),
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
                'message' => 'ProductType deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ProductType deleted.');
    }
}
