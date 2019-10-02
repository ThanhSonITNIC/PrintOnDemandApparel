@extends('admin.layouts.main')

@section('body')

@include('admin.layouts.alert')

<!-- Form start -->
<section id="basic-form-layouts">
    <div class="row match-height">
        {{-- Profile --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-colored-form-control">@lang('Profile')</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <form action="{{route('admin.users.destroy', $user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-link" type="submit"><i class="icon-trash"></i></button>
                                </form>
                            </li>
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <form class="form" method="POST" action="{{route('admin.users.update', $user->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <h4 class="form-section"><i class="icon-eye6"></i> @lang('About')</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>@lang('Name')</label>
                                            <input type="text" class="form-control" name="lname" value="{{$user->name}}">
                                        </div>
                                    </div>
                                </div>

                                <h4 class="form-section"><i class="icon-mail6"></i> @lang('Contact')</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Email')</label>
                                            <input class="form-control" type="email" readonly value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Telephone')</label>
                                            <input class="form-control" type="tel" name="tel" value="{{$user->tel}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>@lang('Address')</label>
                                    <input class="form-control" type="text" name="address" value="{{$user->address}}">
                                </div>

                                <h4 class="form-section"><i class="icon-locked"></i> @lang('Access')</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Level')</label>
                                            <select class="form-control" name="id_level">
                                                {{-- @foreach ($m_levels as $level)
                                                    <option value="{{$level->id}}" @if($level->id == $user->id_level) selected @endif>{{$level->name}}</option>
                                                @endforeach --}}
                                                <option>xxx</option>
                                                <option>xxx</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Status')</label>
                                            <select class="form-control" name="id_status">
                                                {{-- @foreach ($m_statususer as $status)
                                                    <option value="{{$status->id}}" @if($status->id == $user->id_status) selected @endif>{{$status->name}}</option>
                                                @endforeach --}}
                                                <option>xxx</option>
                                                <option>xxx</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions right">
                                <button type="submit" name="save" class="btn btn-primary">
                                    <i class="icon-check2"></i> @lang('Save')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End profile --}}
        
        {{-- Password --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-colored-form-control">@lang('Password')</h4>
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
                        <form class="form" method="POST" action="">
                            @csrf
                            @method('PUT')
                            <h4 class="form-section"><i class="icon-edit"></i> @lang('Change')</h4>
                            <div class="form-body">
                                <div class="form-group">
                                    <label>@lang('Current password')</label>
                                    <input class="form-control" type="password" name="current_password" required>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <label>@lang('New password')</label>
                                    <input class="form-control" type="password" name="password" required>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <label>@lang('Confirm password')</label>
                                    <input class="form-control" type="password" name="confirm_password" required>
                                </div>
                            </div>
                            <div class="form-actions right">
                                <button type="submit" name="save" class="btn btn-primary">
                                    <i class="icon-check2"></i> @lang('Change')
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-block">
                        <form class="form" method="POST" action="">
                            @csrf
                            <h4 class="form-section"><i class="icon-loop"></i>@lang('Reset')</h4>
                            <div class="form-body">
                                <div class="form-group">
                                    <label>@lang('Email')</label>
                                    <input class="form-control" type="email" name="email" value='{{$user->email}}' required>
                                </div>
                            </div>
                            <div class="form-actions right">
                                <button type="submit" name="save" class="btn btn-primary">
                                    <i class="icon-check2"></i> @lang('Send')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End password --}}
    </div>
</section>

@endsection