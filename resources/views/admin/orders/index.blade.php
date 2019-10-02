@extends('admin.layouts.main')

@section('body')

@include('admin.layouts.alert')
<!-- Search start -->
@php
    $searchFields = [
        ['value' => 'id', 'display' => 'Id'],
        ['value' => 'customer.name', 'display' => 'Customer'],
        ['value' => 'total', 'display' => 'Total'],
        ['value' => 'paid', 'display' => 'Paid'],
        ['value' => 'status.name', 'display' => 'Status'],
    ];
@endphp
@include('admin.layouts.search.index', $searchFields)
<!-- Search end -->
<!-- User Tables start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Orders</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover sortable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th class='text-nowrap'>Customer</th>
                                <th>Total</th>
                                <th>Paid</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id='result'>
                            @foreach ($orders as $index=>$order)
                                <tr data-id="{{$order->id}}">
                                    <th scope="row">{{$order->id}}</th>
                                    <td class='text-nowrap'>{{$order->customer->name}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{$order->paid}}</td>
                                    <td class='text-nowrap'>{{$order->status->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-xs-right">
            {{-- {{ $orders->links() }} --}}
        </div>
    </div>
</div>
<!-- order Tables end -->    

@endsection

@section('script')
    <script>
         // event click a order
         click_to_order();
         function click_to_order(){
            $('tr[data-id]').click(function(){
                var id = $(this).attr('data-id');
                var url = "{{route('admin.orders.show', ':id')}}";
                url = url.replace(':id', id);
                location.href = url;
            });
         }
    </script>
@endsection