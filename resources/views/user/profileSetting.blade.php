@extends('layouts.website')
@section('title', 'Profile setting')


@section('mainContent')
    @include('user.includes.profileCover')
    <!-- =-=-=-=-=-=-= User Form Settings =-=-=-=-=-=-= -->
    <section class="section-padding-80" id="login">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">

                    <div class="box-panel">

                        <form action="{{ url('profile/picture/upload') }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                <img id="img-upload" src="{{ asset('website') }}/images/1.jpg" alt="" />
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Change Image</button>

                        </form>

                    </div>
                </div>

                <div class="col-md-8">

                    <div class="box-panel">

                        <!-- form login -->
                        <form action="{{ url('profile/update') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="name" placeholder="John Doe" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Your Email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Profession</label>
                                <select name="profession" class="form-control">
                                    <option value="0">-- Select your profession --</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Bio</label>
                                <textarea name="bio" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" placeholder="Your Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" placeholder="Your Password" class="form-control">
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