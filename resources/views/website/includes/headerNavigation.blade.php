<!-- =-=-=-=-=-=-= HEADER NAVIGATION =-=-=-=-=-=-= -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4">
                <ul class="top-nav nav-left">
                    <li><a href="{{ url('/proposals') }}">Proposals</a>
                    </li>
                    <li class="hidden-xs"><a href="{{ url('/debates') }}">Debates</a>
                    </li>
                    <li  class="hidden-xs"><a href="{{ url('/results') }}">Results</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-8">
                <ul class="top-nav nav-right">
                    @if( ! Auth::user() )
                    <li><a href="{{ url('/login') }}"><i class="fa fa-lock" aria-hidden="true"></i>Login</a>
                    </li>
                    <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Signup</a>
                    </li>
                    @else
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">
                            <img class="img-circle resize" alt="" src="{{ asset('website') }}/images/1.jpg">
                            <span class="hidden-xs small-padding">
								<span>{{ Auth::user()->name }}</span>
							 <i class="fa fa-caret-down"></i>
							</span>
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a href="{{ url('/timeline') }}"><i class=" icon-bargraph"></i> Dashboard</a></li>
                            <li><a href="{{ url('/profile-setting') }}"><i class=" icon-gears"></i> Profile Setting</a></li>
                            <li><a href="{{ url('/my-proposals') }}"><i class="icon-heart"></i> My proposal</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>