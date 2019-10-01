@extends('admin.layouts.main')

@section('body')

@include('admin.layouts.alert')
<!-- Search start -->
@php
    $searchFields = [
        ['value' => 'name', 'display' => 'Name'],
        ['value' => 'email', 'display' => 'Email'],
        ['value' => 'tel', 'display' => 'Telephone'],
        ['value' => 'address', 'display' => 'Address'],
        ['value' => 'status', 'display' => 'Status'],
    ];
@endphp
@include('admin.layouts.search.index', $searchFields)
<!-- Search end -->
<!-- User Tables start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Users</h4>
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
                                <th>#</th>
                                <th class='text-nowrap'>Name</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id='result'>
                            @foreach ($users as $index=>$user)
                                <tr data-id="{{$user->id}}">
                                    <th scope="row">{{$index+1}}</th>
                                    <td class='text-nowrap'>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->tel}}</td>
                                    <td class='text-nowrap'>{{$user->address}}</td>
                                    <td>{{$user->status}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-xs-right">
            {{-- {{ $users->links() }} --}}
        </div>
    </div>
</div>
<!-- User Tables end -->    

@endsection

@section('script')
    <script>
         // event click a user
         click_to_user();
         function click_to_user(){
            $('tr[data-id]').click(function(){
                var id = $(this).attr('data-id');
                var url = "{{route('admin.users.show', ':id')}}";
                url = url.replace(':id', id);
                location.href = url;
            });
         }
    </script>
@endsection