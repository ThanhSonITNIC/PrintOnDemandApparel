@if(session()->has('success'))
    <div class="alert alert-success mb-2" role="alert">
        {!! session()->get('success') !!}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger mb-2" role="alert">
        {!! session()->get('error') !!}
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-warning mb-2" role="alert">
            {!! session()->get('warning') !!}
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-default mb-2" role="alert">
            {!! session()->get('message') !!}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif