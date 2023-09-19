@extends('admin.master')
@section('title')
    About edit
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
                    <form class="form-horizontal" action="{{route('update.about')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <input type="hidden" value="{{$about->id}}" name="id">
                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>About Title</label>
                            <input type="text" class="form-control" rows="5" name="title" value="{{$about->title}}" id="title" placeholder="Service Title">
                        </div>
                        <div class="form-group">
                            <label>About Image One</label>
                            <input type="file" name="image1" class="form-control">
                            <img src="{{asset($about->image1)}}" class="mb-2" height="100" width="100" alt="">
                        </div>
                        <div class="form-group">
                            <label>About Image Two</label>
                            <input type="file" name="image2" class="form-control">
                            <img src="{{asset($about->image2)}}" class="mb-2" height="100" width="100" alt="">
                        </div>


                        <div class="form-group">
                            <label>About Details</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details1">{!! $about->details1 !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label>About Details one</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details2">{!! $about->details2 !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>About Details two</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details3">{!! $about->details3 !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>About Details three</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details4">{!! $about->details4 !!}</textarea>
                        </div>

                        <h3>Details page information</h3>
                        <div class="form-group">
                            <label>About Banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                            <img src="{{asset($about->banner_image)}}" class="mb-2" height="100" width="100" alt="">
                        </div>

                        <div class="form-group">
                            <label>About page Details</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="page_details" >{!! $about->page_details !!}</textarea>
                        </div>

                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
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
