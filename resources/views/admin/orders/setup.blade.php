@extends('admin.layouts.main')

@section('body')

@include('layouts.alert')

<section id="basic-form-layouts">
    <div class="row match-height">
        {{-- Type --}}
        <div class="col-md-6">
            @php  
            $data = [
                'title' => 'Status',
                'key' => 'type',
                'columns' => [['ID', 'id'], ['Name', 'name']],
                'rows' => $statuses->toArray(),
                'controls' => [
                    ['name' => 'name', 'title' => 'Name', 'properties' => 'maxlength=30 required'],
                ],
                'name_route_destroy' => 'admin.order-statuses.destroy',
                'name_route_update' => 'admin.order-statuses.update',
                'name_route_store' => 'admin.order-statuses.store',
                'update' => true,
                'delete' => true,
                'create' => true
            ];
            @endphp
            @include('admin.layouts.forms.index', $data)
        </div>
        {{-- End type --}}
    </div>
</section>
@endsection
