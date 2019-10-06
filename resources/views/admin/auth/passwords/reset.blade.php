<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    @include('admin.layouts.head')
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                        <div class="card-header no-border pb-0">
                            <div class="card-title text-xs-center">
                                <img src="app-assets/images/logo/robust-logo-dark.png" alt="branding logo">
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>@lang('Reset password')</span></h6>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                @include('layouts.alert')
                                <form class="form-horizontal" method="POST" action="{{route('admin.password.update')}}" novalidate>
                                    @csrf
                                    <input type="hidden" name="token" value="{{$token}}">
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="email" name="email" class="form-control form-control-lg input-lg" placeholder="@lang('Your Email Address')" value="{{$email}}" required>
                                        <div class="form-control-position">
                                            <i class="icon-mail6"></i>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" name="password" class="form-control form-control-lg input-lg" placeholder="New password...">
                                        <div class="form-control-position">
                                            <i class="icon-lock3"></i>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" name="password_confirmation" class="form-control form-control-lg input-lg" placeholder="Confirm password...">
                                        <div class="form-control-position">
                                            <i class="icon-lock3"></i>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-lock4"></i> @lang('Reset')</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer no-border">
                            <p class="float-sm-left text-xs-center"><a href="{{route('admin.login')}}" class="card-link">@lang('Login')</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    @include('admin.layouts.foot')

  </body>
</html>
