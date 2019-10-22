{{-- 

    $data = [
        update,
        delete
        title,
        image,
    ]
    
--}}

<form @if(array_key_exists('update', $data)) action="{{$data['update']}}" @endif method="post" class="form" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{$data['title']}}</h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    @if(array_key_exists('update', $data))
                    <li>
                        <button type="submit" class="btn-link" data-action="expand"><i class="icon-check"></i></button>
                    </li>
                    @endif
                    @if(array_key_exists('delete', $data))
                    <li><a href="{{$data['delete']}}" data-action="close"><i class="icon-trash"></i></a></li>
                    @endif
                    <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-block my-gallery" data-pswp-uid="1">
            <div class="row">
                <a href="{{$data['image']}}" itemprop="contentUrl" data-size="480x360">
                    <img class="img-thumbnail img-fluid" src="{{$data['image']}}" itemprop="thumbnail" alt="{{$data['image']}}">
                </a>
                @if(array_key_exists('update', $data))
                <div class="form-group mt-1 mb-0">
                    <div>
                        <label class="custom-file col-md-12 col-xs-12">
                            <input type="file" name="image" accept="image/*" class="custom-file-input" required>
                            <span class="custom-file-control form-control-file text-truncate"></span>
                        </label>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</form>