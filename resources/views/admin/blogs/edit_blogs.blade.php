@extends('admin.master')
@section('title')
    Blogs Edit
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">

                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{route('update.blogs')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" value="{{$blog->id}}" name="id">

                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>Service Title</label>
                            <input type="text" class="form-control" rows="5" name="title" id="service_title" value="{{$blog->title}}" placeholder="Blogs Title">
                        </div>
                        <div class="form-group">
                            <label>Blogs Image</label>
                            <input type="file" name="main_image" class="form-control">
                        </div>
                        <img src="{{asset($blog->main_image)}}" class="mb-2" height="100" width="100" alt="">
                        <div class="form-group">
                            <label>Service Small Details</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="short_details">{!! $blog->short_details !!}</textarea>
                        </div>

                        <h3>Details page information</h3>
                        <div class="form-group">
                            <label>banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                        </div>
                        <img src="{{asset($blog->banner_image)}}" class="mb-2" height="100" width="100" alt="">


                        <div class="form-group">
                            <label>Details Image one</label>
                            <input type="file" name="details_image1" class="form-control">
                        </div>
                        <img src="{{asset($blog->details_image1)}}" class="mb-2" height="100" width="100" alt="">

                        <div class="form-group">
                            <label>Details Image two</label>
                            <input type="file" name="details_image2" class="form-control">
                        </div>
                        <img src="{{asset($blog->details_image2)}}" class="mb-2" height="100" width="100" alt="">
                        <div class="form-group">
                            <label>Details Image Three</label>
                            <input type="file" name="details_image3" class="form-control">
                        </div>
                        <img src="{{asset($blog->details_image3)}}" class="mb-2" height="100" width="100" alt="">




                        <div class="form-group">
                            <label>Service Long Details one</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details1">{!! $blog->details1 !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Service Long Details two</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details2">{!! $blog->details2 !!}</textarea>
                        </div>


                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="add_home">
                                <option value="1" @if ($blog->add_home == 1) selected @endif>Yes</option>
                                <option value="0" @if ($blog->add_home == 0) selected @endif>No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="status">
                                <option value="1" @if ($blog->status == 1) selected @endif>Active</option>
                                <option value="0" @if ($blog->status == 0) selected @endif>Deactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
