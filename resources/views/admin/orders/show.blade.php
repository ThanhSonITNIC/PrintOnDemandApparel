@extends('admin.layouts.main')

@section('body')

@include('admin.layouts.alert')

<!-- Info -->
<div class="row">
    <div class="col-xs-12">
        <form action="{{route('admin.orders.update', $order->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@lang('Order')</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><button type="submit" class="btn-link"><i class="icon-check"></i></button></li>
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        <table class="table table-bordered cursor-hand mb-0">
                            <thead>
                                <tr>
                                    <th>@lang('ID')</th>
                                    <th>@lang('Customer')</th>
                                    <th>@lang('Paid')</th>
                                    <th>@lang('Total')</th>
                                    <th class="text-nowrap">@lang('Created at')</th>
                                    <th>@lang('Status')</th>
                                    <th class="text-nowrap">@lang('To step')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td><a href="{{route('admin.users.show', $order->customer->id)}}">{{$order->customer->name}}</a></td>
                                    <td><input type="number" min=0 max="{{$order->total}}" class="form-control" name="paid" value="{{$order->paid}}"></td>
                                    <td>{{$order->total}}</td>
                                    <td class="text-nowrap">{{$order->created_at}}</td>
                                    <td>{{$order->status->name}}</td>
                                    <td>
                                        <form name="to-step" action="{{route('admin.orders.update', $order->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <select id='status' name='id_status' class="form-control form-control-sm input-sm">
                                                @foreach ($orderStatus as $status)
                                                    <option value="{{$status->id}}" @if($status->id == $order->id_status) selected @endif>{{$status->name}}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Info end --> 

<!-- Products -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('Products')</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover sortable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('Product')</th>
                                <th>@lang('Quantity')</th>
                                <th>@lang('Price')</th>
                                <th>@lang('Total')</th>
                            </tr>
                        </thead>

                        <tbody id='result'>
                            @foreach ($order->products as $index=>$product)
                                <tr data-id="{{$product->id_product}}"  data-toggle="modal" data-target="#product_{{$product->id_product}}">
                                    <th scope="row">{{$index+1}}</th>
                                    <td class="text-nowrap"><a href='{{route('admin.products.show', $product->product->id)}}'>{{$product->product->name}}</a></td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->total}}</td>
                                </tr>

                                <div class="modal fade text-xs-left" id="product_{{$product->id_product}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <label class="modal-title text-text-bold-600">{{$product->product->name}}</label>
                                            </div>
                                            <form action="{{route('admin.order-products.update', $product->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id_order" value="{{$order->id}}">
                                                <div class="modal-body">
                                                    <label>@lang('Quantity'): </label>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
                                                    </div>
                                                    <label>@lang('Price'): </label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="price" value="{{$product->price}}">
                                                    </div>
                                                    <label>@lang('Color'): </label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="color" value="{{$product->color}}">
                                                    </div>
                                                    <label>@lang('Size'): </label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="size" value="{{$product->size}}">
                                                    </div>
                                                    <label>@lang('Note'): </label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="note" value="{{$product->note}}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="reset" class="btn btn-outline-secondary" data-dismiss="modal" value="@lang('Close')">
                                                    <input type="submit" class="btn btn-outline-primary" value="@lang('Save')">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products end -->    


<!-- Log -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('Logs')</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>@lang('By')</th>
                                <th class="text-nowrap">@lang('Content')</th>
                                <th class="text-nowrap">@lang('At')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->logs as $log)
                                <tr>
                                    <td class="text-nowrap">{{$log->user->name}}</td>
                                    <td>{{$log->content}}</td>
                                    <td class="text-nowrap">{{$log->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Log end -->   

@endsection
