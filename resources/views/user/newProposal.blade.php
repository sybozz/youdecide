@extends('layouts.website')
@section('title', 'New proposal')

@section('mainContent')
    @include('user.includes.profileCover')
    <!-- =-=-=-=-=-=-= Post Proposal  =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="post-question">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 ">

                    <div class="box-panel">

                        <h2>Post Your Proposal</h2>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. </p>
                        <hr>
                        <!-- form login -->
                        <form action="" method="post" class="margin-top-40">
                            <div class="form-group">
                                <label>Proposal Title</label>
                                <input type="text" placeholder="Bootstrap Not Working" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="questions-category form-control">
                                    <option value="0">All Categories</option>
                                    <option value="36">Php</option>
                                    <option value="37">Html</option>
                                    <option value="42">Bootstrap</option>
                                    <option value="43">Wordpress</option>
                                    <option value="44">Laravel</option>
                                    <option value="45">Plugins</option>
                                    <option value="46">Routes</option>
                                    <option value="47">Css</option>
                                    <option value="48">Responsive</option>
                                    <option value="38">File Upload</option>
                                    <option value="39">Ajax</option>
                                    <option value="40">Jquery</option>
                                    <option value="41">Featured</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tags</label>

                                <input type="text" id="tags" value="Php,Laravel,Bootstrap" class="form-control" data-role="tagsinput">
                            </div>

                            <div class="form-group">
                                <label>Proposal Detials</label>
                                <textarea cols="12" rows="12" placeholder="Post Your Proposal Details Here....." id="message" name="message" class="form-control"></textarea>
                            </div>

                            <input type="hidden" name="status" value="0">

                            <button class="btn btn-primary pull-right">Publish Your Proposal</button>

                        </form>
                        <!-- form login -->

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection