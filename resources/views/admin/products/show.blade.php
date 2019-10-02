@extends('admin.layouts.main')

@section('body')

@include('admin.layouts.alert')

<section id="basic-form-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card" style="height: 100%">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">{{$product->id}}</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <form action="{{route('admin.products.destroy', $product->id)}}" method="post">
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
                        <form class="form" method="POST" action="{{route('admin.products.update', $product->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>@lang('Name')</label>
                                            <input type="text" class="form-control" name="name" value="{{$product->name}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('ID')</label>
                                            <input type="text" class="form-control" name="id" value="{{$product->id}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Slug')</label>
                                            <input type="text" class="form-control" name="slug" value="{{$product->slug}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Price')</label>
                                            <input type="text" class="form-control" name="price" min="0" value="{{$product->price}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('Quantity')</label>
                                            <input type="number" min=0 class="form-control" name="quantity" value="{{$product->quantity}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>@lang('Highlight')</label>
                                            <div class="form-control">
                                                <label class="custom-control custom-checkbox mb-0">
                                                    <input type="checkbox" class="custom-control-input" name="highlight" @if($product->highlight) checked @endif>
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
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>@lang('Description')</label>
                                            <textarea rows="5" class="form-control" name="description">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>@lang('Image')</label>
                                            <a href="{{asset(!isset(json_decode($product->image)->link) ?: json_decode($product->image)->link)}}" target="_blank"><img class="img-fluid form-control" style="height:100px" src="{{asset(!isset(json_decode($product->image)->watermark) ?: json_decode($product->image)->watermark)}}"></a>
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