@extends('layouts.app')

@section('content')

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header no-border">
                                <div class="card-title text-xs-center">
                                    <div class="p-1"><img src="{{ url('images/logo/robust-logo-dark.png') }}" alt="branding logo"></div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>ورود به اکانت کاربری</span></h6>
                            </div>

                            <div class="card-body collapse in">
                                <div class="card-block">

                                    <form class="form-horizontal form-simple" role="form" method="POST" action="{{ route('login') }}" novalidate>

                                        {{ csrf_field() }}

                                        <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }} position-relative has-icon-left mb-0">
                                            <input type="email" class="form-control form-control-lg input-lg" value="{{ old('email') }}"  id="user-name" placeholder="نام کاربری" required autofocus>
                                            <div class="form-control-position">
                                                <i class="icon-head"></i>
                                            </div>
                                        </fieldset>


                                        <fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }} position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-lg input-lg" id="user-password" placeholder="پسورد" name="password" required>
                                            <div class="form-control-position">
                                                <i class="icon-lock"></i>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group row">
                                            <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label style="font-size:12px;cursor:pointer" for="remember-me">ذخیره سازی اطلاعات ورود</label>
                                                </fieldset>
                                            </div>
                                            <div style="font-size:12px;cursor:pointer" class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="{{ route('password.request') }}" class="card-link">بازیابی پسورد</a></div>
                                        </fieldset>

                                        @if ($errors->has('password'))
                                            <span class="tag tag-default tag-danger mb-1">{{ $errors->first('password') }}</span>
                                        @endif

                                        @if ($errors->has('email'))
                                            <span class="tag tag-default tag-danger mb-1"> {{ $errors->first('email') }} </span>
                                        @endif

                                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i>ورود  </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="">
                                    <p class="float-sm-left text-xs-center m-0"><a style="font-size:13px;cursor:pointer"  href="{{ route('password.request') }}" class="card-link">بازیابی پسورد</a></p>
                                    <p class="float-sm-right text-xs-center m-0"  style="font-size:13px;" >ساخت <a href="register-simple.html" class="card-link">حساب کاربری</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

@endsection
