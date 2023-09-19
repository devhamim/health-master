@extends('admin.master')
@section('title')
    Blogs
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
                    <form class="form-horizontal" action="{{route('store.blogs')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <h3>Front page information</h3>
                        <div class="form-group">
                            <label>Blogs Title</label>
                            <input type="text" class="form-control" rows="5" name="title" id="title" placeholder="Blogs Title">
                        </div>
                        <div class="form-group">
                            <label>Service Image</label>
                            <input type="file" name="main_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Blog short Details</label>
                            <textarea  id="tinymce" class="editor form-control" col="10" row="3" name="short_details"></textarea>
                        </div>
                        <h3>Details page information</h3>
                        <div class="form-group">
                            <label>banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Details Image one</label>
                            <input type="file" name="details_image1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Details Image two</label>
                            <input type="file" name="details_image2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Details Image three</label>
                            <input type="file" name="details_image3" class="form-control">
                        </div>



                        <div class="form-group">
                            <label>Blog Long Details one</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="details1"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Blog Long Details two</label>
                            <textarea id="tinymce" class="editor form-control" row="3" name="details2"></textarea>
                        </div>


                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="add_home">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>

                        <th>Details</th>
                        <th>Active/Deactive</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->title ?? null }}</td>
                            <td><img src="{{ asset($blog->main_image) }}" style="height: 100px"></td>

                            <td>{!! $blog->short_details ?? null !!}</td>
                            <td>
                                @if ($blog->status == 1)
                                    <button class="btn btn-sm btn-primary">Active</button>
                                @elseif($blog->status == 0)
                                    <button class="btn btn-sm btn-danger">Deactive</button>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edit.blogs',['id'=>$blog->id]) }}" class="btn btn-primary btn-sm editProduct">Edit</a>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
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
