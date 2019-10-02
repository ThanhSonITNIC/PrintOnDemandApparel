@extends('admin.layouts.main')

@section('body')

@include('admin.layouts.alert')
<!-- Search start -->
@php
    $searchFields = [
        ['value' => 'id', 'display' => 'Id'],
        ['value' => 'name', 'display' => 'Name'],
        ['value' => 'price', 'display' => 'Price'],
        ['value' => 'quantity', 'display' => 'Quantity'],
        ['value' => 'type.name', 'display' => 'Type'],
    ];
@endphp
@include('admin.layouts.search.index', $searchFields)
<!-- Search end -->
<!-- User Tables start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Apparels</h4>
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
                                <th class='text-nowrap'>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody id='result'>
                            @foreach ($products as $index=>$product)
                                <tr data-id="{{$product->id}}">
                                    <th scope="row">{{$product->id}}</th>
                                    <td class='text-nowrap'>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td class='text-nowrap'>{{$product->type->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-xs-right">
            {{-- {{ $products->links() }} --}}
        </div>
    </div>
</div>
<!-- product Tables end -->    

@endsection

@section('script')
    <script>
         // event click a product
         click_to_product();
         function click_to_product(){
            $('tr[data-id]').click(function(){
                var id = $(this).attr('data-id');
                var url = "{{route('admin.products.show', ':id')}}";
                url = url.replace(':id', id);
                location.href = url;
            });
         }
    </script>
@endsection