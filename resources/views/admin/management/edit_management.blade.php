@extends('admin.master')
@section('title')
    Management Edit
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
                    <form action="{{route('update.management')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" value="{{$management->id}}" name="id">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" rows="5" name="name" value="{{$management->name}}" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" rows="5" name="designation" value="{{$management->designation}}" id="designation" placeholder="Designation">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" rows="5" name="email" value="{{$management->email}}" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" rows="5" name="facebook" value="{{$management->facebook}}" id="facebook" placeholder="Facebook">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" rows="5" name="instagram" value="{{$management->instagram}}" id="instagram" placeholder="Instagram">
                        </div>
                        <div class="form-group">
                            <label>LinkedIn</label>
                            <input type="text" class="form-control" rows="5" name="linkedIn" value="{{$management->linkedIn}}" id="linkedIn" placeholder="LinkedIn">
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" class="form-control" rows="5" name="youtube" value="{{$management->youtube}}" id="youtube" placeholder="Youtube">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <img src="{{asset($management->image)}}" class="mb-2" height="100" width="100" alt="">

                        <div class="form-group">
                            <label>Add to Homepage</label>
                            <select class="form-control" name="add_home">
                                <option value="1" @if ($management->add_home == 1) selected @endif>Yes</option>
                                <option value="0" @if ($management->add_home == 0) selected @endif>No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="status">
                                <option value="1" @if ($management->status == 1) selected @endif>Active</option>
                                <option value="0" @if ($management->status == 0) selected @endif>Deactive</option>
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
