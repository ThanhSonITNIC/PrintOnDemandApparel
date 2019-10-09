@extends('admin.layouts.main')

@section('body')

@include('admin.layouts.alert')

<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-colored-form-control">Create</h4>
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
                    <form class="form" method="POST" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>@lang('Title')</label>
                                <input class="form-control" type="text" name="title" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label>@lang('Image') </label>
                                <div>
                                    <label class="custom-file col-md-12 col-xs-12" id="customFile">
                                        <input type="file" name="u_image" accept="image/*" class="custom-file-input">
                                        <span class="custom-file-control form-control-file text-truncate"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('Description')</label>
                                        <textarea rows="5" class="form-control" name="description">{{old('desciption')}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>@lang('Content')</label>
                                <textarea name="content" id="editor">
                                    {{old('content')}}
                                </textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('Tags')</label>
                                        <input type="text" class="form-control tags" name="tags" data-role="tagsinput">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('Type')</label>
                                        <select name="id_type" class="form-control">
                                            @foreach ($postTypes as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="projectinput6">@lang('Highlight')</label>
                                        <div class="form-control">
                                            <label class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" name="highlight">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description"></span>
                                            </label>
                                        </div>
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
</div>

@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection