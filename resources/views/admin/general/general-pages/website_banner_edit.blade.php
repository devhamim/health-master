@extends('admin.master')
@section('body')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">

                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card-body">
                        <form class="form-horizontal" action="{{route('update.main.banner',['id'=>$banner->id])}}" enctype="multipart/form-data" method="POST">
                            @csrf
{{--                            <h3>Banner one</h3>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Title</label>--}}
{{--                                <textarea class="form-control" row="3" name="title">{{$banner->title}}</textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Short Details</label>--}}
{{--                                <textarea class="form-control" row="3" name="short_details">{{$banner->short_details}}</textarea>--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label>Banner Image</label>
                                <input type="file" name="image1" class="form-control">
                                <img src="{{asset($banner->image1)}}" class="mt-2" height="100" width="100" alt="">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label>Banner Image Two</label>--}}
{{--                                <input type="file" name="image2" class="form-control">--}}
{{--                                <img src="{{asset($banner->image2)}}" class="mt-2" height="100" width="100" alt="">--}}

{{--                            </div>--}}
                            <div class="table-responsive">
                                <button type="submit" class="btn btn-info">Update</button>
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
