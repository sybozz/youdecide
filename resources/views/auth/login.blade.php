@extends('layouts.website')
@section('title', 'Login')

@section('mainContent')
    <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="login">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">

                    <div class="box-panel">

                        <!-- buttons top -->
                        <a href="#" class="btn btn-default facebook"><i class="fa fa-facebook icons"></i> Sign In with Facebook</a>
                        <a href="#" class="btn btn-default google"><i class="fa fa-google-plus icons"></i> Sign In with Google</a>
                        <!-- end buttons top -->

                        <p class="text-center margin-top-10"><span class="span-line">OR</span>
                        </p>

                        <!-- form login -->
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="">
                                    <div class="col-xs-6">
                                        <div class="checkbox flat-checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="fa fa-check"></span> Remember me?
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <p class="help-block"><a data-toggle="modal" href="{{ route('password.request') }}">Forgot password?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block">Log In</button>

                        </form>
                        <!-- form login -->

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Login Form   End =-=-=-=-=-=-= -->

@endsection
