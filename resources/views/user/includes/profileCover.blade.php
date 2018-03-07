<!-- =-=-=-=-=-=-= User Profile =-=-=-=-=-=-= -->
<section id="user-profile" class="user-profile parallex">
    <div class="container">
        <!-- Row -->
        <div class="row">

            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="profile-sec ">
                    <div class="profile-head">
                        <div class="col-md-6 col-xs-12 col-sm-6 no-padding">
                            <div class="profile-avatar">
                                <span><img class="img-responsive img-circle" alt="" src="{{ asset('uploads/profile'.'/'.$userInfo->profilePicture) }}"></span>
                                <div class="profile-name">
                                    <h3>{{ Auth::user()->name }}</h3>
                                    <i>{{ $userInfo->profession }}</i>
                                    {{--<ul class="social-btns">--}}
                                        {{--<li><a href="#" title=""><i class="fa fa-facebook"></i></a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="#" title=""><i class="fa fa-google-plus"></i></a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="#" title=""><i class="fa fa-twitter"></i></a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6 no-padding">
                            <ul class="profile-connect">
                                <li><a title="" href="{{ url('/create-debate') }}">Crate debate</a>
                                </li>
                                <li><a title="" href="{{ url('/new-proposal') }}">Post proposal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Profile Sec -->
            </div>

        </div>
        <!-- Row End -->
    </div>
    <!-- end container -->
</section>

<!-- =-=-=-=-=-=-= User Profile end =-=-=-=-=-=-= -->