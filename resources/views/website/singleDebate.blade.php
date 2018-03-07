@extends('layouts.website')
@section('title', 'Debates')

@section('mainContent')
    <section class="section-padding-80 white question-details">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <!-- Question Detail -->

                    <!-- Question Listing -->
                    <div class="listing-grid ">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3><a  href="#"> Bootstrap fixed sidebar causes main content to overlap ? </a></h3>
                                <div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span> <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p> I am a novice when it comes to Bootstrap and css in general. I would like a site with a fixed sidebar, fixed top nav and main content that scrolls. </p>
                                <p>The navbar is fixed and works ok. The layout of the sidebar and main content is fine too. The problem comes when I set the sidebar to fixed. The main content overlaps the sidebar.</p>
                                <p>I am using a basic grid layout:</p>
                                <strong>Html Structure</strong>
                                <p> I have tried adding a margin to the left of the main content to push it over but it looks horrible when resized to smaller device. </p>
                                <p>What is the correct way to achieve a fixed sidebar whilst still maintaining responsiveness? </p>
                                <div class="tagcloud"> <a href="#">html</a> <a href="#">css</a> <a href="#">bootstrap</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Question Listing End -->

                    <div class="clearfix"></div>
                    <!-- Thread Reply -->
                    <div class="thread-reply">
                        <h2>Thread Reply </h2>

                        <!-- Reply Grid -->
                        <div class="media-block card-box ribbon-content">
                            <div class="ribbon base"><span>Correct Answer</span>
                            </div>

                            <div class="media-left">
                                <a data-toggle="tooltip" data-placement="bottom" data-original-title="Martina Jaz" href="#">
                                    <img class="img-sm" alt="Profile Picture" src="{{ asset('website') }}/images/authors/9.jpg">

                                </a>

                            </div>
                            <div class="media-body">
                                <div class="mar-btm">
                                    <h4><a href="#" class="btn-link text-semibold media-heading box-inline">Muhammad Umair</a></h4>
                                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                </div>
                                <p>I think this is what you are looking for. You need to remove the <code>float: left</code> from the inner nav to center it and make it a inline-block.</p>

                                <div class="pad-ver pull-right">

                                    <a class="btn btn-sm btn-default btn-hover-success" data-toggle="tooltip" data-placement="bottom" data-original-title="Like This Answer" href="#"><i class="fa fa-thumbs-up"></i></a>
                                    <a class="btn btn-sm btn-default btn-hover-danger" href="#" data-original-title="Spam" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-thumbs-down"></i></a>

                                </div>

                            </div>
                        </div>
                        <!-- Reply Grid End -->
                        <!-- Reply Grid -->
                        <div class="media-block card-box ">

                            <div class="media-left">
                                <a href="#">
                                    <img class="img-sm" alt="Profile Picture" src="{{ asset('website') }}/images/authors/7.jpg">

                                </a>

                            </div>
                            <div class="media-body">
                                <div class="mar-btm">
                                    <h4><a href="#" class="btn-link text-semibold media-heading box-inline">Martina Jaz</a></h4>
                                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 21 min ago</p>
                                </div>
                                <p>I think this is what you are looking for. You need to remove the <code>float: left</code> from the inner nav to center it and make it a inline-block.</p>

                                <div class="pad-ver pull-right">

                                    <a class="btn btn-sm btn-default btn-hover-success" data-toggle="tooltip" data-placement="bottom" data-original-title="Like This Answer" href="#"><i class="fa fa-thumbs-up"></i></a>
                                    <a class="btn btn-sm btn-default btn-hover-danger" href="#" data-original-title="Spam" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-thumbs-down"></i></a>

                                    <a class="btn btn-sm btn-default btn-hover-primary" href="#">Mark As Correct</a>
                                </div>

                            </div>
                        </div>
                        <!-- Reply Grid End -->
                        <!-- Reply Grid -->
                        <div class="media-block card-box ">

                            <div class="media-left">
                                <a href="#">
                                    <img class="img-sm" alt="Profile Picture" src="{{ asset('website') }}/images/authors/6.jpg">

                                </a>

                            </div>
                            <div class="media-body">
                                <div class="mar-btm">
                                    <h4><a href="#" class="btn-link text-semibold media-heading box-inline">John Doe</a></h4>
                                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 40 min ago</p>
                                </div>
                                <p>I think this is what you are looking for. You need to remove the <code>float: left</code> from the inner nav to center it and make it a inline-block.</p>

                                <div class="pad-ver pull-right">

                                    <a class="btn btn-sm btn-default btn-hover-success" data-toggle="tooltip" data-placement="bottom" data-original-title="Like This Answer" href="#"><i class="fa fa-thumbs-up"></i></a>
                                    <a class="btn btn-sm btn-default btn-hover-danger" href="#" data-original-title="Spam" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-thumbs-down"></i></a>

                                    <a class="btn btn-sm btn-default btn-hover-primary" href="#">Mark As Correct</a>
                                </div>

                            </div>
                        </div>
                        <!-- Reply Grid End -->

                        <div class="clearfix"></div>

                        <form>
                            <div class="form-group">
                                <label>Post Your Answer</label>
                                <textarea cols="12" rows="7" class="form-control" placeholder="I Have The Aswert"></textarea>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block">Post Your Answer</button>

                        </form>

                    </div>
                    <!-- Thread Reply End -->
                </div>

                <!-- Right Sidebar -->
                <div class="col-md-4 col-sm-12 col-xs-12 clearfix">

                    <!-- sidebar -->
                    <div class="side-bar">
                        <div class="widget">
                            <div class="widget-image widget-image-sm" style="min-height: 300px">
                                <div class="widget-image-content text-center"> <img class="img-thumbnail" alt="avatar" src="{{ asset('website') }}/images/authors/12.jpg">
                                    <h2 class="widget-heading text-light"><strong>John Doe</strong></h2>
                                    <h4 class="widget-heading text-light-op"><em>Graphic Designer</em></h4>
                                </div>
                            </div>
                            <div class="widget-content border-bottom">
                                <h4>About</h4>
                                <p>Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit.</p>
                                <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                            </div>
                        </div>

                    </div>
                    <!-- sidebar end -->
                </div>
                <!-- Right Sidebar End -->

            </div>
            <!-- Row End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Question Details end =-=-=-=-=-=-= -->

@endsection