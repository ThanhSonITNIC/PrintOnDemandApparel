@extends('admin.layouts.main')

@section('body')

@include('admin.layouts.alert')

<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card" style="height: 100%">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Create</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <form class="form" method="POST" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('ID')</label>
                                            <input type="text" class="form-control" name="id" value="{{old('id')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Name')</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Price')</label>
                                            <input type="number" class="form-control" name="price" min="0" value="{{old('price')}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Quantity')</label>
                                            <input type="number" min=0 class="form-control" name="quantity" value="{{old('quantity')}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>@lang('Highlight')</label>
                                            <div class="form-control">
                                                <label class="custom-control custom-checkbox mb-0">
                                                    <input type="checkbox" class="custom-control-input" name="highlight">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>@lang('Image') </label>
                                            <div>
                                                <label class="custom-file col-md-12 col-xs-12" id="customFile">
                                                    <input type="file" name="image" class="custom-file-input">
                                                    <span class="custom-file-control form-control-file text-truncate"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>@lang('Description')</label>
                                            <textarea rows="5" class="form-control" name="description">{{old('description')}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>@lang('Colors')</label>
                                                <input type="text" class="form-control" name="colors" value="{{old('colors')}}" data-role="tagsinput">
                                            </div>
                                        </div>
    
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>@lang('Sizes')</label>
                                                <input type="text" class="form-control" name="sizes" value="{{old('sizes')}}" data-role="tagsinput">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>@lang('Type')</label>
                                                <select name="id_type" class="form-control">
                                                    @foreach ($productTypes as $type)
                                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                                    @endforeach
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
    </div>
</section>

@endsection