@extends('admin.layouts.main')

@section('body')

@include('layouts.alert')

<section id="basic-form-layouts">
    <div class="row match-height">
        {{-- Type --}}
        <div class="col-md-6">
            @php  
            $data = [
                'title' => 'Types',
                'key' => 'type',
                'columns' => [['ID', 'id'], ['Name', 'name']],
                'rows' => $types->toArray(),
                'controls' => [
                    ['name' => 'name', 'title' => 'Name', 'properties' => 'maxlength=30 required'],
                ],
                'name_route_destroy' => 'admin.post-types.destroy',
                'name_route_update' => 'admin.post-types.update',
                'name_route_store' => 'admin.post-types.store',
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
