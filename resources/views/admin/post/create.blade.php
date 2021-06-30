@extends('admin.layouts.app')


@section('main-content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('admin.layouts.header')
        @include('admin.layouts.menu')


        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome to our post page</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Posts</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->


                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Add New Post</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Post Format</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="" id="post_format">
                                                <option value="">--select--</option>
                                                <option value="Image">Image</option>
                                                <option value="Gallery">Gallery</option>
                                                <option value="Video">Video</option>
                                                <option value="Audio">Audio</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Post Title</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Catgory</label>
                                        <div class="col-md-9">

                                            @foreach ($all_cat as $cat  )

                                            <div class="checkbox">
                                                <label>
                                                    <input value="{{ $cat -> id}}" type="checkbox" name="cat[]"> {{ $cat -> name }}
                                                </label>
                                            </div>

                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Tag</label>
                                        <div class="col-lg-9">
                                            <select style="width: 100%" name="" class="post_tag_select" multiple="multiple">

                                                @foreach($all_tag as $tag)
                                                <option value="{{ $tag -> id}}"> {{ $tag -> name }} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Features Image</label>
                                        <div class="col-lg-9">
                                            <img style="width: 500px;" class="post_img_load" src="" alt=""><br><br>
                                            <label for="post_image_select"><img style="width :70px; cursor:pointer;" src="{{ URL::to('admin/assets/img/gallery.png') }}" alt=""></label>
                                            <input style="display: none;" type="file" id="post_image_select">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Content</label>
                                        <div class="col-lg-9">
                                            <textarea id="post_editor" ></textarea>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>







        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

      </div>





@endsection
