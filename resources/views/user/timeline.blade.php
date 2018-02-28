@extends('layouts.website')
@section('title', 'Profile')

@section('mainContent')

    {{-- Profile cover --}}
    @include('user.includes.profileCover')

    <!-- =-=-=-=-=-=-= User TimeLine =-=-=-=-=-=-= -->

    <section class="section-padding-80">

        <div class="container">
            <!-- Row -->
            <div class="row">

                <div class="col-md-12">

                    <div class="timeline-container">
                        <ul>
                            <li>
                                <div class="timeline">
                                    <div class="user-timeline">
                                        <span><img alt="" src="{{ asset('website') }}/images/authors/13.jpg"></span>
                                    </div>
                                    <div class="timeline-detail">
                                        <div class="timeline-head">
                                            <h3><a href="#">John Doe</a><span> left a reply on</span> <a href="#">How does Laravel's auth system work internally?</a><span>2 min ago</span></h3>
                                            <div class="social-share">
                                                <a title=""><i class="fa fa-share-alt"></i></a>
                                                <ul class="social-btns">
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <p>Set it as the font <a title="" href="#">John Doe</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. </p>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline">
                                    <div class="user-timeline">
                                        <span><img alt="" src="{{ asset('website') }}/images/authors/13.jpg"></span>
                                    </div>
                                    <div class="timeline-detail">
                                        <div class="timeline-head">
                                            <h3><a href="#">John Doe</a><span> left a reply on</span> <a href="#">Bootstrap fixed navbar navbar-brand add to logo</a><span>2 min ago</span></h3>
                                            <div class="social-share">
                                                <a title=""><i class="fa fa-share-alt"></i></a>
                                                <ul class="social-btns">
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                            <pre class="brush: php;">

																		 </pre>

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline">
                                    <div class="user-timeline">
                                        <span><img alt="" src="{{ asset('website') }}/images/authors/13.jpg"></span>
                                    </div>
                                    <div class="timeline-detail">
                                        <div class="timeline-head">
                                            <h3><a href="#">John Doe</a><span> started a new conversation</span> <a href="#">Codeigniter Severity warning</a><span>2 min ago</span></h3>
                                            <div class="social-share">
                                                <a title=""><i class="fa fa-share-alt"></i></a>
                                                <ul class="social-btns">
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <p>I am trying to use file_get_contents However that gives me error .</p>
                                            <pre class="brush: php;">
<!-- Fixed navbar -->
A PHP Error was encountered

Severity: Warning

Message: file_get_contents(https://api.telegram.org/bot [number token]/getUpdates):

Filename: controllers/lifeChange.php


Line Number: 19

Backtrace:

File: C:\OpenServer\domains\localhost\admin\application\controllers\lifeChange.php
Line: 19
Function: file_get_contents

File: C:\OpenServer\domains\localhost\admin\index.php
Line: 315
Function: require_once
																		 </pre>

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline">
                                    <div class="user-timeline">
                                        <span><img alt="" src="{{ asset('website') }}/images/authors/13.jpg"></span>
                                    </div>
                                    <div class="timeline-detail">
                                        <div class="timeline-head">
                                            <h3><a href="#">John Doe</a><span> started a new conversation</span> <a href="#">Codeigniter Severity warning</a><span>2 min ago</span></h3>
                                            <div class="social-share">
                                                <a title=""><i class="fa fa-share-alt"></i></a>
                                                <ul class="social-btns">
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                    <li><a href="#" data-placement="left" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="timeline-content">
                                            <p>
                                                I've created a meta field 'priority_priority' so that I can sort post based on how many times they have been visited..least visited post gets more priority. so whenever a visitor visits the post the priority variable is decremented.but I want priority to be decremented only on the first visit from the same user so am using cookies but the following code in not working the priority is always decremented and </p>
                                            <pre class="brush: php;">
 var_dump($_COOKIE['visitor'.$post_id])
</pre>
                                            <p>always gives NULL</p>

                                            <pre class="brush: php;">
$post_id = get_the_ID();
       $priority = get_post_meta($post_id,'priority_priority',true);
       if($priority>1)
       {
          if(!isset($_COOKIE['visitor'.$post_id]))
          {
               $bool=setcookie('visitor'.$post_id,$post_id,DAY_IN_SECONDS,'/');
               if(count($_COOKIE) > 0)
               {
                    $priority = $priority-1;
                    update_post_meta($post_id,'priority_priority',$priority);
               }
          }

       }
 get_header();
 ?>

<p>How can i fix it ? Help Needed</p>

</pre>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Pagination View More -->
                    <div class="text-center clearfix">
                        <button class="btn btn-primary btn-lg">View All Activities</button>
                    </div>
                    <!-- Pagination View More End -->

                </div>

            </div>

        </div>

    </section>
    <!-- =-=-=-=-=-=-= User TimeLine End =-=-=-=-=-=-= -->




@endsection