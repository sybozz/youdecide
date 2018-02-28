@extends('layouts.website')
@section('title', 'Register new account')

@section('mainContent')
    <!-- =-=-=-=-=-=-= Register Form =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="register">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">

                    <div class="box-panel">

                        <!-- buttons top -->
                        <a href="#" class="btn btn-default facebook"><i class="fa fa-facebook icons"></i> Sign Up with Facebook</a>
                        <a href="#" class="btn btn-default google"><i class="fa fa-google-plus icons"></i> Sign Up with Google</a>
                        <!-- end buttons top -->

                        <p class="text-center margin-top-10"><span class="span-line">OR</span>
                        </p>

                        <!-- form login -->
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">

                                    <div class="col-xs-12 text-right">
                                        <p class="help-block"><a data-toggle="modal" href="{{ url('/login') }}">Already Register Sing In</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Create Account</button>

                        </form>
                        <!-- form login -->

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Register Form End =-=-=-=-=-=-= -->

@endsection