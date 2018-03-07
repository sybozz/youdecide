@extends('layouts.website')
@section('title', 'Profile setting')


@section('mainContent')
    @include('user.includes.profileCover')
    <!-- =-=-=-=-=-=-= User Form Settings =-=-=-=-=-=-= -->
    <section class="section-padding-80" id="login">
        <div class="container">
            @if(Session::has('msg'))
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ Session::get('msg') }}</strong>
                </div>
            @endif
            <div class="row">
                <div class="col-sm-6 col-md-4">

                    <div class="box-panel">

                        <form action="{{ url('profile/picture/upload') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" name="profilePicture" id="imgInp">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id="img-upload" src="{{ asset('uploads/profile'.'/'.$userInfo->profilePicture) }}" alt="" />
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Change Image</button>

                        </form>

                    </div>
                </div>

                <div class="col-md-8">

                    <div class="box-panel">

                        <!-- form login -->
                        <form action="{{ url('profile/details/update') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="name" value="{{ $userInfo->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="{{ $userInfo->email }}" disabled class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Profession</label>
                                <input type="text" name="profession" value="{{ $userInfo->profession }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Bio</label>
                                <textarea name="bio" class="form-control" id="" cols="30" rows="10">{{ $userInfo->bio }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Old password</label>
                                <input type="password" name="oldPassword" placeholder="Your Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" name="newPassword" placeholder="Your Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkbox flat-checkbox">
                                            <label>
                                                <input type="checkbox">
                                                <span class="fa fa-check"></span> Make My Profile Private?
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg">Update My Profile</button>

                        </form>
                        <!-- form login -->

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= User Form Settings End =-=-=-=-=-=-= -->



@endsection