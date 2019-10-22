{{-- 
    
$data = [
    'title' => 'Services',
    'key' => 'service',
    'columns' => [['ID', 'id'], ['Name', 'name'], ['Slug', 'slug']],
    'rows' => $services->toArray(),
    'controls' => [
        ['name' => 'name', 'title' => 'Name', 'properties' => 'maxlength=30 required', 'value' => ''],
        ['name' => 'slug', 'title' => 'Slug', 'properties' => 'maxlength=30 required'],
    ],
    'name_route_destroy' => 'admin.services.destroy',
    'name_route_update' => 'admin.services.update',
    'name_route_store' => 'admin.services.store',
    'update' => true,
    'delete' => true,
    'create' => true
];
    
--}}
<div class="card">
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">@lang($data['title'])</h4>
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
        <div class="card-block">
            {{-- list --}}
            <form class="form">
                <div class="form-body">
                    <h4 class="form-section"><i class="icon-android-menu"></i> @lang('List')</h4>
                    <div class="row">
                        <div class="table-responsive">
                            <div class="table-wrapper-scroll-y custom-scrollbar">
                                <table class="table table-bordered table-striped table-hover sortable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            @foreach ($data['columns'] as $column)
                                                <th class='text-nowrap'>@lang($column[0])</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rows as $index=>$row)
                                            @php
                                                $id = $row[$columns[0][1]];
                                                if(isset($row[$columns[1][1]])){
                                                    $id2 = preg_replace("/[^A-Za-z0-9]/", "", $row[$columns[1][1]]);
                                                }
                                                $key = $data['key'] . preg_replace("/[^A-Za-z0-9]/", "_", $id). (isset($id2) ? $id2 : "");
                                            @endphp

                                            <tr data-id="{{$id}}" data-toggle="modal" data-target="#{{$key}}">
                                                <th scope="row">{{$loop->iteration}}</th>
                                                @foreach ($columns as $indexColumn => $column)
                                                    <td class='text-nowrap'>{{$row[$column[1]]}}</td>
                                                @endforeach
                                            </tr>

                                            {{-- form update --}}
                                            <div class="modal fade text-xs-left" id="{{$key}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <form></form> {{-- First time can't run the form. I don't know --}}
                                                            @if($data['delete'])
                                                                <form action="{{route($data['name_route_destroy'], $id)}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    @foreach ($columns as $column)
                                                                        <input type="hidden" class="form-control" name="{{$column[1]}}" value="{{$row[$column[1]]}}">
                                                                    @endforeach
                                                                    <button type="submit" class="delete danger" title="Delete">
                                                                        <i class="icon-trash-b"></i>
                                                                    </button>
                                                                </form>
                                                            @endif
                                                            <label class="modal-title text-text-bold-600">{{$id}}</label>
                                                        </div>
                                                        <form @if($data['update']) action="{{route($data['name_route_update'], $id)}}" @endif method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                @foreach ($columns as $column)
                                                                    <label>@lang($column[0]) </label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="{{$column[1]}}" value="{{$row[$column[1]]}}">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="reset" class="btn btn-outline-secondary" data-dismiss="modal" value="@lang('Close')">
                                                                @if($data['update'])
                                                                    <input type="submit" class="btn btn-outline-primary" value="@lang('Save')">
                                                                @endif
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end form update --}}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            {{-- create --}}
            @if($data['create'])
                <form action="{{route($data['name_route_store'])}}" method="post">
                    @csrf
                    <h4 class="form-section"><i class="icon-android-add"></i> @lang('Create')</h4>    

                    @foreach ($data['controls'] as $control)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang($control['title'])</label>
                                    <input class="form-control" type="text" name="{{$control['name']}}" {{$control['properties']}} value="{{isset($control['value']) ? $control['value'] : ''}}">
                                </div>
                            </div>
                        </div>
                    @endforeach    
                    
                    <div class="form-actions right">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-check2"></i> @lang('Create')
                        </button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>